#include <Arduino.h>
#include <U8g2lib.h>
#include <Wire.h>
#include <WiFi.h>
#include <HTTPClient.h>
#include <ArduinoJson.h>
#include <string>
#include <Adafruit_Sensor.h>
#include <Adafruit_BME280.h>
#include <SPI.h>
using namespace std;

const char* ssid = "C111";
const char* password = "abcdefabcdef987654321";

#define SEALEVELPRESSURE_HPA (1013.25)

Adafruit_BME280 bme; // I2C

unsigned long delayTime;

//Your Domain name with URL path or IP address with path
String serverName = "https://api.open-meteo.com/v1/forecast?latitude=50.0138&longitude=20.987&current=temperature_2m,relative_humidity_2m,weather_code";

// 'wifi', 10x10px
const unsigned char wifi [] PROGMEM = {
	0xff, 0x7f, 0xff, 0x7f, 0x0f, 0x78, 0x03, 0x60, 0xf1, 0x47, 0x1c, 0x1c, 0x07, 0x70, 0xf3, 0x63, 
	0x3f, 0x7e, 0x1f, 0x7c, 0xff, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f, 0xff, 0x7f, 0xff, 0x7f
};

const unsigned char sun [] PROGMEM = {
	0x7f, 0x7f, 0x6f, 0x7b, 0x6f, 0x7b, 0x7f, 0x7f, 0x19, 0x4c, 0xef, 0x7b, 0xef, 0x7b, 0xe0, 0x03, 
	0xef, 0x7b, 0xef, 0x7b, 0x19, 0x4c, 0x7f, 0x7f, 0x6f, 0x7b, 0x6f, 0x7b, 0x7f, 0x7f
};

const unsigned char cloud [] PROGMEM = {
	0x00, 0x00, 0x00, 0x00, 0xc0, 0x00, 0x30, 0x00, 0x88, 0x02, 0x00, 0x00, 0x02, 0x00, 0x00, 0x00, 
	0x00, 0x08, 0x00, 0x04, 0xfc, 0x03, 0x00, 0x00, 0x00, 0x00
};

const unsigned char rain [] PROGMEM = {
	0x1f, 0x7e, 0xef, 0x7d, 0xf7, 0x7b, 0xf7, 0x4f, 0xf3, 0x5f, 0xfd, 0x3f, 0xfe, 0x3f, 0xfe, 0x3f, 
	0xfd, 0x4f, 0x01, 0x60, 0xbf, 0x7f, 0x93, 0x64, 0xdb, 0x76, 0xb7, 0x7d, 0xdb, 0x7e
};

const unsigned char questionMark [] PROGMEM = {
	0xff, 0x7f, 0xff, 0x7f, 0x1f, 0x7c, 0x0f, 0x78, 0xcf, 0x71, 0xff, 0x71, 0xff, 0x78, 0x7f, 0x7c, 
	0x7f, 0x7e, 0x7f, 0x7e, 0xff, 0x7f, 0x7f, 0x7e, 0x7f, 0x7e, 0xff, 0x7f, 0xff, 0x7f
};

U8G2_SH1106_128X64_NONAME_F_HW_I2C u8g2(U8G2_R0, /* reset=*/ U8X8_PIN_NONE, 9, 10 );

void setup(void) 
{
    Serial.begin(115200); 
    u8g2.begin();

    WiFi.begin(ssid, password);
    Serial.println("Connecting");
    while(WiFi.status() != WL_CONNECTED) 
    {
      delay(500);
      Serial.print(".");
    }
    Serial.println("");
    Serial.print("Connected to WiFi network with IP Address: ");
    Serial.println(WiFi.localIP());
 
    Serial.println("Timer set to 5 seconds (timerDelay variable), it will take 5 seconds before publishing the first reading.");

  while(!Serial);    // time to get serial running
    Serial.println(F("BME280 test"));

    unsigned status;

    Wire.begin( 10, 9 );
    
    // default settings
    status = bme.begin( 0x76 );  
    // You can also pass in a Wire library object like &Wire2
    // status = bme.begin(0x76, &Wire2)
    if (!status) {
        Serial.println("Could not find a valid BME280 sensor, check wiring, address, sensor ID!");
        Serial.print("SensorID was: 0x"); Serial.println(bme.sensorID(),16);
        Serial.print("        ID of 0xFF probably means a bad address, a BMP 180 or BMP 085\n");
        Serial.print("   ID of 0x56-0x58 represents a BMP 280,\n");
        Serial.print("        ID of 0x60 represents a BME 280.\n");
        Serial.print("        ID of 0x61 represents a BME 680.\n");
        while (1) delay(10);
    }
    
    Serial.println("-- Default Test --");
    delayTime = 1000;

    Serial.println();
}

