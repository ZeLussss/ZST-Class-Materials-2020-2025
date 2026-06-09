#define buttonA 40
#define buttonB 41
#define buttonX 2
#define buttonY 5

#define UP    13
#define DOWN  1
#define RIGHT 4
#define LEFT  42

#define PUSH  14

// MISO -1
#define DC    33 //DC
#define CS    34 //CS
#define CLK   35 //SCLK
#define DIN   36 //MOSI
#define RST   37 //RST
#define BL    38 //BL

void setup() {
  Serial.begin( 115200 );

  pinMode( buttonA, INPUT_PULLUP );
  pinMode( buttonB, INPUT_PULLUP );
  pinMode( buttonX, INPUT_PULLUP );
  pinMode( buttonY, INPUT_PULLUP );

  pinMode( UP, INPUT_PULLUP );
  pinMode( DOWN, INPUT_PULLUP );
  pinMode( RIGHT, INPUT_PULLUP );
  pinMode( LEFT, INPUT_PULLUP );

  pinMode( PUSH, INPUT_PULLUP );
}

void loop() {
  int buttonA_state = digitalRead( buttonA );
  int buttonB_state = digitalRead( buttonB );
  int buttonX_state = digitalRead( buttonX );
  int buttonY_state = digitalRead( buttonY );

  int stateUP = digitalRead( UP );
  int stateDOWN = digitalRead( DOWN );
  int stateRIGHT = digitalRead( RIGHT );
  int stateLEFT = digitalRead( LEFT );

  int statePUSH = digitalRead( PUSH );

  Serial.println( "----------------------------" );

  if( buttonA_state == LOW )
  {
      Serial.println( "ButtonA state: 1" );
  }
  else
  {
      Serial.println( "ButtonA state: 0" );
  }

  if( buttonB_state == LOW )
  {
      Serial.println( "ButtonB state: 1" );
  }
  else
  {
      Serial.println( "ButtonB state: 0" );
  }

  if( buttonX_state == LOW )
  {
      Serial.println( "ButtonX state: 1" );
  }
  else
  {
      Serial.println( "ButtonX state: 0" );
  }

  if( buttonY_state == LOW )
  {
      Serial.println( "ButtonY state: 1" );  
  }
  else
  {
      Serial.println( "ButtonY state: 0" );
  }

  if( stateUP == LOW )
  {
      Serial.println( "UP state: 1" );  
  }
  else
  {
      Serial.println( "UP state: 0" );  
  }

  if( stateDOWN == LOW )
  {
      Serial.println( "DOWN state: 1" );  
  }
  else
  {
      Serial.println( "DOWN state: 0" );  
  }

  if( stateRIGHT == LOW )
  {
      Serial.println( "RIGHT state: 1" );  
  }
  else
  {
      Serial.println( "RIGHT state: 0" );  
  }

  if( stateLEFT == LOW )
  {
      Serial.println( "LEFT state: 1" );  
  }
  else
  {
      Serial.println( "LEFT state: 0" );  
  }

  if( statePUSH == LOW )
  {
      Serial.println( "PUSH state: 1" );  
  }
  else
  {
      Serial.println( "PUSH state: 0" );  
  }

  Serial.println( "----------------------------" );
  Serial.println( );

  delay( 1000 );

}
