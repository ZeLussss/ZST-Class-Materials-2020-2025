function oblicz( form )
{
    let where = document.getElementById( "wynik" );

    let liczba = Number( form.liczba_ogl.value );

    let cena = 0;

    if( document.getElementById( "liczba_ogl" ) == "" )
    {
        where.innerHTML = "Wpisz liczbę";
    } 
    else if( liczba > 0 && liczba < 51 )
    {
        if( form.staly.checked )
        {
            cena = liczba * 2;
            let cena_w_rabat = cena * 0.8;

            where.innerHTML = "Cena: " + cena + "zł" + "<br>" + "Cena z rabatem: " + cena_w_rabat + "zł";
        }
        else
        {
            cena = liczba * 2;

            where.innerHTML = "Cena: " + cena + "zł";
        }
    }
    else if( liczba > 50 && liczba <= 100 )
    {
        if( form.staly.checked )
        {
            cena = liczba * 1.5;
            let cena_w_rabat = cena * 0.8;

            where.innerHTML = "Cena: " + cena + "zł" + "<br>" + "Cena z rabatem: " + cena_w_rabat + "zł";
        }
        else
        {
            cena = liczba * 1.5;

            where.innerHTML = "Cena: " + cena + "zł";
        }
    }
    else if( liczba > 100 )
    {
        if( form.staly.checked )
        {
            cena = liczba * 1;
            let cena_w_rabat = cena * 0.8;

            where.innerHTML = "Cena: " + cena + "zł" + "<br>" + "Cena z rabatem: " + cena_w_rabat + "zł";
        }
        else
        {
            cena = liczba * 1;

            where.innerHTML = "Cena: " + cena + "zł";
        }
    }
}