#include <ESP32Servo.h>
#include <Arduino.h>
#include <U8g2lib.h>
#include <string>
#ifdef U8X8_HAVE_HW_SPI
#include <SPI.h>
#endif
#ifdef U8X8_HAVE_HW_I2C
#include <Wire.h>
#endif

Servo myservo;  // create servo object to control a servo

int pos = 0;    // variable to store the servo position
int servoPin = 7;

int pinAxisX = 10;
int pinAxisY = 9;
int pinButton = 8;
int trigPin = 6;    // Trigger
int echoPin = 5;    // Echo
long duration, cm, inches;

U8G2_SH1106_128X64_NONAME_F_HW_I2C u8g2(U8G2_R0, /* reset=*/ U8X8_PIN_NONE, 2, 1 );

void setup() {
  Serial.begin (9600);
  u8g2.begin();

  ESP32PWM::allocateTimer(0);
	ESP32PWM::allocateTimer(1);
	ESP32PWM::allocateTimer(2);
	ESP32PWM::allocateTimer(3);
	myservo.setPeriodHertz(50);    // standard 50 hz servo
	myservo.attach(servoPin, 500, 2500); // attaches the servo on pin 18 to the servo object
	// using default min/max of 1000us and 2000us
	// different servos may require different min/max settings
	// for an accurate 0 to 180 sweep

  pinMode( pinAxisX, INPUT );
  pinMode( pinAxisY, INPUT );
  pinMode( pinButton, INPUT_PULLUP );

  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
}

// Funkcja loop
void loop() {
  // Czyszczenie bufora

  int valueX = analogRead( pinAxisX );
  int valueY = analogRead( pinAxisY );
  bool buttonPress = digitalRead( pinButton );
  int valueXMapped = map( valueX, 0, 4096, 0, 180 );
  
  // Ustawienia radaru
  int centerX = 64; // środek ekranu X
  int centerY = 64; // środek ekranu Y
  int radius = 50;  // promień radaru

  // Rysowanie linii w półkolu
  for (int angle = 0; angle <= 180; angle++) 
  {
    myservo.write( angle );
    delay( 10 );

    digitalWrite(trigPin, LOW);
    delayMicroseconds(5);
    digitalWrite(trigPin, HIGH);
    delayMicroseconds(10);
    digitalWrite(trigPin, LOW);
    pinMode(echoPin, INPUT);
    duration = pulseIn(echoPin, HIGH);

    // Convert the time into a distance
    cm = (duration/2) / 29.1;     // Divide by 29.1 or multiply by 0.0343
    inches = (duration/2) / 74;   // Divide by 74 or multiply by 0.0135

    int mappedValue = map( cm, 15, 60, 0, 50 );

    // if( mappedValue < 20 ) mappedValue = 40 - mappedValue;
    // else if( mappedValue > 20 ) mappedValue = 0 + mappedValue;

    //radius = map( mappedValue, 0, 50, 0, 1 )

    u8g2.clearBuffer();
    u8g2.drawCircle(64, 64, 50, U8G2_DRAW_ALL);
    // Konwersja kątów na radiany
    float rad = angle * (3.14159 / 180);
    
    // Wyliczanie końców linii
    int xEnd = centerX + mappedValue * cos(rad);
    int yEnd = centerY - mappedValue * sin(rad);
    
    // Rysowanie linii
    u8g2.drawLine(centerX, centerY, xEnd, yEnd );

    Serial.println( mappedValue );

    u8g2.sendBuffer();
    delay( 20 );
  }

  // Rysowanie okręgu

  // Przesłanie bufora na ekran
  u8g2.sendBuffer();

  // Czas dla wygodnego odświeżania
  delay(1000);
}

