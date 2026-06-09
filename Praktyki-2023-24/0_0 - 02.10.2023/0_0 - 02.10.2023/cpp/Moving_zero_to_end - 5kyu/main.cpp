#include <iostream>
#include <vector>
using namespace std;

std::vector<int> move_zeroes(const std::vector<int>& input) 
{
    vector<int> copy_vec = { };
    int amount_of_zero = 0;
    
    for( int i = 0; i < input.size(); ++i )
    {
        if( input[ i ] == 0 )
        {
            amount_of_zero++;
        }
        else
        {
            copy_vec.push_back( input[ i ] );
        }
    }
    
    for( int i = 0; i < amount_of_zero; ++i )
    {
        copy_vec.push_back( 0 );
    }
    
    return copy_vec;
}