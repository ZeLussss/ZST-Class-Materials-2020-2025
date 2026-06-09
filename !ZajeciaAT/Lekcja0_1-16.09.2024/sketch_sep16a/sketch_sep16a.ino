int control = 0;

void setup() 
{
    Serial.begin( 115200 );

    pinMode( 0, INPUT_PULLUP );
}

void loop() 
{
    bool stateButton = digitalRead( 0 );

    if( stateButton == LOW )
    {
       if( control != 0 )
       {
          Serial.println( "Wcisnieto" );
       } 
       control = 0;
    }
    else if( stateButton == 1 )
    {
        if( control != 1 )
        {
            control = 1;
        }
    }
}