void loop(void) 
{
    float temperature;
    int humidity;
    int weatherCode;

    if(WiFi.status()== WL_CONNECTED)
    {
        printValues();
        delay(delayTime);

        HTTPClient http;
      
        // Your Domain name with URL path or IP address with path
        http.begin(serverName.c_str());
      
        // If you need Node-RED/server authentication, insert user and password below
        //http.setAuthorization("REPLACE_WITH_SERVER_USERNAME", "REPLACE_WITH_SERVER_PASSWORD");
      
        // Send HTTP GET request
        int httpResponseCode = http.GET();
      
        if (httpResponseCode>0) 
        {
          Serial.print("HTTP Response code: ");
          Serial.println(httpResponseCode);

          JsonDocument doc;
          String payload = http.getString();
          const char* json = payload.c_str();

          DeserializationError error = deserializeJson(doc, json);
          if(error) 
          {
              Serial.print(F("deserializeJson() failed: "));
              Serial.println(error.f_str());
              return;
          }

          temperature = doc[ "current" ][ "temperature_2m" ];
          humidity = doc[ "current" ][ "relative_humidity_2m" ];
          weatherCode = doc[ "current" ][ "weather_code" ];

          Serial.println( temperature );
          Serial.println( humidity );
          Serial.println( weatherCode );
        } 

        else 
        {
            Serial.print("Error code: ");
            Serial.println(httpResponseCode);
        }
        // Free resources
        http.end();
      }
      else 
      {
          Serial.println("WiFi Disconnected");
      }

    delay( 10000 );

    u8g2.clearBuffer();					
    u8g2.setFont(u8g2_font_helvR08_tr);	

    u8g2.setDrawColor( 1 );
    u8g2.drawBox( 0, 20, 128, 44 );
    u8g2.drawStr( 5, 15, "13:30" );
    u8g2.drawStr( 100, 15, "100%" );

    if( weatherCode == 0 )
    {
        u8g2.drawXBMP( 60, 0, 15, 15, sun );
    }
    else if( weatherCode >=1 && weatherCode <= 3 )
    {
        u8g2.drawXBMP( 60, 0, 13, 13, cloud );
    }
    else if( weatherCode == 61 || weatherCode == 63 || weatherCode == 65 )
    {
        u8g2.drawXBMP( 60, 0, 15, 15, rain );
    }
    else
    {
        u8g2.drawXBMP( 60, 0, 15, 15, questionMark );
    }

    String tempString = "Temperatura: " + String( int( bme.readTemperature() ) ) + "C";
    String wilgString = "Wilgotnosc: " + String( int( bme.readHumidity() ) ) + "%";

    const char* temp = tempString.c_str();
    const char* wilg = wilgString.c_str();

    u8g2.setDrawColor( 0 );
    u8g2.drawXBMP( 80, 0, 15, 15, wifi );
    u8g2.drawStr( 5, 35, "Tarnow" );
    u8g2.drawStr( 5, 40, "______" );
    u8g2.drawStr( 5, 55, "..." );
    u8g2.drawStr( 45, 35, temp );
    u8g2.drawStr( 45, 55, wilg );
    u8g2.drawLine( 41, 25, 41, 60 );


    u8g2.sendBuffer();					
    delay(1000);  
}

void printValues() {
    Serial.print("Temperature = ");
    Serial.print(bme.readTemperature());
    Serial.println(" °C");

    Serial.print("Pressure = ");

    Serial.print(bme.readPressure() / 100.0F);
    Serial.println(" hPa");

    Serial.print("Approx. Altitude = ");
    Serial.print(bme.readAltitude(SEALEVELPRESSURE_HPA));
    Serial.println(" m");

    Serial.print("Humidity = ");
    Serial.print(bme.readHumidity());
    Serial.println(" %");

    Serial.println();
}