function oblicz( form )
{
    const place = document.getElementById( "wynik" );

    let cena;

    if( form.rodzaj.value == 1 )
    {
        cena = 6.44;     // benzyna
    }
    else if( form.rodzaj.value == 2 )
    {
        cena = 7.18;   // olej napędowy
    }
    else
    {
        cena = 0;     // w każdym innym przypadku
    }

    let wynik = "Koszt paliwa: " + ( form.ile.value * cena ) + " zł";

    place.innerHTML = wynik;
}