function oblicz( form1 )
{
    if( form1.numer1.value == "" || form1.numer2.value == "" )
    {
        let x = document.getElementById( "wynik" );
        x.innerHTML = "Brak danych"
    }
    else 
    {


        let selOperator = document.getElementById( "znak" );
        let ktory = selOperator.selectedIndex;
        let twojOperator = selOperator[ ktory ].value;

        console.log( ktory );

        let x = document.getElementById( "wynik" );
        let wynik = 0
        if( ktory == 0 )
        {
            wynik = Number( form1.numer1.value ) + Number( form1.numer2.value );
        }
        else if( ktory == 1 )
        {
            wynik = Number( form1.numer1.value ) - Number( form1.numer2.value );
        }
        else if( ktory == 2 )
        {
            wynik = Number( form1.numer1.value ) * Number( form1.numer2.value );
        }
        else if( ktory == 3 )
        {
            wynik = Number( form1.numer1.value ) / Number( form1.numer2.value );
        }

        x.innerHTML = wynik;
    }
}