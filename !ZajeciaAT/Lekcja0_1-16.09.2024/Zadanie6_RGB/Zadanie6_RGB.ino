#include <Adafruit_NeoPixel.h>
#include <string>
#include <cstring>
using namespace std;

// Which pin on the Arduino is connected to the NeoPixels?
#define PIN       21 // On Trinket or Gemma, suggest changing this to 1

// How many NeoPixels are attached to the Arduino?
#define NUMPIXELS 1 // Popular NeoPixel ring size

Adafruit_NeoPixel pixels(NUMPIXELS, PIN, NEO_RGB + NEO_KHZ800);

int R = 0;
int G = 0;
int B = 0;

void setup() 
{
    Serial.begin( 9600 );

    pixels.begin(); 
}

void loop() 
{
    if( Serial.available() > 0 )
    {
        String text = Serial.readString();
        text.trim();
        
        String color = text.substring( 0, 1 );
        // Serial.println( color );
        
        String value = "";

        if( text.length() == 4 )       value = text.substring( 1, 4 );
        else if( text.length() == 3 )  value = text.substring( 1, 3 );
        else                           value = text.substring( 1, 2 );

        // Serial.println( value );

        int num;
        const char *cstr = value.c_str();
        num = atoi( cstr );

        // Serial.println( i );

        if( color == "R" || color == "G" || color == "B" || color == "r" || color == "g" || color == "b" ) 
        {
            if( num >= 0 && num <= 255 )
            {
                if( color == "R" || color == "r" )      R = num;
                else if( color == "G" || color == "g" ) G = num;
                else if( color == "B" || color == "b" ) B = num;

                pixels.setPixelColor( 0, pixels.Color( R, G, B ) );
                pixels.show();
            } 
        }
    }
}




