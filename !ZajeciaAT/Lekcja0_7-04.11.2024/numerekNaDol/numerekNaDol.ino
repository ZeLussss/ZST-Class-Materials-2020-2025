/*  
 Test the tft.print() viz. embedded tft.write() function

 This sketch used font 2, 4, 7

 Make sure all the display driver and pin connections are correct by
 editing the User_Setup.h file in the TFT_eSPI library folder.

 #########################################################################
 ###### DON'T FORGET TO UPDATE THE User_Setup.h FILE IN THE LIBRARY ######
 #########################################################################
 */


#include <TFT_eSPI.h> // Graphics and font library for ILI9341 driver chip
#include <SPI.h>

#include <Ticker.h>

Ticker flipper;

#define TFT_GREY 0x5AEB // New colour

TFT_eSPI tft = TFT_eSPI();  // Invoke library

int x = 0;

void flip() {
    tft.fillScreen(TFT_GREY);
    tft.println( x );
    x++;
    tft.setCursor( 0, x * 10 );

    if( x >= 23 )
    {
        x = 0;
    }
}

void setup(void) {
  tft.init();
  tft.setTextColor(TFT_WHITE,TFT_BLACK);  tft.setTextSize(1);
  tft.setRotation(2);
  tft.fillScreen(TFT_GREY);
  tft.setCursor( 0, 0 );
  flipper.attach(0.3, flip);
}

void loop() {

}



