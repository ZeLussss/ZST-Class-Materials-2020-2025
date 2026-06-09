#include <esp_now.h>
#include <WiFi.h>

// 3c:84:27:e6:5f:94

uint8_t broadcastAddress[] = {0x7c, 0xdf, 0xa1, 0xee, 0xdc, 0xec};

typedef struct struct_message {
    char userName[50];
    char message[150];
} struct_message;

struct_message incomingMessage;
struct_message sendMessage;

esp_now_peer_info_t peerInfo;

void OnDataSent(const uint8_t *mac_addr, esp_now_send_status_t status) {
  Serial.print("\r\nLast Packet Send Status:\t");
  Serial.println(status == ESP_NOW_SEND_SUCCESS ? "Delivery Success" : "Delivery Fail");

}
void OnDataRecv(const uint8_t * mac, const uint8_t *incomingData, int len) {
  memcpy(&incomingMessage, incomingData, len);
  //Serial.print("Bytes received: ");
  //Serial.println(len);
  Serial.print("User ID: ");
  Serial.println(incomingMessage.userName);
  Serial.print("MSG: ");
  Serial.println(incomingMessage.message);
  Serial.println();
}
 
void setup() {
  Serial.begin(115200);
 
  WiFi.mode(WIFI_STA);

  if (esp_now_init() != ESP_OK) {
    Serial.println("Error initializing ESP-NOW");
    return;
  }

  esp_now_register_send_cb(OnDataSent);

  memcpy(peerInfo.peer_addr, broadcastAddress, 6);
  peerInfo.channel = 0;  
  peerInfo.encrypt = false;
        
  if (esp_now_add_peer(&peerInfo) != ESP_OK){
    Serial.println("Failed to add peer");
    return;
  }
  esp_now_register_recv_cb(esp_now_recv_cb_t(OnDataRecv));

  strcpy(sendMessage.userName, "Nigga");
  strcpy(sendMessage.message, "HEHEHAHA");
}
 
void loop() {
  if (Serial.available() > 0) {
        String inputMessage = Serial.readStringUntil('\n');
        inputMessage.toCharArray(sendMessage.message, sizeof(sendMessage.message));
        
        esp_err_t result = esp_now_send(broadcastAddress, (uint8_t *)&sendMessage, sizeof(sendMessage));

        if (result == ESP_OK) {
            Serial.println("Sent with success");
        } else {
            Serial.println("Error sending the data");
        }
    }
    delay(100); 
}