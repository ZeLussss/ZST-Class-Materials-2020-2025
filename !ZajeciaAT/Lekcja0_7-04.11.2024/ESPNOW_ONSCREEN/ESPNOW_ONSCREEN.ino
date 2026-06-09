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
#include <esp_now.h>
#include <WiFi.h>
#include <vector>
#include <List.hpp>

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

void OnDataSent(const uint8_t *mac_addr, esp_now_send_status_t status) {
  Serial.print("\r\nLast Packet Send Status:\t");
  Serial.println(status == ESP_NOW_SEND_SUCCESS ? "Delivery Success" : "Delivery Fail");
}

#define TFT_GREY 0x5AEB // New colour

TFT_eSPI tft = TFT_eSPI();  // Invoke library

// number of items in an array
#define NUMITEMS(arg) ((unsigned int) (sizeof (arg) / sizeof (arg [0])))

template< typename T, size_t N > size_t ArraySize (T (&) [N]){ return N; }

List< String > lastMessages;

// Callback when data is received
void OnDataRecv(const uint8_t * mac, const uint8_t *incomingData, int len) {
  memcpy(&incomingMessage, incomingData, len);
  
  String bannedUsers[] = { "Kacper Wrona", 
                           "Jakub Zurek",
                           "Sienkowski" };

  bool x = true;
  for( int i = 0; i < NUMITEMS( bannedUsers ); i++ )
  {
      if( incomingMessage.userName == bannedUsers[ i ] )
      {
          x = false;
      }
  }

  if( x == true )
  {
      int x = lastMessages.getSize();

      if( x == 8 )
      {
          lastMessages.remove( 0 );
          lastMessages.remove( 1 );

          lastMessages.add( "Username: " + String( incomingMessage.userName ) );
          lastMessages.add( "Message: " + String( incomingMessage.message ) );
      }
      else
      {
          lastMessages.add( "Username: " + String( incomingMessage.userName ) );
          lastMessages.add( "Message: " + String( incomingMessage.message ) );
      }

      tft.fillScreen(TFT_GREY);
      tft.setCursor(0, 0, 10);
      Serial.print("Bytes received: ");
      Serial.println(len);
      Serial.print( "Username: " + String( incomingMessage.userName ) );
      Serial.print( " | " );
      Serial.print( "Message: " + String( incomingMessage.message ) );
      Serial.println();

      for( int i = 0; i < lastMessages.getSize(); i += 2 )
      {
          tft.setTextFont(2);
          tft.setTextColor(TFT_WHITE,TFT_BLACK);
          tft.println( lastMessages[ i ] );
          tft.println( lastMessages[ i + 1 ] );
      }
  }
}



void setup(void) {
  tft.init();
  tft.setRotation(2);

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
}



