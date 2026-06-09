// ZELEK KSAWERY 5TI

#include <iostream>
#include <queue>
#include <unordered_map>
#include <vector>
#include <string>
#include <iomanip>
using namespace std;

// ==================================================================================================================

// Stworzenie komparatora dla priorytetowej kolejki
struct compare
{
    bool operator()( pair< int, string > l, pair< int, string > r ) { return l.first > r.first; }
};

// ==================================================================================================================

void analizaTekstu( string text, unordered_map< char, string >& huffman, unordered_map< char, int >& iloscLiter )
{
    int klasycznyZapis  = text.length() * 8;
    int ASCII           = text.length() * 7;
    int czteryBit       = text.length() * 4;
    int huffmanIleBit   = 0;

    for( auto i : iloscLiter )
    {
        huffmanIleBit += ( iloscLiter[ i.first ] * huffman[ i.first ].length() );
    }

    float klasycznyZapisProcenty  = 100;
    float ASCII_Procenty          = ( static_cast<float>( ASCII ) / klasycznyZapis ) * 100;
    float czteryBitProcenty       = ( static_cast<float>( czteryBit ) / klasycznyZapis ) * 100;
    float huffmanBitProcenty      = ( static_cast<float>( huffmanIleBit ) / klasycznyZapis ) * 100;

    cout << "\n---------------------\n";
    cout << "Klasyczny zapis -> " << klasycznyZapis << std::fixed << std::setprecision( 1 ) << "(" << klasycznyZapisProcenty << "%)\n";
    cout << "ASCII           -> " << ASCII << std::fixed << std::setprecision( 1 ) << "(" << ASCII_Procenty << "%)\n";
    cout << "CzteryBit       -> " << czteryBit << std::fixed << std::setprecision( 1 ) << "(" << czteryBitProcenty << "%)\n";
    cout << "Huffman         -> " << huffmanIleBit << std::fixed << std::setprecision( 1 ) << "(" << huffmanBitProcenty << "%)\n";
    cout << "---------------------\n\n";
}

// ==================================================================================================================

void buildTree( string text )
{
    // Obliczanie ilości występowania liter
    unordered_map< char, int > iloscLiter;
    for( char c : text )
    {
        iloscLiter[ c ]++;
    }

    // Stworzenie priorytetowej kolejki dla gałęzi drzewa huffmana
    priority_queue< pair< int, string >, vector< pair< int, string > >, compare > pq;

    // Dodanie każdego znaku i jego ilości występowania do kolejki
    for( auto i : iloscLiter )
    {
        pq.push( { i.second, string( 1, i.first ) } );
    }

    // Stworzenie mapy przechowującej poszczególne gałęzie
    unordered_map< char, string > huffman;

    while( pq.size() > 1 )
    {
        // Dwie pary o najmniejszej częstotliwości
        auto left   = pq.top(); pq.pop();
        auto right  = pq.top(); pq.pop();

        // Aktualizacja
        for( char ch : left.second )
        {
            huffman[ ch ] = "1" + huffman[ ch ];
        }
        for( char ch : right.second )
        {
            huffman[ ch ] = "0" + huffman[ ch ];
        }

        // Łączenie dwóch par i dodanie do kolejki
        pq.push( { left.first + right.first, left.second + right.second } );
    }

    cout << "Drzewo:\n";
    for( auto& pair : huffman )
    {
        cout << pair.first << " " << pair.second << "\n";
    }

    string encodedString = "";
    for( auto& i : huffman )
    {
        encodedString += i.second;
    }

    cout << "\nZakodowany tekst: " << encodedString << "\n";

    analizaTekstu( text, huffman, iloscLiter );
}

// ==================================================================================================================

int main()
{
    string text;
    getline( cin, text );

    buildTree( text );

    return 0;
}

// ==================================================================================================================
