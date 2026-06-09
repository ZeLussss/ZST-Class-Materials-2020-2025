#include <iostream>

using namespace std;

    int g_A, g_B, g_suma, g_roznica, g_iloczyn;
    float g_iloraz;

void Komunikat_1()
{
    cout << "Nie bede przeszkadzal na lekcji informatyki! :)\n";
}

void Licznik_1()
{
    static int s_licznik = 1;
    static int s_liczba = 1;
    cout << s_licznik << ". " << "Liczba to: " << s_liczba << "\n";

    s_licznik++;
    s_liczba = s_liczba * 2;
}

void Suma()
{
    g_suma = g_A + g_B;
}

void Roznica()
{
    g_roznica = g_A - g_B;
}

void Iloczyn()
{
    g_iloczyn = g_A * g_B;
}

void Iloraz()
{
    g_iloraz = g_A / g_B;
}

int main()
{
    cout << "-----------------------------------\n";
    cout << "            ZADANIE 1              \n";
    cout << "-----------------------------------\n";
    cout << "\n";
    for(unsigned n = 1; n < 101; n++)
    {
        cout << n << ". "; Komunikat_1();
    }
    cout << "\n";
    cout << "-----------------------------------\n";
    cout << "            ZADANIE 2              \n";
    cout << "-----------------------------------\n";
    cout << "\n";
    for(unsigned i = 1; i < 31; i++)
    {
        Licznik_1();
    }
    cout << "\n";
    cout << "-----------------------------------\n";
    cout << "            ZADANIE 3              \n";
    cout << "-----------------------------------\n";
    cout << "\n";
    cout << "Podaj pierwsza liczbe: ";
    cin  >> g_A;
    cout << "\n";
    cout << "Podaj druga Liczbe: ";
    cin  >> g_B;
    cout << "\n";
    Suma();
    cout << "Suma -> " << g_suma << "\n";
    Roznica();
    cout << "Roznica -> " << g_roznica << "\n";
    Iloczyn();
    cout << "Iloczyn -> " << g_iloczyn << "\n";
    Iloraz();
    cout << "Iloraz -> " << g_iloraz << "\n";
}
