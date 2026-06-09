#include <iostream>
#include <string>
#include <utility>
#include <list>
#include <vector>
#include <algorithm>
using namespace std;

void printListWithPairsCharAndInt( list< pair< char, int > > lista )
{
    for( auto i : lista )
    {
        cout << "[" << i.first << "] = " << i.second << "\n";
    }
}

void printListWithPairsStringAndInt( list< pair< string, int > > lista )
{
    for( auto i : lista )
    {
        cout << "[" << i.first << "] = " << i.second << "\n";
    }
}

int main()
{
    string text;
    getline( cin, text );

    int text_lenght = text.length();

    // znaki drukowalne ASCII = 33 -> 126
    list< pair< char, int > > ilosc_liter;

    for( char i = 32; i <= 126; i++ )
    {
        int counting = count( text.begin(), text.end(), i );

        if( counting )
        {
            ilosc_liter.push_back( make_pair( i, counting ) );
        }
    }

    // Posortowanie od najmniejszej wartości do największej
    auto compareSecond = []( const std::pair< char, int > &a, const std::pair< char, int > &b )
    {
        return a.second > b.second;
    };
    ilosc_liter.sort( compareSecond );

    // Stworzenie drzwewa
    vector< list< pair< string, int > > > drzewo;
    list< pair< string, int > > pomoc;

    int ilosc_kombinacji = 0;
    for( auto i : ilosc_liter )
    {
        string x( 1, i.first );

        pomoc.push_back( make_pair( x, i.second ) );

        ilosc_kombinacji++;
    }
    drzewo.push_back( pomoc );  // <- liście (najm -> najw)
    pomoc = {};

    // Policzenie potrzebnych bitów (gałęzie w drzewie)
    int needed_bits = 0;

    if( ilosc_kombinacji == 1 && ilosc_kombinacji == 2 )            needed_bits = 1;
    else if( ilosc_kombinacji == 3 && ilosc_kombinacji == 4 )       needed_bits = 2;
    else if( ilosc_kombinacji >= 5 && ilosc_kombinacji <= 8 )       needed_bits = 3;
    else if( ilosc_kombinacji >= 9 && ilosc_kombinacji <= 16 )      needed_bits = 4;
    else if( ilosc_kombinacji >= 17 && ilosc_kombinacji <= 32 )     needed_bits = 5;
    else if( ilosc_kombinacji >= 33 && ilosc_kombinacji <= 64 )     needed_bits = 6;
    else if( ilosc_kombinacji >= 65 && ilosc_kombinacji <= 128 )    needed_bits = 7;
    else if( ilosc_kombinacji >= 129 && ilosc_kombinacji <= 256 )   needed_bits = 8;

    int przechowywalnia = needed_bits;

    // Tworzenie gałęzi
    for( int i = 0; i <= needed_bits - 1; i++ )
    {
        while( needed_bits != 0 )
        {
            
        }
    }
}