// Online C++ compiler to run C++ program online
#include <iostream>
#include <vector>
#include <algorithm>
#include <ctime>
using namespace std;

vector< int > listaZadCzesc1;
    
srand( time( 0 ) );
for( int i = 0; i < 100; i++ )
{
    int x = rand() % 1000;
        
    if( x > 99 && x < 1000 )
    {
        listaZadCzesc1.push_back( x );
    }
    else
    {
        while( x < 99 || x > 1000 )
        {
            x = rand() % 1000;
        }
    }
}
// for( int i : listaZadCzesc1 )
// {
//     cout << i << " | ";
// } cout << "\n";

void zad1()
{
    int minWSort = listaZadCzesc1[ 0 ];
    
    for( int i = 1; i < 100; i++ )
    {
        if( minWSort > listaZadCzesc1[ i ] )
        {
            min = listaZadCzesc1[ i ];
        }
    }
    
    cout << minWSort << "\n";
}

int main() 
{
    // ZADANIE 1
    zad1();
}