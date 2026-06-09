//KSAWERY ZELEK 2TI

#include <iostream>

using namespace std;

int main()
{
    //ZADANIE 1

    cout << "Zad 1:" << "\n\n";

    unsigned int n;
    n = 123;

    int *Tab;
    Tab = new int[ n ];

    for(int i = 0; i < n; i++)
    {
        Tab[ i ] = 99;
    }

    for(int i = 0; i < n; i++)
    {
        cout << Tab[ i ] << " ";
    }

    cout << "\n\n\n";

    delete [] Tab;
    Tab = NULL;

    //ZADANIE 2

    cout << "Zad 2:" << "\n\n";

    n = 0;
    cout << "Podaj wartosc: ";
    cin >> n;

    Tab = new int[ n ];

    int m = n * 2;

    for(int i = 0; i < n; i++)
    {
        Tab [ i ] = m;
    }

    cout << endl;

    for(int i = 0; i < n; i++)
    {
        cout << Tab[ i ] << " ";
    }

    cout << "\n\n\n";

    delete [] Tab;
    Tab = NULL;

    //ZADANIE 3

    cout << "Zad 3:" << "\n\n";

    n = 0;
    m = 0;

    n = 2500100;

    Tab = new int[ n ];

    for(int i = 0; i < n; i++)
    {
        Tab[ i ] = i;
    }

    int e = 100;

    for(int e = 100; e < 2000000; e  *= 10)
    {
        cout << Tab[ e ] << " ";
        //e = e * 10;
    }

    cout <<  Tab[2500000] << endl;

}
