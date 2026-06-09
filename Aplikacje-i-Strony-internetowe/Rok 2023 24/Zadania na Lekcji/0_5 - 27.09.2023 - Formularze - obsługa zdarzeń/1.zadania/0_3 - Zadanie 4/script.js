function send( form )
{
    // Imie
    let imie = String( form.imie.value );
    let nazwisko = String( form.nazwisko.value );
    document.write( "Twoje imie i nazwisko: " + imie + " " + nazwisko + "<br>" );

    // Płeć
    let plec = String( form.plec.value );
    document.write( "Płeć: " + plec + "<br>" );

    // Lata
    let lata = String( form.lat.value );
    document.write( "Lat: " + lata + "<br>" );

    // Muzyka
    let muzyka = form.music;
    let muzyka_string = "";
    let ile = muzyka.length;
    
    for( let i = 0; i < ile; i++ )
    {
        if( muzyka[ i ].checked )
        {
            if( i == 5 )
            {
                if( muzyka[ 5 ].checked )
                {
                    str = String( form.music_1.value );
                    console.log( str );
                    muzyka_string += str + ", ";
                }
            }
            else
            {
                muzyka_string += muzyka[ i ].value + ", ";
            }
        }
    }


    muzyka_string = muzyka_string.slice( 0, -2 );

    document.write( "Ulubiona muzyka: " + muzyka_string + "<br>" );

    // Przegladarka
    let przegladarka = String( form.browser.value );
    document.write( "Ulubiona przegladarka: " + przegladarka + "<br>" );

    // System
    let system = form.OS;
    let system_string = "";
    ile = system.length;

    for( let i = 0; i < ile; i++ )
    {
        if( system[ i ].selected )
        {
            system_string += system[ i ].value + ", ";
        }
    }

    system_string = system_string.slice( 0, -2 );

    document.write( "Ulubiony system: " + system_string + "<br>" );

    // Komentarz
    let komentarz = String( form.comment.value );
    document.write( "Komentarz: " + komentarz + "<br>" );
    
}