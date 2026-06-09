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
        
        size_t pos1 = text.indexOf( ':' );
        if( pos1 != 0 && pos1 <= 2 && pos1 >= 1 )
        {
            String substr = text.substring( 0, pos1 );
            Serial.println( substr );
        }
      



        size_t pos2;
        size_t pos3;
    }
}




