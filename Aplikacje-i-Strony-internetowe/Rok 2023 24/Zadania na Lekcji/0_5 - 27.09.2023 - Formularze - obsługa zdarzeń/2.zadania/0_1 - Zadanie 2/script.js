function oblicz( form )
{
    const place = document.getElementById( "wynik" );

    let rodzaj;

    if( form.rodzaj.value == 1 )
    {
        rodzaj = 4;     // beznyna
    }
    else if( form.rodzaj.value == 2 )
    {
        rodzaj = 3.5;   // olej napędowy
    }
    else
    {
        rodzaj = 0;     // w każdym innym przypadku
    }

    let wynik = "Koszt paliwa: " + ( form.ile.value * rodzaj ) + " zł";

    place.innerHTML = wynik;
}