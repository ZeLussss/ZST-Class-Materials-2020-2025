let counted = 0;



if( confirm( "Czy chcesz wykonać obliczanie średniej liczb?" ) )
{
    let suma = 0;
    let licznik = 0;

    do
    {
        licznik++;

        let a;
        a = Number( prompt( "Podaj liczbę" ) );

        suma += a;
    }
    while( confirm( "Czy nadal chcesz kontynuować?" ) )
    
    let wynik = suma / licznik;
    wynik = wynik.toFixed( 3 );
    document.write( "suma = ", suma, ", licznik = ", licznik, " || wynik = ", wynik )
}
else
{
    alert( "Spróbujmy następnym razem!" );
}