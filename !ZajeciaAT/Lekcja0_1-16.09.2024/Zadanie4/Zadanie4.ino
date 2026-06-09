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
    for( long i = 0; i <= 65536; i += 10 )
    {
        uint32_t rgbColor = pixels.ColorHSV( i );
        pixels.fill( rgbColor );
        pixels.show();
        delay( 2 );
    }
}
