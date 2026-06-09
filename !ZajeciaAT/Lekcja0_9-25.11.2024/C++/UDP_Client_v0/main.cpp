#include <iostream>
#include <winsock2.h>

#pragma comment(lib, "ws2_32.lib") // Linkowanie z biblioteką WinSock2

int main() {
    WSADATA wsaData;
    SOCKET sock;
    sockaddr_in server;

    // Inicjalizacja WinSock
    if (WSAStartup(MAKEWORD(2, 2), &wsaData) != 0) {
        std::cerr << "WSAStartup failed" << std::endl;
        return 1;
    }

    // Tworzenie gniazda
    sock = socket(AF_INET, SOCK_DGRAM, IPPROTO_UDP);
    if (sock == INVALID_SOCKET) {
        std::cerr << "Socket creation failed" << std::endl;
        WSACleanup();
        return 1;
    }

    // Ustawienie adresu serwera
    server.sin_family = AF_INET;
    server.sin_port = htons(12345); // Port UDP
    server.sin_addr.s_addr = inet_addr("127.0.0.1"); // Adres serwera

    // Wysłanie wiadomości do serwera
    const char *message = "Hello, Server!";
    if (sendto(sock, message, strlen(message), 0, (struct sockaddr *)&server, sizeof(server)) == SOCKET_ERROR) {
        std::cerr << "Send failed" << std::endl;
        closesocket(sock);
        WSACleanup();
        return 1;
    }

    std::cout << "Message sent to server." << std::endl;

    // Zamknięcie gniazda i oczyszczenie
    closesocket(sock);
    WSACleanup();

    return 0;
}
