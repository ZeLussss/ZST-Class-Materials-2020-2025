function getAndUpdate_km( form )
{
    const where = document.getElementById( "wynik" );
    let wynik;

    // Pobranie ilości kilometrów
    let km = Number( form.ilosc.value );

    if( isNaN( km ) )
    {
        wynik = "Podana wartość nie jest liczbą";

        where.innerHTML = wynik;
    }
    else
    {
        if( form.potw.checked )
        {
            getAndUpdate_tarnow( form );
        }
        else
        {
            if( km >= 5 )
            {
                wynik = "Dowóz będzie Cię kosztował " + "10" + " zł";

                where.innerHTML = wynik;
            }
            else if( km < 5)
            {
                wynik = "Dowóz będzie Cię kosztował " + km + " zł";

                where.innerHTML = wynik;
            }
        }
    }
    
}

function getAndUpdate_tarnow( form )
{
    const where = document.getElementById( "wynik" );
    let wynik;

    // Pobranie wartosci z pola potw 
    if( form.potw.checked )
    {
        wynik = "Dowieziemy Twoją pizze za darmo";

        where.innerHTML = wynik;
    }
    else
    {
        getAndUpdate_km( form );
    }
}


