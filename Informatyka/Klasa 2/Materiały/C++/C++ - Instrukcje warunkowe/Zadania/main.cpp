#include <iostream>
#include <cmath>

using namespace std;

int wybor , a , b , c , d , g , R , G , B , h , i , h2;
double e , f , e2 , f2;
double wartosc_a , wartosc_b , wartosc_c , DELTA , x1 , x2 , x0;
double wynik_zad3;

int main()
{
    cout << "-----------------------------------------" << endl;
    cout << "--               ZADANIA               --" << endl;
    cout << "-                  C++                  -" << endl;
    cout << "-             Ksawery Zelek             -" << endl;
    cout << "-                  2 TI                 -" << endl;
    cout << "--              26.11.2021             --" << endl;
    cout << "-----------------------------------------" << endl;
    cout << endl;
    cout << endl;
    cout << "-----------------------------------------" << endl;
    cout << "--                                     --" << endl;
    cout << "-            WYBIERZ ZADANIE            -" << endl;
    cout << "-                                       -" << endl;
    cout << "-            [1] - Zadanie 1            -" << endl;
    cout << "-            [2] - Zadanie 2            -" << endl;
    cout << "-            [3] - Zadanie 3            -" << endl;
    cout << "-            [4] - Zadanie 4            -" << endl;
    cout << "-            [5] - Zadanie 5            -" << endl;
    cout << "-            [6] - Zadanie 6            -" << endl;
    cout << "-            [7] - Zadanie 7            -" << endl;
    cout << "--                                     --" << endl;
    cout << "-----------------------------------------" << endl;
    cout << endl;
    cout << "--" << endl;
    cout << "- WYBOR ~ ";
    cin >> wybor;
    cout << "--" << endl;
    cout << endl;
    if ((wybor <= 0) || (wybor > 7))
    {
        cout << endl;
        cout << "-----------------------------------------" << endl;
        cout << "--                                     --" << endl;
        cout << "-        WYBIERZ LICZBY OD 1 - 7        -" << endl;
        cout << "--                                     --" << endl;
        cout << "-----------------------------------------" << endl;
        cout << endl;
        cout << "--" << endl;
        cout << "- WYBOR ~ ";
        cin >> wybor;
        cout << "--" << endl;

    }
    cout << endl;
    switch (wybor)
    {
        case 1:
            cout << "-----------------------------------------" << endl;
            cout << "--                                     --" << endl;
            cout << "-               ZADANIE 1               -" << endl;
            cout << "--                                     --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            cout << "Podaj liczbe ~ ";
            cin >> a;
            cout << endl;
            cout << "-----------------------------------------" << endl;
            cout << "--              ODPOWIEDZ              --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            if ((a % 3 == 0) && (a % 5 == 0))
            {
                cout << "Liczba podzielna JEDNOCZESNIE przez 3 i 5" << endl;
            }
            else if ((a % 3 == 0))
            {
                cout << "Liczba podzielna TYLKO przez 3" << endl;
            }
            else if ((a % 5 == 0))
            {
                cout << "Liczba podzielna TYLKO przez 5" << endl;
            }
            else
            {
                cout << "Liczba niepodzielna ani przez 3 ani przez 5" << endl;
            }
            return(0);
            break;
        case 2:
            cout << "-----------------------------------------" << endl;
            cout << "--                                     --" << endl;
            cout << "-               ZADANIE 2               -" << endl;
            cout << "--                                     --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            cout << "Podaj pierwsza liczbe ~ ";
            cin >> b;
            cout << "Podaj druga liczbe ~ ";
            cin >> c;
            cout << "Podaj trzecia liczbe ~ ";
            cin >> d;
            cout << endl;
            cout << "-----------------------------------------" << endl;
            cout << "--              ODPOWIEDZ              --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            if ((b < c) && (b < d) && (c < d))
            {
                cout << "POPRAWNA KOLEJNOSC -> " << b << " " << c << " " << d << endl;
            }
            else if ((b < c) && (b < d) && (d < c))
            {
                cout << "POPRAWNA KOLEJNOSC -> " << b << " " << d << " " << c << endl;
            }
            else if ((c < b) && (c < d) && (b < d))
            {
                cout << "POPRAWNA KOLEJNOSC -> " << c << " " << b << " " << d << endl;
            }
            else if ((c < b) && (c < d) && (d < b))
            {
                cout << "POPRAWNA KOLEJNOSC -> " << c << " " << d << " " << b << endl;
            }
            else if ((d < b) && (d < c) && (b < c))
            {
                cout << "POPRAWNA KOLEJNOSC -> " << d << " " << b << " " << c << endl;
            }
            else if ((d < b) && (d < c) && (c < b))
            {
                cout << "POPRAWNA KOLEJNOSC -> " << d << " " << c << " " << b << endl;
            }
            return(1);
            break;
        case 3:
            cout << "-----------------------------------------" << endl;
            cout << "--                                     --" << endl;
            cout << "-               ZADANIE 3               -" << endl;
            cout << "--                                     --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            cout << "Podaj pierwsza liczbe ~ ";
            cin >> e;
            cout << endl;
            if (e == 0)
            {
                cout << endl;
                cout << "-----------------------------------------" << endl;
                cout << "--                                     --" << endl;
                cout << "-  !!!!!  LICZBA 0 - PODAJ INNA  !!!!!  -" << endl;
                cout << "--                                     --" << endl;
                cout << "-----------------------------------------" << endl;
                cout << endl;
                cout << "--" << endl;
                cout << "- Podaj nowa liczbe ~ ";
                cin >> e;
                cout << "--" << endl;
                cout << endl;
            }
            cout << "Podaj druga liczbe ~ ";
            cin >> f;
            if (f == 0)
            {
                cout << endl;
                cout << "-----------------------------------------" << endl;
                cout << "--                                     --" << endl;
                cout << "-  !!!!!  LICZBA 0 - PODAJ INNA  !!!!!  -" << endl;
                cout << "--                                     --" << endl;
                cout << "-----------------------------------------" << endl;
                cout << endl;
                cout << "--" << endl;
                cout << "- Podaj nowa liczbe ~ ";
                cin >> f;
                cout << "--" << endl;
                cout << endl;
            }
            cout << endl;
            cout << "-----------------------------------------" << endl;
            cout << "--              ODPOWIEDZ              --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            if (e < f)
            {
                wynik_zad3 = f / e;
                cout << "WYNIK -> " << wynik_zad3 << endl;
            }
            else if (f < e)
            {
                wynik_zad3 = e / f;
                cout << "WYNIK -> " << wynik_zad3 << endl;
            }
            else if (e == f)
            {
                wynik_zad3 = e / f;
                cout << "WYNIK -> " << wynik_zad3 << endl;
            }
            break;
        case 4:
            cout << "-----------------------------------------" << endl;
            cout << "--                                     --" << endl;
            cout << "-               ZADANIE 4               -" << endl;
            cout << "--                                     --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            cout << "Podaj liczbe ~ ";
            cin >> g;
            cout << endl;
            cout << "-----------------------------------------" << endl;
            cout << "--              ODPOWIEDZ              --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            if ((g == -10) || (g == 0) || (g == 10))
            {
                cout << "KOLOR ->  ~~ CZARNY ~~" << endl;
            }
            else if (g < -10)
            {
                cout << "KOLOR ->  ~~ CZERWONY ~~" << endl;
            }
            else if ((g < 0) && (g < -10))
            {
                cout << "KOLOR ->  ~~ ZIELONY ~~" << endl;
            }
            else if ((g < 10) && (g < 0))
            {
                cout << "KOLOR ->  ~~ NIEBIESKI ~~" << endl;
            }
            else if (g > 10)
            {
                cout << "KOLOR ->  ~~ ZOLTY ~~" << endl;
            }
            break;
        case 5:
            cout << "-----------------------------------------" << endl;
            cout << "--                                     --" << endl;
            cout << "-               ZADANIE 5               -" << endl;
            cout << "--                                     --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            cout << "Podaj Wartosc R ~ ";
            cin >> R;
            cout << "Podaj Wartosc G ~ ";
            cin >> G;
            cout << "Podaj Wartosc B ~ ";
            cin >> B;
            cout << endl;
            cout << "-----------------------------------------" << endl;
            cout << "--              ODPOWIEDZ              --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            if ((R == 0) && (G == 0) && (B == 0))
            {
                cout << "KOLOR ->  ~~ CZARNY ~~" << endl;
            }
            else if ((R == 1) && (G == 1) && (B == 1))
            {
                cout << "KOLOR ->  ~~ BIALY ~~" << endl;
            }
            else if ((R == 1) && (G == 0) && (B == 0))
            {
                cout << "KOLOR ->  ~~ CZERWONY ~~" << endl;
            }
            else if ((R == 1) && (G == 1) && (B == 0))
            {
                cout << "KOLOR ->  ~~ ZOLTY ~~" << endl;
            }
            else if ((R == 1) && (G == 0) && (B == 1))
            {
                cout << "KOLOR ->  ~~ ROZOWY ~~" << endl;
            }
            else if ((R == 0) && (G == 1) && (B == 0))
            {
                cout << "KOLOR ->  ~~ ZIELONY ~~" << endl;
            }
            else if ((R == 0) && (G == 1) && (B == 1))
            {
                cout << "KOLOR ->  ~~ CYAN ~~" << endl;
            }
            break;
        case 6:
            cout << "-----------------------------------------" << endl;
            cout << "--                                     --" << endl;
            cout << "-               ZADANIE 6               -" << endl;
            cout << "--                                     --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            cout << "Podaj pierwsza wartosc ~ ";
            cin >> h;
            cout << "Podaj druga wartosc ~ ";
            cin >> i;
            cout << endl;
            cout << "-----------------------------------------" << endl;
            cout << "--              ODPOWIEDZ              --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            cout << "LICZBY PRZED ZMIANA a = " << h << " b = " << i << endl << endl;
            h2 = h;
            h = i;
            i = h2;
            cout << "LICZBY PO ZMIANIE a = " << h << " b = " << i << endl;
            break;
        case 7:
            cout << "-----------------------------------------" << endl;
            cout << "--                                     --" << endl;
            cout << "-               ZADANIE 7               -" << endl;
            cout << "--                                     --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            cout << "Podaj wartosc a ~ ";
            cin >> wartosc_a;
            cout << "Podaj wartosc b ~ ";
            cin >> wartosc_b;
            cout << "Podaj wartosc c ~ ";
            cin >> wartosc_c;
            cout << endl;
            cout << "-----------------------------------------" << endl;
            cout << "--              ODPOWIEDZ              --" << endl;
            cout << "-----------------------------------------" << endl;
            cout << endl;
            if (wartosc_a == 0)
            {
                cout << "To nie jest rownanie kwadratowe" << endl;
            }
            else
            {
                DELTA = (wartosc_b * wartosc_b) - 4 * wartosc_a * wartosc_c;
            }
            if (DELTA < 0)
            {
                cout << "Nie ma rozwiazan" << endl;
            }
            else if (DELTA == 0)
            {
                cout << "JEST TYLKO JEDNO MIEJSCE ZEROWE" << endl;
                cout << endl;
                x0 = -wartosc_b / (2 * wartosc_a);
                cout << "x0 = " << x0 << endl;
            }
            else
            {
                cout << "SA DWA MIEJSCA ZEROWE" << endl;
                cout << endl;
                x1 = (-wartosc_b - sqrt(DELTA)) / (2 * wartosc_a);
                x2 = (-wartosc_b + sqrt(DELTA)) / (2 * wartosc_a);
                cout << "x1 = " << x1 << endl;
                cout << "x2 = " << x2 << endl;
                return(2);
            }
            break;
    }

}
