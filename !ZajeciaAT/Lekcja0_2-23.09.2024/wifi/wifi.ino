#include <WiFi.h>
#include <HTTPClient.h>
#include <ArduinoJson.h>

const char* ssid = "C111";
const char* password = "abcdefabcdef987654321";

//Your Domain name with URL path or IP address with path
String serverName = "https://api.open-meteo.com/v1/forecast?latitude=50.0138&longitude=20.987&current=temperature_2m,relative_humidity_2m,weather_code";

void setup() {
  Serial.begin(115200); 

  WiFi.begin(ssid, password);
  Serial.println("Connecting");
  while(WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to WiFi network with IP Address: ");
  Serial.println(WiFi.localIP());
 
  Serial.println("Timer set to 5 seconds (timerDelay variable), it will take 5 seconds before publishing the first reading.");
}

void loop() {

    if(WiFi.status()== WL_CONNECTED)
    {
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

        float temperature = doc[ "current" ][ "temperature_2m" ];
        int humidity = doc[ "current" ][ "relative_humidity_2m" ];

        Serial.println( temperature );
        Serial.println( humidity );

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
  
}
