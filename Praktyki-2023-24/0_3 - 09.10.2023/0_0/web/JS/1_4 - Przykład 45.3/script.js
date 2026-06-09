function oblicz()
{
    let x = Number( document.getElementById( "liczba1" ).value );
    let y = Number( document.getElementById( "liczba2" ).value );
    let z = document.getElementById( "wyb" ).value;

    if( z == "d1" )         document.getElementById( "wynik" ).innerHTML = x + y;
    else if( z == "d2" )    document.getElementById( "wynik" ).innerHTML = x - y;
    else if( z == "d3" )    document.getElementById( "wynik" ).innerHTML = x * y;
    else if( z == "d4" )    document.getElementById( "wynik" ).innerHTML = x / y;
    else                    document.getElementById( "wynik" ).innerHTML = "BŁĄD";
}