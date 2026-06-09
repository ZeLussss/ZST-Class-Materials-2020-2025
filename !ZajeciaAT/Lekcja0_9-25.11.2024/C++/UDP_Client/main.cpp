#include <iostream>
#include <winsock2.h>
#include <thread>
#include <cstring>

#pragma comment(lib, "ws2_32.lib")  // Ładowanie biblioteki Winsock

#define PORT 12345
#define SERVER_IP "127.0.0.1"  // IP serwera (localhost)

void send_message(SOCKET sock, sockaddr_in server_addr) {
    const char *message = "Hello from UDP Client!";

    while (true) {
        // Wysyłanie wiadomości
        if (sendto(sock, message, strlen(message), 0, (struct sockaddr*)&server_addr, sizeof(server_addr)) < 0) {
            std::cerr << "Błąd przy wysyłaniu wiadomości!" << std::endl;
            return;
        }

        std::cout << "Wiadomość wysłana: " << message << std::endl;

        // Czekanie 1 sekundę przed wysłaniem kolejnej wiadomości
        std::this_thread::sleep_for(std::chrono::seconds(1));
    }
}

void receive_message(SOCKET sock) {
    char buffer[1024];
    sockaddr_in from_addr;
    int from_len = sizeof(from_addr);

    while (true) {
        // Odbieranie wiadomości
        int recv_len = recvfrom(sock, buffer, sizeof(buffer) - 1, 0, (struct sockaddr*)&from_addr, &from_len);
        if (recv_len < 0) {
            std::cerr << "Błąd przy odbieraniu wiadomości!" << std::endl;
            return;
        }

        buffer[recv_len] = '\0';  // Null-terminate the received message
        std::cout << "Otrzymano wiadomość: " << buffer << std::endl;
    }
}

int main() {
    WSADATA wsaData;
    SOCKET sock;
    sockaddr_in server_addr;

    // Inicjalizacja Winsock
    if (WSAStartup(MAKEWORD(2, 2), &wsaData) != 0) {
        std::cerr << "WSAStartup failed!" << std::endl;
        return 1;
    }

    // Tworzenie gniazda UDP
    sock = socket(AF_INET, SOCK_DGRAM, IPPROTO_UDP);
    if (sock == INVALID_SOCKET) {
        std::cerr << "Błąd przy tworzeniu gniazda!" << std::endl;
        WSACleanup();
        return 1;
    }

    // Ustawienie adresu serwera
    memset(&server_addr, 0, sizeof(server_addr));
    server_addr.sin_family = AF_INET;
    server_addr.sin_port = htons(PORT);
    server_addr.sin_addr.s_addr = inet_addr(SERVER_IP); // IP serwera (localhost)

    // Uruchomienie wątków
    std::thread sender(send_message, sock, server_addr);
    std::thread receiver(receive_message, sock);

    // Poczekaj na zakończenie wątków
    sender.join();
    receiver.join();

    // Zamknięcie gniazda
    closesocket(sock);
    WSACleanup();

    return 0;
}
