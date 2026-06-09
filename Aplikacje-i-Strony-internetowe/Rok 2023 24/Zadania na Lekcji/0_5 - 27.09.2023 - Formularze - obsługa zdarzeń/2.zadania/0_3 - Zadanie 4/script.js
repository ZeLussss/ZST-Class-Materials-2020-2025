function oblicz( val )
{
    let where = document.getElementById( "wynik" );

    if( val == "+" )
    {
        let first = document.getElementById( "numer_1" ).value;
        let second = document.getElementById( "numer_2" ).value;

        if( first == "" || second == "" )
        {
            where.innerHTML = "Proszę wprowadzić poprawnie dane";
        }
        else
        {
            where.innerHTML = "Wynik: " + ( parseInt( first ) + parseInt( second ) );
        }
    }
    else if( val == "-" )
    {
        let first = document.getElementById( "numer_1" ).value;
        let second = document.getElementById( "numer_2" ).value;

        if( first == "" || second == "" )
        {
            where.innerHTML = "Proszę wprowadzić poprawnie dane";
        }
        else
        {
            where.innerHTML = "Wynik: " + ( parseInt( first ) - parseInt( second ) );
        }
    }   
    else if( val == "*" )
    {
        let first = document.getElementById( "numer_1" ).value;
        let second = document.getElementById( "numer_2" ).value;

        if( first == "" || second == "" )
        {
            where.innerHTML = "Proszę wprowadzić poprawnie dane";
        }
        else
        {
            where.innerHTML = "Wynik: " + parseInt( first ) * parseInt( second );
        }
    }
    else if( val == "/" )
    {
        let first = document.getElementById( "numer_1" ).value;
        let second = document.getElementById( "numer_2" ).value;

        if( first == "" || second == "" )
        {
            where.innerHTML = "Proszę wprowadzić poprawnie dane";
        }
        else
        {
            where.innerHTML = "Wynik: " + parseInt( first ) / parseInt( second );
        }
    }
    else if( val == "%" )
    {
        let first = document.getElementById( "numer_1" ).value;
        let second = document.getElementById( "numer_2" ).value;

        if( first == "" || second == "" )
        {
            where.innerHTML = "Proszę wprowadzić poprawnie dane";
        }
        else
        {
            where.innerHTML = "Wynik: " + parseInt( first ) % parseInt( second );
        }
    }
    else if( val == "//" )
    {
        let first = document.getElementById( "numer_1" ).value;
        let second = document.getElementById( "numer_2" ).value;

        if( first == "" || second == "" )
        {
            where.innerHTML = "Proszę wprowadzić poprawnie dane";
        }
        else
        {
            where.innerHTML = "Wynik: " + Math.floor( parseInt( first ), parseInt( second ) );
        }

    }
}