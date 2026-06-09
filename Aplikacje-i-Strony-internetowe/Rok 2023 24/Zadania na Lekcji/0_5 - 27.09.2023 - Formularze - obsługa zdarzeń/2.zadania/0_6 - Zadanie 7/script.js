function oblicz( form )
{
    let where = document.getElementById( "wynik" );

    let liczba = parseInt( form.cegly.value );

    let wynik = 0;
    let waga = 0;
    let str = "";

    if( isNaN( liczba ) )
    {
        where.innerHTML = "Podaj odpowiedni typ danych";
    }
    else
    {
        if( form.prem.checked )
        {
            wynik += ( liczba * 2.6 );
            waga += ( liczba * 1.75 );
        }
        else
        {
            wynik += ( liczba * 2.0 );
            waga += ( liczba * 1.5 );
        }

        str = "Zakupiona ilość cegieł: " + liczba;

        if( form.prem.checked )
        {
            str += " cegla premium,";
        }
        else
        {
            str += " cegla standardowa,";
        }

        str += " koszt zakupu cegieł: " + wynik + " zł, waga cegieł: " + waga + " kg";
    
    
        where.innerHTML = str;
    }
}