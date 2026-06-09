#include <iostream>
#include <string>
#include <vector>
#include <map>
using namespace std;

//-------------------------------------------------

string szyfr_plotkowy( string slowo, int klucz_przesuniecia );

//-------------------------------------------------

int main()
{
    string slowo1 = szyfr_plotkowy( "KRYPTOGRAFIA", 4 );
}

//-------------------------------------------------

string szyfr_plotkowy( string slowo, int klucz_przesuniecia )
{
    int x = 0;
    for( int i = 0; i < slowo.length(); i++ )
    {
        x++;
    }

    vector< vector<string> > tab;

    tab.push_back( 2 );

    


}

//-------------------------------------------------