#include <iostream>
#include <cmath>
#include <cstdlib>

using namespace std;

int wybor , wybor1 , wybor2;
double pierwiastek , wynik_1;
double liczba_zad2 , potega , wynik_2;
int liczba_zad3 , wynik_3;
double liczba_zad4 , wynik_4;
double liczba_zad5 , wynik_5;
double liczba_zad6 , wynik_6;

int main()
{
    cout << "---------------------------------------" << endl;
    cout << "--             29.11.2021            --" << endl;
    cout << "--           Ksawery Zelek           --" << endl;
    cout << "--                2 TI               --" << endl;
    cout << "--          Funkcje wbudowane        --" << endl;
    cout << "--            i komentarze           --" << endl;
    cout << "---------------------------------------" << endl;
    cout << endl;
    cout << endl;
    cout << "---------------------------------------" << endl;
    cout << "--          WYBIERZ ZADANIE          --" << endl;
    cout << "---------------------------------------" << endl;
    cout << endl;
    cout << "---------------------------------------" << endl;
    cout << "--                                   --" << endl;
    cout << "-     [1] - pierwiastek               -" << endl;
    cout << "-     [2] - potegi                    -" << endl;
    cout << "-     [3] - wartosc bezwzgl. z        -" << endl;
    cout << "-           liczby calkowitej         -" << endl;
    cout << "-     [4] - wartosc bezwzgl. z        -" << endl;
    cout << "-           licz. zm. przecinkowej    -" << endl;
    cout << "-     [5] - zaokralglenie             -" << endl;
    cout << "-     [6] - funkcje trygonometryczne  -" << endl;
    cout << "--                                   --" << endl;
    cout << "---------------------------------------" << endl;
    cout << endl;
    cout << "--" << endl;
    cout << "- Wybierz zadanie ~ ";
    cin >> wybor;
    cout << "--" << endl;
    cout << endl;
    switch (wybor)
    {
        case 1:
            cout << "---------------------------------------" << endl;
            cout << "--          PIERWIASTKOWANIE         --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            cout << "Podaj liczbe ~ ";
            cin >> pierwiastek;
            cout << endl;
            cout << endl;
            cout << "---------------------------------------" << endl;
            cout << "--             ODPOWIEDZ             --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            wynik_1 = sqrt(pierwiastek);
            cout << "WYNIK -> " << wynik_1 << endl;
            system("PAUSE");
            break;
        case 2:
            cout << "---------------------------------------" << endl;
            cout << "--            POTEGOWANIE            --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            cout << "Podaj Liczbe ~ ";
            cin >> liczba_zad2;
            cout << "Podaj potege ~ ";
            cin >> potega;
            cout << endl;
            cout << endl;
            cout << "---------------------------------------" << endl;
            cout << "--             ODPOWIEDZ             --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            wynik_2 = pow(liczba_zad2 , potega);
            cout << "WYNIK -> " << wynik_2 << endl;
            system("PAUSE");
            break;
        case 3:
            cout << "---------------------------------------" << endl;
            cout << "--   WARTOSC BEZWZGLEDNA - L. CAL.   --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            cout << "Podaj liczbe ~ ";
            cin >> liczba_zad3;
            cout << endl;
            cout << endl;
            cout << "---------------------------------------" << endl;
            cout << "--             ODPOWIEDZ             --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            wynik_3 = abs(liczba_zad3);
            cout << "WYNIK -> " << wynik_3 << endl;
            system("PAUSE");
            break;
        case 4:
            cout << "---------------------------------------" << endl;
            cout << "--    WARTOSC BEZWZGLEDNA Z LICZBY   --" << endl;
            cout << "--        ZMIENNOPRZECINKOWEJ        --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            cout << "Podaj liczbe ~ ";
            cin >> liczba_zad4;
            cout << endl;
            cout << endl;
            cout << "---------------------------------------" << endl;
            cout << "--             ODPOWIEDZ             --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            wynik_4 = fabs(liczba_zad4);
            cout << "WYNIK -> " << wynik_4 << endl;
            system("PAUSE");
            break;
        case 5:
            cout << "---------------------------------------" << endl;
            cout << "--            ZAOKRAGLENIE           --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            cout << endl;
            cout << "---------------------------------------" << endl;
            cout << "--            WYBIERZ TYP            --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            cout << "---------------------------------------" << endl;
            cout << "--                                   --" << endl;
            cout << "-         [1] - w gore                -" << endl;
            cout << "-         [2] - w dol                 -" << endl;
            cout << "-         [3] - zwyczajne             -" << endl;
            cout << "--                                   --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            cout << "--" << endl;
            cout << "- WYBOR ~ ";
            cin >> wybor1;
            cout << "--" << endl;
            cout << endl;
            switch (wybor1)
            {
                case 1:
                    cout << "---------------------------------------" << endl;
                    cout << "--               W GORE              --" << endl;
                    cout << "---------------------------------------" << endl;
                    cout << endl;
                    cout << "Podaj liczbe ~ ";
                    cin >> liczba_zad5;
                    cout << endl;
                    cout << endl;
                    cout << "---------------------------------------" << endl;
                    cout << "--             ODPOWIEDZ             --" << endl;
                    cout << "---------------------------------------" << endl;
                    cout << endl;
                    wynik_5 = ceil(liczba_zad5);
                    cout << "WYNIK -> " << wynik_5 << endl;
                    system("PAUSE");
                    break;
                case 2:
                    cout << "---------------------------------------" << endl;
                    cout << "--               W DOL               --" << endl;
                    cout << "---------------------------------------" << endl;
                    cout << endl;
                    cout << "Podaj liczbe ~ ";
                    cin >> liczba_zad5;
                    cout << endl;
                    cout << endl;
                    cout << "---------------------------------------" << endl;
                    cout << "--             ODPOWIEDZ             --" << endl;
                    cout << "---------------------------------------" << endl;
                    cout << endl;
                    wynik_5 = floor(liczba_zad5);
                    cout << "WYNIK -> " << wynik_5 << endl;
                    system("PAUSE");
                    break;
                case 3:
                    cout << "---------------------------------------" << endl;
                    cout << "--             ZWYCZAJNIE            --" << endl;
                    cout << "---------------------------------------" << endl;
                    cout << endl;
                    cout << "Podaj liczbe ~ ";
                    cin >> liczba_zad5;
                    cout << endl;
                    cout << endl;
                    cout << "---------------------------------------" << endl;
                    cout << "--             ODPOWIEDZ             --" << endl;
                    cout << "---------------------------------------" << endl;
                    cout << endl;
                    wynik_5 = round(liczba_zad5);
                    cout << "WYNIK -> " << wynik_5 << endl;
                    system("PAUSE");
                    break;
            }
            break;
        case 6:
            cout << "---------------------------------------" << endl;
            cout << "--       FUNKCJE TRYGONOMETRYCZNE    --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            cout << endl;
            cout << "---------------------------------------" << endl;
            cout << "--            WYBIERZ TYP            --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            cout << "---------------------------------------" << endl;
            cout << "--                                   --" << endl;
            cout << "-         [1] - sinus                 -" << endl;
            cout << "-         [2] - cosinus               -" << endl;
            cout << "-         [3] - tangens               -" << endl;
            cout << "--                                   --" << endl;
            cout << "---------------------------------------" << endl;
            cout << endl;
            cout << "--" << endl;
            cout << "- WYBOR ~ ";
            cin >> wybor2;
            cout << "--" << endl;
            switch (wybor2)
            {
                case 1:
                    cout << "---------------------------------------" << endl;
                    cout << "--               SINUS               --" << endl;
                    cout << "---------------------------------------" << endl;
                    cout << endl;
                    cout << "Podaj kat ~ ";
                    cin >> liczba_zad6;
                    cout << endl;
                    cout << endl;
                    cout << "---------------------------------------" << endl;
                    cout << "--             ODPOWIEDZ             --" << endl;
                    cout << "---------------------------------------" << endl;
                    cout << endl;
                    wynik_6 = sin(liczba_zad6);
                    cout << "WYNIK -> " << wynik_6 << endl;
                    system("PAUSE");
                    break;
                case 2:
                    cout << "---------------------------------------" << endl;
                    cout << "--               COSINUS             --" << endl;
                    cout << "---------------------------------------" << endl;
                    cout << endl;
                    cout << "Podaj kat ~ ";
                    cin >> liczba_zad6;
                    cout << endl;
                    cout << endl;
                    cout << "---------------------------------------" << endl;
                    cout << "--             ODPOWIEDZ             --" << endl;
                    cout << "---------------------------------------" << endl;
                    cout << endl;
                    wynik_6 = cos(liczba_zad6);
                    cout << "WYNIK -> " << wynik_6 << endl;
                    system("PAUSE");
                    break;
                case 3:
                    cout << "---------------------------------------" << endl;
                    cout << "--               TANGENS             --" << endl;
                    cout << "---------------------------------------" << endl;
                    cout << endl;
                    cout << "Podaj kat ~ ";
                    cin >> liczba_zad6;
                    cout << endl;
                    cout << endl;
                    cout << "---------------------------------------" << endl;
                    cout << "--             ODPOWIEDZ             --" << endl;
                    cout << "---------------------------------------" << endl;
                    cout << endl;
                    wynik_6 = tan(liczba_zad6);
                    cout << "WYNIK -> " << wynik_6 << endl;
                    system("PAUSE");
                    break;
            }
            system("PAUSE");
            break;
    }
}
