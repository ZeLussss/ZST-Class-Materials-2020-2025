function calculate()
{
    let typ = document.getElementsByName( "lenght" );
    let ile = typ.length;

    let wybor = '';
    for( let i = 0; i < ile; i++ )
    {
        if( typ[ i ].checked )
        {
            wybor = typ[ i ].value;
            break;
        }
    }

    console.log( wybor );

    let where = document.getElementById( "wynik" );
    let wynik = 0;
    
    if( wybor == "krótkie" )
    {
        wynik = 25;
    }
    else if( wybor == "średnie" )
    {
        wynik = 30;
    }
    else if( wybor == "półdługie" )
    {
        wynik = 40;
    }
    else if( wybor == "długie" )
    {
        wynik = 50;
    }
    else
    {
        wynik = 0;
    }

    where.innerHTML = "Cena strzyżenia: " + wynik + " zł";
}