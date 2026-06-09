#include <Adafruit_NeoPixel.h>

// Which pin on the Arduino is connected to the NeoPixels?
#define PIN       21 // On Trinket or Gemma, suggest changing this to 1

// How many NeoPixels are attached to the Arduino?
#define NUMPIXELS 1 // Popular NeoPixel ring size

Adafruit_NeoPixel pixels(NUMPIXELS, PIN, NEO_RGB + NEO_KHZ800);

int counter = 0;
int control = 0;

void setup() 
{
    Serial.begin( 9600 );

    pixels.begin(); 

    pinMode( 0, INPUT );
}

void loop() 
{
    // pixels.clear();

    switch( counter )
    {
        case 0:
            pixels.setPixelColor( 0, pixels.Color( 0, 0, 0 ) );
            break;

        case 1:  
            pixels.setPixelColor( 0, pixels.Color( 255, 0, 0 ) );
            break;

        case 2:
            pixels.setPixelColor( 0, pixels.Color( 0, 255, 0 ) );
            break;

        case 3:
            pixels.setPixelColor( 0, pixels.Color( 0, 0, 255 ) );
            break;

        default: 
            pixels.setPixelColor( 0, pixels.Color( 0, 0, 0 ) );

    }
    pixels.show();
    
    bool stateButton = digitalRead( 0 );

    if( stateButton == 0 )
    {
        if( control == 0 )
        {
            counter++;
            
            if( counter == 4 )
            {
                counter = 0;
            }

            control = 1;
        }
    }
    else
    {
        control = 0;
    }

}
