#include <iostream>

using namespace std;

int main()
{
    const int R_1 = 12;

    int Tab_zad1[ R_1 ];
    int a_zad1 =  -12;

    for(int i = 0; i < R_1; i++)
    {
        Tab_zad1[ i ] = a_zad1;
        a_zad1++;
    }
        cout << "Tablica 1:" << "\n";
        for(int i = 0; i < R_1; i++)
        {
            cout << Tab_zad1[ i ] << " ";
        }
        cout << "\n" << "\n";

    const int R_2 = 16;

    int Tab_zad2[ R_2 ];
    int a_zad2 = 10;

    for(int e = 0; e < R_2; e++)
    {
        Tab_zad2[ e ] = a_zad2;
        a_zad2 = a_zad2 + 3;
    }
        cout << "Tablica 2:" << "\n";
        for(int e = 0; e < R_2; e++)
        {
            cout << Tab_zad2[ e ] << " ";
        }
        cout << "\n" << "\n";

    const int R_3 = 14;

    int Tab_zad3[ R_3 ] = {};
    int a_zad3 = 4;
    int b_zad3 = 0;

    for(int q = 0; q < R_3; q++)
    {
        Tab_zad3[ b_zad3 ] = a_zad3;
        a_zad3 += 2;
        b_zad3 += 2;
    }
        cout << "Tablica 3:" << "\n";
        for(int q = 0; q < R_3; q++)
        {
            cout << Tab_zad3[ q ] << " ";
        }
        cout << "\n" << "\n";

    const int R_4 = 12;

    int Tab_zad4[ R_4 ];
    int a_zad4 = -2;
    int b_zad4 = 1;

    for(int w = 0; w < R_4; w++)
    {
        Tab_zad4[ w ] = a_zad4;
        a_zad4 = a_zad4 - b_zad4;
        b_zad4 = b_zad4 + 1;
    }
        cout << "Tablica 4:" << "\n";
        for(int w = 0; w < R_4; w++)
        {
            cout << Tab_zad4[ w ] << " ";
        }
        cout << "\n" << "\n";




}
