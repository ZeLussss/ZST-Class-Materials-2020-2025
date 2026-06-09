cmake_minimum_required(VERSION 3.10)

# Nazwa projektu
project(UDP_Client)

# Ustawienie standardu C++
set(CMAKE_CXX_STANDARD 11)

# Dodanie pliku źródłowego, uwzględniając folder "Source Files"
add_executable(UDP_Client "E:/Pliki/Szkoła/!ZajęciaAT/Lekcja0_9-25.11.2024/C++/UDP_Client/main.cpp")

# Linkowanie z biblioteką ws2_32 na systemie Windows
if(WIN32)
    target_link_libraries(UDP_Client ws2_32)
endif()
