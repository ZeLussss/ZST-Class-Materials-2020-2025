#include <iostream>
#include <vector>
#include <cstdlib>
using namespace std;

void zadanie1()
{
    int n;
    cout << "Podaj liczbe n: ";
    cin >> n;

    // 1 wartiant
    vector< int > tab1;

    for (int i = 0; i < n; i++)
    {
        tab1.push_back( rand() % 101 );
    }

    // 2 wariant
    vector< int > tab2;

    int i = 0;
    while (i < n)
    {
        tab2.push_back(rand() % 101);
        i++;
    }

    // 3 wariant
    vector< int > tab3;

    i = 0;
    do
    {
        tab3.push_back(rand() % 101);
        i++;
    } while (i < n);

    int sum1 = 0;
    for (int i : tab1 )
    {
        sum1 += i;
    }
    float srednia1 = static_cast<float>(sum1) / static_cast<float>(n); cout << "\n";

    int sum2 = 0;
    for (int i : tab2)
    {
        sum2 += i;
    }
    float srednia2 = static_cast<float>( sum2 ) / static_cast<float>( n );

    int sum3 = 0;
    for (int i : tab3)
    {
        sum3 += i;
    }
    float srednia3 = static_cast<float>( sum3 ) / static_cast<float>( n );

    cout << "Srednia1: " << srednia1 << "\n";
    cout << "Srednia2: " << srednia2 << "\n";
    cout << "Srednia3: " << srednia3 << "\n";
}

void zadanie2()
{
    float liczba, wynik;
    int wykladnik;
    cout << "podaj liczbe potegowana: ";
    cin >> liczba;
    wynik = 1;

    cout << "podaj wykladnik potegi: ";
    cin >> wykladnik;

    if (wykladnik < 0)
    {
        for (int i = 0; i < -wykladnik; i++) 
        {
            wynik /= liczba;
        }
    }
    else if (wykladnik == 0)
    {
        wynik = 1;
    }
    else
    {
        for (int i = 0; i < wykladnik; i++) {
            wynik *= liczba;
        }
    }

    cout << "Wynik potegowania liczby " << liczba << " z wykladnikiem potegowania " << wykladnik << " = " << wynik << "\n";
}

void zadanie3()
{
    float wynik;
    int suma = 0;
    int x = 0;

    bool czyDalej = true;
    while (czyDalej)
    {
        int m;
        cout << "Podaj liczbe: ";
        cin >> m;

        suma += m;
        x++;

        int liczba;
        cout << "Czy dalej chcesz wczytywac liczby: [1-tak, 0-nie]: ";
        cin >> liczba;

        
        while (liczba < 0 || liczba > 1)
        {
            cout << "|Podano liczbe spoza zakresu| Podaj liczbe 1 albo 0: ";
            cin >> liczba;
        }
        

        czyDalej = static_cast<bool>(liczba);
    }

    wynik = static_cast<float>( suma ) / static_cast<float>( x );

    cout << "Srednia: " << wynik << "\n";


}

int main()
{
    cout << "ZADANIE 1\n";
    zadanie1();

    cout << "\n\n";

    cout << "ZADANIE 2\n";
    zadanie2();

    cout << "\n\n";

    cout << "ZADANIE 3\n";
    zadanie3();
}


