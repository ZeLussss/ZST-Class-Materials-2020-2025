#include <esp_now.h>
#include <WiFi.h>

// REPLACE WITH THE MAC Address of your receiver 
uint8_t broadcastAddress[] = {0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF};

//Structure example to send data
//Must match the receiver structure
typedef struct struct_message {
    char userName[ 50 ];
    char message[ 150 ] = "";
} struct_message;

// Create a struct_message called BME280Readings to hold sensor readings
struct_message incomingMessage;

// Create a struct_message to hold incoming sensor readings
struct_message sendedMessage;

esp_now_peer_info_t peerInfo;

// Callback when data is sent
void OnDataSent(const uint8_t *mac_addr, esp_now_send_status_t status) {
  Serial.print("\r\nLast Packet Send Status:\t");
  Serial.println(status == ESP_NOW_SEND_SUCCESS ? "Delivery Success" : "Delivery Fail");
}

// Callback when data is received
void OnDataRecv(const uint8_t * mac, const uint8_t *incomingData, int len) {
  memcpy(&incomingMessage, incomingData, len);
  Serial.print("Bytes received: ");
  Serial.println(len);
  Serial.print( "UserName: " );
  Serial.print( incomingMessage.userName );
  Serial.print( " | " );
  Serial.print( "Message: " );
  Serial.println( incomingMessage.message );
  Serial.println();
}
 
void setup() {
  // Init Serial Monitor
  Serial.begin(115200);
 
  // Set device as a Wi-Fi Station
  WiFi.mode(WIFI_STA);

  // Init ESP-NOW
  if (esp_now_init() != ESP_OK) {
    Serial.println("Error initializing ESP-NOW");
    return;
  }

  // Once ESPNow is successfully Init, we will register for Send CB to
  // get the status of Trasnmitted packet
  esp_now_register_send_cb(OnDataSent);
  
  // Register peer
  memcpy(peerInfo.peer_addr, broadcastAddress, 6);
  peerInfo.channel = 0;  
  peerInfo.encrypt = false;
  
  // Add peer        
  if (esp_now_add_peer(&peerInfo) != ESP_OK){
    Serial.println("Failed to add peer");
    return;
  }
  // Register for a callback function that will be called when data is received
  esp_now_register_recv_cb(esp_now_recv_cb_t(OnDataRecv));

  strcpy( sendedMessage.userName, "Ksawery" );
  

}
 
void loop() {

  while( Serial.available() > 0 )
  {
      String serialText = Serial.readString();
      strcpy( sendedMessage.message, serialText.c_str() );

      // Send message via ESP-NOW
      esp_err_t result = esp_now_send(broadcastAddress, (uint8_t *) &sendedMessage, sizeof(sendedMessage));

      if (result == ESP_OK) {
        Serial.println("Sent with success");
      }
      else {
        Serial.println("Error sending the data");
      }
  }

  // // Fill screen with grey so we can see the effect of printing with and without 
  // // a background colour defined
  // tft.fillScreen(TFT_GREY);
  
  // // Set "cursor" at top left corner of display (0,0) and select font 2
  // // (cursor will move to next line automatically during printing with 'tft.println'
  // //  or stay on the line is there is room for the text with tft.print)
  // tft.setCursor(0, 0, 2);
  // // Set the font colour to be white with a black background, set text size multiplier to 1
  // tft.setTextColor(TFT_WHITE,TFT_BLACK);  tft.setTextSize(1);
  // // We can now plot text on screen using the "print" class
  // tft.println("Hello World!");
  
  // // Set the font colour to be yellow with no background, set to font 7
  // tft.setTextColor(TFT_YELLOW); tft.setTextFont(7);
  // tft.println(1234.56);
  
  // // Set the font colour to be red with black background, set to font 4
  // tft.setTextColor(TFT_RED,TFT_BLACK);    tft.setTextFont(4);
  // //tft.println(3735928559L, HEX); // Should print DEADBEEF

  // // Set the font colour to be green with black background, set to font 4
  // tft.setTextColor(TFT_GREEN,TFT_BLACK);
  // tft.setTextFont(4);
  // tft.println("Groop");
  // tft.println("I implore thee,");

  // // Change to font 2
  // tft.setTextFont(2);
  // tft.println("my foonting turlingdromes.");
  // tft.println("And hooptiously drangle me");
  // tft.println("with crinkly bindlewurdles,");
  // // This next line is deliberately made too long for the display width to test
  // // automatic text wrapping onto the next line
  // tft.println("Or I will rend thee in the gobberwarts with my blurglecruncheon, see if I don't!");
  
  // // Test some print formatting functions
  // float fnumber = 123.45;
  //  // Set the font colour to be blue with no background, set to font 4
  // tft.setTextColor(TFT_BLUE);    tft.setTextFont(4);
  // tft.print("Float = "); tft.println(fnumber);           // Print floating point number
  // tft.print("Binary = "); tft.println((int)fnumber, BIN); // Print as integer value in binary
  // tft.print("Hexadecimal = "); tft.println((int)fnumber, HEX); // Print as integer number in Hexadecimal
  
  
  
}