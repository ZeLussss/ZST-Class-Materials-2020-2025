const PI = 3.141592653589793;

if( confirm( "Czy chcesz wykonać obliczenie objętości kuli?" ) )
{
    const r = Number( prompt( "Podaj promień koła!" ) );

    if( r > 0  )
    {
        if( r != null && r != undefined && typeof r === "number" )
        {
            document.write( "<h3>Objętość koła!</h3><br>" );
            let wynik = ( 4 / 3 ) * PI * ( r * r * r );
            document.write( "Wynik = " + wynik.toFixed( 3 ) );
        }
    }
}
else
{
    alert( "Spróbujmy następnym razem!" );
}