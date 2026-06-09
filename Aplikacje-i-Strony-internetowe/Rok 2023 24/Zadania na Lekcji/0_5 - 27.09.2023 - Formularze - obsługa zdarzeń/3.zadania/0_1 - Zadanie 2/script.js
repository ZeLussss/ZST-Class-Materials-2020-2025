function calculate( operation )
{
    let where = document.getElementById( "wynik" );

    console.log( operation );

    let a = Number( document.getElementById( "liczba_A" ).value );
    let b = Number( document.getElementById( "liczba_B" ).value );
    let sum = 0;

    if( operation == "+" )
    {   
        sum = a + b;
    }
    else if( operation == "-" )
    {
        sum = a - b;
    }
    else if( operation == "*" )
    {
        sum = a * b;
    }  
    else if( operation == "/" )
    {
        sum = a / b;
    }
    else if( operation == "A ^ B" )
    {
        sum = Math.pow( a, b );
    }

    where.innerHTML = "Wynik: " + sum;
}