let PI = 3.141592653589793;

if( confirm( "Czy chcesz wykonać obliczenie pola koła?" ) )
{
    let r = prompt( "Podaj promień koła" );
    r = Number( r );

    if( confirm( "Wykonać obliczenia?" ) )
    {
            document.write( "<h3>Pole koła</h3><br>")
            let wynik = PI * r * r;
            document.write( "Wynik = ", wynik.toFixed( 3 ) );
    }
    else
    {
        alert( "Anulowano obliczenia!" );
    }
}
else
{
    alert( "Spróbujmy następnym razem!" );
}