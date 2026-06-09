int analogPinX = 5; 
int analogPinY = 4;
int digitalPinButton = 2;
int valX = 0;  // variable to store the value read
int valY = 0;
bool stateButton = 1;

void setup() {
  Serial.begin(9600);           //  setup serial
  pinMode( digitalPinButton, INPUT_PULLUP );
}

void loop() {
  valX = analogRead( analogPinX );  // read the input pin
  valY = analogRead( analogPinY );
  stateButton = digitalRead( digitalPinButton );

  Serial.println( valX );          // debug value
  Serial.println( valY );
  Serial.println( stateButton );
  Serial.println();
  delay( 100 );
}
