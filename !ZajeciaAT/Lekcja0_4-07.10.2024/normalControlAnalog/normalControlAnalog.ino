#include "USB.h"
#include "USBHIDMouse.h"
#include "USBHIDKeyboard.h"
USBHIDMouse Mouse;
USBHIDKeyboard Keyboard;

int pinAxisX = 10;
int pinAxisY = 9;
int pinButton = 8;

void setup()
{
  Serial.begin( 115200 );

  pinMode( pinAxisX, INPUT );
  pinMode( pinAxisY, INPUT );
  pinMode( pinButton, INPUT_PULLUP );

  Mouse.begin();
  Keyboard.begin();
  USB.begin();
}

void loop()
{
  int valueX = analogRead( pinAxisX );
  int valueY = analogRead( pinAxisY );
  bool buttonPress = digitalRead( pinButton );

  int valueXMapped = map( valueX, 0, 4096, -10, 10 );
  int valueYMapped = map( valueY, 0, 4096, -10, 10 );

  if( valueXMapped < -1 )
  {
      Mouse.move( valueXMapped, 0 );
  }
  else if( valueXMapped > 1 )
  {
      Mouse.move( valueXMapped, 0 );
  }
  else if( valueYMapped < -1 )
  {
      Mouse.move( 0, valueYMapped );
  }
  else if( valueYMapped > 1 )
  {
      Mouse.move( 0, valueYMapped );
  }
  else
  {
      Mouse.move( 0, 0 );
  }

  Serial.print( "Axis value X: " );
  Serial.println( valueXMapped );

  Serial.print( "Axis value Y: " );
  Serial.println( valueYMapped );

  Serial.print( "Button state: " );
  Serial.println( buttonPress );
  
  Serial.println( "" );

  delay( 10 );
}
