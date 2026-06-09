#include <iostream>
#include <vector>
using namespace std;

void createText()
{
    vector< char > tab_pomoc( 27, char( 32 ) );
    vector< vector< char > > text( 6, tab_pomoc );

    // 0
    text[ 0 ][ 0 ] = char( 220 );
    text[ 1 ][ 0 ] = char( 219 );
    text[ 2 ][ 0 ] = char( 219 );
    text[ 3 ][ 0 ] = char( 219 );
    text[ 4 ][ 0 ] = char( 219 );
    text[ 5 ][ 0 ] = char( 219 );

    // 1
    text[ 0 ][ 1 ] = char( 220 );
    text[ 3 ][ 1 ] = char( 220 );

    // 2
    text[ 1 ][ 2 ] = char( 219 );
    text[ 2 ][ 2 ] = char( 219 );
    text[ 3 ][ 2 ] = char( 223 );

    // 4
    text[ 1 ][ 4 ] = char( 220 );
    text[ 3 ][ 4 ] = char( 219 );
    text[ 4 ][ 4 ] = char( 219 );
    text[ 5 ][ 4 ] = char( 219 );

    // 6
    text[ 0 ][ 6 ] = char( 220 );

    // 7
    text[ 0 ][ 7 ] = char( 220 );
    text[ 1 ][ 7 ] = char( 219 );
    text[ 2 ][ 7 ] = char( 219 );
    text[ 3 ][ 7 ] = char( 219 );
    text[ 4 ][ 7 ] = char( 219 );
    text[ 5 ][ 7 ] = char( 219 );

    // 8    
    text[ 0 ][ 8 ] = char( 220 );

    // 10
    text[ 1 ][ 10 ] = char( 219 );
    text[ 2 ][ 10 ] = char( 219 );
    text[ 3 ][ 10 ] = char( 219 );
    text[ 4 ][ 10 ] = char( 219 );
    text[ 5 ][ 10 ] = char( 219 );

    // 11
    text[ 0 ][ 11 ] = char( 220 );
    text[ 3 ][ 11 ] = char( 223 );

    // 12
    text[ 1 ][ 12 ] = char( 219 );
    text[ 2 ][ 12 ] = char( 219 );
    text[ 3 ][ 12 ] = char( 219 );
    text[ 4 ][ 12 ] = char( 219 );
    text[ 5 ][ 12 ] = char( 219 );

    // 14
    text[ 5 ][ 14 ] = char( 220 );

    // 16
    text[ 0 ][ 16 ] = char( 220 );
    text[ 3 ][ 16 ] = char( 219 );
    text[ 4 ][ 16 ] = char( 219 );
    text[ 5 ][ 16 ] = char( 219 );

    // 17
    text[ 0 ][ 17 ] = char( 220 );
    text[ 2 ][ 17 ] = char( 219 );
    text[ 5 ][ 17 ] = char( 220 );

    // 18
    text[ 0 ][ 18 ] = char( 220 );
    text[ 1 ][ 18 ] = char( 219 );
    text[ 5 ][ 18 ] = char( 220 );

    // 20
    text[ 0 ][ 20 ] = char( 220 );
    text[ 1 ][ 20 ] = char( 219 );
    text[ 2 ][ 20 ] = char( 219 );
    text[ 5 ][ 20 ] = char( 220 );

    // 21
    text[ 0 ][ 21 ] = char( 220 );
    text[ 2 ][ 21 ] = char( 220 );
    text[ 5 ][ 21 ] = char( 220 );

    // 22
    text[ 0 ][ 22 ] = char( 220 );
    text[ 2 ][ 22 ] = char( 220 );
    text[ 3 ][ 22 ] = char( 219 );
    text[ 4 ][ 22 ] = char( 219 );
    text[ 5 ][ 22 ] = char( 219 );

    // 24
    text[ 0 ][ 24 ] = char( 220 );

    // 25
    text[ 0 ][ 25 ] = char( 220 );
    text[ 1 ][ 25 ] = char( 219 );
    text[ 2 ][ 25 ] = char( 219 );
    text[ 3 ][ 25 ] = char( 219 );
    text[ 4 ][ 25 ] = char( 219 );
    text[ 5 ][ 25 ] = char( 219 );

    // 26   
    text[ 0 ][ 26 ] = char( 220 );

    for( auto i : text )
    {
        for( auto j : i )
        {
            cout << j;
        }
        cout << "\n";
    }
}

int main()
{
    createText();
}