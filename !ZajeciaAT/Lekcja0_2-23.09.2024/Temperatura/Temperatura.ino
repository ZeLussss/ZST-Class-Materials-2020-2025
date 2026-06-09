#include <Arduino.h>
#include <U8g2lib.h>

#include <Wire.h>

// 'wifi', 10x10px
const unsigned char wifi [] PROGMEM = {
	0xff, 0x7f, 0xff, 0x7f, 0x0f, 0x78, 0x03, 0x60, 0xf1, 0x47, 0x1c, 0x1c, 0x07, 0x70, 0xf3, 0x63, 
	0x3f, 0x7e, 0x1f, 0x7c, 0xff, 0x7f, 0x7f, 0x7f, 0x7f, 0x7f, 0xff, 0x7f, 0xff, 0x7f
};

U8G2_SH1106_128X64_NONAME_F_HW_I2C u8g2(U8G2_R0, /* reset=*/ U8X8_PIN_NONE, 10, 9 );

void setup(void) 
{
    u8g2.begin();


}

void loop(void) {
    u8g2.clearBuffer();					
    u8g2.setFont(u8g2_font_helvR08_tr);	

    u8g2.setDrawColor( 1 );
    u8g2.drawBox( 0, 20, 128, 44 );
    u8g2.drawStr( 5, 15, "13:30" );
    u8g2.drawStr( 100, 15, "100%" );

    u8g2.setDrawColor( 0 );
    u8g2.drawXBMP( 80, 0, 15, 15, wifi );
    u8g2.drawStr( 5, 35, "Tarnow" );
    u8g2.drawStr( 5, 40, "______" );
    u8g2.drawStr( 5, 55, "Slonce" );
    u8g2.drawStr( 45, 35, "Temperatura: 24C" );
    u8g2.drawStr( 45, 55, "Wilgotnosc: 78%" );
    u8g2.drawLine( 41, 25, 41, 60 );

    u8g2.sendBuffer();					
    delay(1000);  
}

