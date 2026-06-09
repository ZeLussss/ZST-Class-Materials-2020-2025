let a, b;
try
{
    a = prompt( "Podaj wartosc a" );
    a = parseInt( a );
    if( a != null )
    {
        b = prompt( "Podaj wartosc b" );
        b = parseInt( b );
    
        if( b != null )
        {
            let wynik = ( a + b ) / 2;
            document.write( "Wynik: ", wynik );
        }
    }
}
catch ( { name, message })
{
    document.write( name + " " + message );
}