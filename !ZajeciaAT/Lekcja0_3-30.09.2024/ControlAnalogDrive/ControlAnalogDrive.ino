#include <Arduino.h>
#include <U8g2lib.h>
#include <string>

#ifdef U8X8_HAVE_HW_SPI
#include <SPI.h>
#endif
#ifdef U8X8_HAVE_HW_I2C
#include <Wire.h>
#endif

int analogPinX = 5; 
int analogPinY = 4;
int digitalPinButton = 2;
int valX = 0;  // variable to store the value read
int valY = 0;
bool stateButton = 1;

U8G2_SH1106_128X64_NONAME_F_HW_I2C u8g2(U8G2_R0, /* reset=*/ U8X8_PIN_NONE, 9, 10 );

void setup(void) 
{
    Serial.begin( 9600 );
    u8g2.begin();
    pinMode( digitalPinButton, INPUT_PULLUP );
}

void loop(void) 
{
    valX = analogRead( analogPinX );  // read the input pin
    valY = analogRead( analogPinY );
    stateButton = digitalRead( digitalPinButton );

    Serial.println( valX );          // debug value
    Serial.println( valY );
    Serial.println( stateButton );
    Serial.println();

    // Rysowanie
    u8g2.clearBuffer();					
    u8g2.setFont( u8g2_font_helvR08_tr );	

    int fixedValX = map( valX, 0, 4096, 0, 128 );
    int fixedValY = map( valY, 0, 4096, 0, 64 );
    String values = String( "X: " + String( fixedValX ) + " | Y: " + String( fixedValY ) + " | " + String( stateButton ) );

    u8g2.drawStr( 5, 15, values.c_str() );
    u8g2.drawLine( 64, 32, fixedValX, fixedValY );

    u8g2.sendBuffer();					
    // delay();  
}
