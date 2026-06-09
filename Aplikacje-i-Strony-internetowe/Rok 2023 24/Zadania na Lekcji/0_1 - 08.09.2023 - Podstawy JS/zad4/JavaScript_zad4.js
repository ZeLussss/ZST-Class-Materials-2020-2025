let W;
let a, b, c;

alert( "Zadanie ze wzorem" );

a = prompt( "Podaj wartosc a" );
a = parseInt( a );
if( a != null )
{
    b = prompt( "Podaj wartosc b" );
    b = parseInt( b );

    if( b != null )
    {
        c = prompt( "Podaj wartosc c" );
        c = parseInt( c );

        if( c != null )
        {
            W = (( a + (( 2 * b - c ) / ( a + b ) ) ) / ( ( 2 * c - b ) / ( 2 * a + ( b / ( 2 * a ) - 4 * c ) ) )) - ( a / ( b + c ) );

            document.write( "W = ", W, '<br>' );
        }
    }
}
