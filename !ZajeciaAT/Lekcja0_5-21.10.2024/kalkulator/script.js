let rownanie = "";
let wydruk = document.getElementById( "poleDoWyniku" );

let num = "";

function add( x )
{
    if( rownanie.length != 0
        && ( rownanie[ rownanie.length - 1 ] == '+'
        || rownanie[ rownanie.length - 1] == '-'
        || rownanie[ rownanie.length - 1 ] == '*'
        || rownanie[ rownanie.length - 1] == '/' )
    )
    {
        num += String( x );
        
        console.log( x );
        console.log( "TABLICA: ", rownanie );
    }
    else if( rownanie.length == 0 )
    {
        num += String( x );
            
        console.log( x );
        console.log( "TABLICA: ", rownanie );
    }
        
    document.getElementById( "poleDoWyniku" ).value = String( num );

}

function change( x )
{
    if( rownanie.length != 0 
        && ( rownanie[ rownanie.length - 1 ] != '+'
        && rownanie[ rownanie.length - 1 ] != '-'
        && rownanie[ rownanie.length - 1 ] != '*'
        && rownanie[ rownanie.length - 1 ] != '/' )
    )
    {
        rownanie.push( x );
        console.log( x );

        console.log( "TABLICA: ", rownanie );
    }
    else
    {
        rownanie += num;
        rownanie += x;
        console.log( x );
        console.log( "TABLICA: ", rownanie );
    }

    num = "";
}

function wynik()
{
    rownanie += num;
    console.log( "TABLICA: ", rownanie );
    document.getElementById( "poleDoWyniku" ).value = String( eval( rownanie ) );
    console.log( eval( rownanie ) );

    document.getElementById( eval( rownanie ) );

    rownanie = "";
    num = "";
}

function wyczysc()
{
    document.getElementById( "poleDoWyniku" ).value = String( "" );
    rownanie = "";
    num = "";
    console.log( 1 );
}

