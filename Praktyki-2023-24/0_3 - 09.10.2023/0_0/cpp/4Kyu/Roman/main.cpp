#include <string>
using namespace std;

class RomanHelper{
  public:
    std::string to_roman(unsigned int n){
      
      int count_M = 0;
      int count_D = 0;
      int count_C = 0;
      int count_L = 0;
      int count_X = 0;
      int count_V = 0;
      int count_I = 0;
      
      if( n / 1000 >= 1 )
      {
          count_M = n / 1000;
          n = n - ( count_M * 1000 );
      }
      
      if( n / 500 >= 1 )
      {
          count_D = n / 500;
          n = n - ( count_D * 500 );
      }
      
      if( n / 100 >= 1 )
      {
          count_C = n / 100;
          n = n - ( count_C * 100 );
      }
      
      if( n / 50 >= 1 )
      {
          count_L = n / 50;
          n = n - ( count_L * 50 );
      }
      
      if( n / 10 >= 1 )
      {
          count_X = n / 10;
          n = n - ( count_X * 10 );
      }
      
      if( n / 5 >= 1 )
      {
          count_V = n / 5;
          n = n - ( count_V * 5 );
      }
      
      if( n / 1 >= 1 )
      {
          count_I = n / 1;
          n = n - ( count_I );
      }
      
      // Obliczanie stringa
      string roman;
      
      if( count_M > 0 )
      {
          for( int i = 0; i < count_M; ++i )
          {
              roman += "M";
          }
      }
      
      if( count_D > 0 )
      {
          for( int i = 0; i < count_D; ++i )
          {
              roman += "D";
          }
      }
      
      if( count_C > 0 )
      {
          for( int i = 0; i < count_C; ++i )
          {
              roman += "C";
          }
      }
      
      if( count_X > 0 )
      {
          if( count_X == 9 )
          {
              roman += "XC";
          }
          else if( count_X == 4 )
          {
              roman += "XL";
          }
          else
          {
              for( int i = 0; i < count_X; ++i )
              {
                  roman += "X";
              }
          }
      }
      
      if( count_V > 0 )
      {
          if( count_I == 4 )
          {
              roman += "IX";
              return roman;
          }
          else if( count_I == 1 )
          {
              roman += "VI";
              return roman;
          }
          else if( count_I == 2 )
          {
              roman += "VII";
              return roman;
          }
          else if( count_I == 3 )
          {
              roman += "VIII";
              return roman;
          }
          else
          {
              roman += "V";
              return roman;
          }
      }
      
      if( count_I > 0 )
      {
          if( count_I == 4 )
          {
              roman += "IV";
          }
          else
          {
              for( int i = 0; i < count_I; ++i )
              {
                  roman += "I";
              }
          }
      }
      
     
      return roman;
    }
    int from_roman(std::string rn){
      return 0;
    }
} RomanNumerals;