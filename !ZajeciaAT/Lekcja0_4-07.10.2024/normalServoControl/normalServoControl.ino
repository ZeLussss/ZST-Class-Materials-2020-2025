  #include <ESP32Servo.h>

Servo myservo;  // create servo object to control a servo

int pos = 0;    // variable to store the servo position
int servoPin = 7;

int pinAxisX = 10;
int pinAxisY = 9;
int pinButton = 8;

void setup() {
	// Allow allocation of all timers
	ESP32PWM::allocateTimer(0);
	ESP32PWM::allocateTimer(1);
	ESP32PWM::allocateTimer(2);
	ESP32PWM::allocateTimer(3);
	myservo.setPeriodHertz(50);    // standard 50 hz servo
	myservo.attach(servoPin, 500, 2500); // attaches the servo on pin 18 to the servo object
	// using default min/max of 1000us and 2000us
	// different servos may require different min/max settings
	// for an accurate 0 to 180 sweep

  pinMode( pinAxisX, INPUT );
  pinMode( pinAxisY, INPUT );
  pinMode( pinButton, INPUT_PULLUP );
}

void loop() {

    int valueX = analogRead( pinAxisX );
    int valueY = analogRead( pinAxisY );
    bool buttonPress = digitalRead( pinButton );

    int valueXMapped = map( valueX, 0, 4096, 0, 180 );
	
		myservo.write( valueXMapped );    // tell servo to go to position in variable 'pos'
		delay(100);             // waits 15ms for the servo to reach the position
	
}

