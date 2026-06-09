///////////////////////////////////////////////////////////////
let PI = 3.141592653589793;

function zadanie_1()
{
    alert( "Wybrano zadanie 1" );

    let r = Number( prompt( "Podaj promień kuli" ) );

    if( r != null )
    {
        if( confirm( "Wykonać obliczenia?" ) )
        {
            let wynik = ( ( 4 / 3 ) * PI * ( r * r * r ) );

            document.write( wynik.toFixed( 3 ) );
        }
        else
        {
            alert( "Anulowano obliczenia! " );
        }
    }
    else
    {
        alert( "Podano złe dane!" );
    }
}
//*************************************
function zadanie_2()
{
    alert( "Wybrano zadanie 2" );

    let d = Number( prompt( "Podaj wartość d" ) );

    if( d == null ) alert( "Nie podano wartości" );
    else
    {
        let D = Number( prompt( "Podaj wartość D" ) );

        if( d == null ) alert( "Nie podano wartości D" );
        else
        {   
            let H = Number( prompt( "Podaj wartość H" ) );

            if( H == null ) alert( "Nie podano wartości H" );
            {
                if( d > 0 && D > 0 && D > d )
                {
                    if( confirm( "Wykonać obliczenia?" ) )
                    {
                        let wynik = ( ( 1 / 15 ) * PI * H * ( ( 2 * ( D * D ) + ( D * d ) + ( ( 3 / 4 ) * ( d * d ) ) ) ) );
                
                        document.write( wynik );

                        return console.log( "HAHAHA zwróciłem wartość w zadaniu 2 (typu string)" );
                    }
                    else
                    {
                        alert( "Anulowano obliczenia" );
                    }
                }
                else
                {
                    if( d <= 0 )
                    {
                        document.write( "Wartość d jest mniejsza lub równa 0" );
                        document.write( "<br>" );
                    }
                    if( D <= 0 )
                    {
                        document.write( "Wartość D jest mniejsza lub równa 0" );
                        document.write( "<br>" );
                    }
                    if( D <= d )
                    {
                        document.write( "Wartość D jest mniejsza lub równa wartości d" );
                        document.write( "<br>" );
                    }
                }
            }
        } 
    }
}
//*************************************
function zadanie_3( x, y, z )
{
    if( confirm( "Wykonać obliczenia?" ) )
    {
        let wynik = ( ( Math.pow( x, 3 ) / Math.pow( y, 5 ) ) + Math.sqrt( Math.abs( Math.pow( 2, x ) - ( y / z ) ) ) ) / ( x + ( ( 7 * y ) / ( ( 2 * x) + z ) ) );
                                    
        return document.write( wynik.toFixed( 3 ) );
    } 
    else
    {
        alert( "Anulowano obliczenia!" );
    }
}
//*************************************
function zadanie_4( n, x )
{
    let array = new Array();
    for( let i = 0; i < n; i++ )
    {
        array.push( Math.floor( Math.random() * x + 1 ) );
    }

    document.write( "<table class=\"tab\">" );

    document.write( "<tr>" );

    for( let i = 0; i < n; i++ )
    {
        document.write( "<td>", array[ i ], "</td>" );
    }

    document.write( "</tr>" );
    
    document.write( "</table>" );
    document.write( "<br>" );

    // Znajdzie największy i najmniejszy element. dodatkowo niech poda, ile razy one występują.
    let max = array[ n - 1 ];
    let min = array[ 0 ];

    for( let i = 0; i < n; i++ )
    {
        if( array[ i ] > max ) 
        {
            max = array[ i ];
        }
        if( array[ i ] < min )
        {
            min = array[ i ];
        }
    }

    let count_max = 0;
    let count_min = 0;

    for( let i = 0; i < n; i++ )
    {
        if( array[ i ] == max ) count_max++;
        if( array[ i ] == min ) count_min++;
    }

    document.write( "Wartość maksymalna: ", max, " występuje ", count_max, " razy" );
    document.write( "<br>" );
    document.write( "Wartość minimalna: ", min, " występuje ", count_min, " razy" );
    document.write( "<br>" );

    // sortowanie tablicy
    array.sort( function( a, b ) { return a - b } );

    // Wartość średnia
    let sum = 0;
    for( let i = 0; i < n; i++ )
    {
        sum += array[ i ];
    }
    let avg = sum / n;

    document.write( "Wartość średnia: ", avg.toFixed( 3 ) );
    document.write( "<br>" );

    // Mediana
    let median = 0;
    if( n % 2 == 0 )
    {
        median = ( array[ ( n / 2 ) - 1 ] + array[ n / 2 ] ) / 2;
    }
    else
    {
        median = array[ Math.floor( n / 2 ) ];
    }
    document.write( "mediana: ", median.toFixed( 3 ) );
}
///////////////////////////////////////////////////////////////

if( confirm( "Czy chcesz podać numer zadania?" ) )
{
    let choose = Number( prompt( "Podaj numer zadania [1 - 4] " ) );
    
    if( choose == null )
    {
        alert( "Nie podano wartości!" );
    }
    else
    {
        switch( choose )
        {
            case 1:
                zadanie_1();
                break;
            case 2:
                zadanie_2();
                break;
            case 3:
            {
                alert( "Wybrano zadanie 3 ");
                
                let x = Number( prompt( "Podaj wartość x" ) );
                    
                if( x == null ) alert( "Nie podano wartości x" );
                else
                {
                    let y = Number( prompt( "Podaj wartość y" ) );
                        
                    if( y == null ) alert( "Nie podano wartości y" );
                    else
                    {
                        let z = Number( prompt( "Podaj wartość z" ) );
                        
                        if( z == null ) alert( "Nie podano wartości z" );
                        else
                        {
                            zadanie_3( x, y, z );           
                        }
                    }
                }
                break;
            }
            case 4:
            {
                alert( "Wybrano zadanie 4" );

                let n = Number( prompt( "Ile liczb chcesz wygenerować?" ) );

                if( n == null ) alert( "Nie podano liczby" );
                else
                {
                    let x = Number( prompt( "Jaki ma być ich przedział? (Podaj x dla przedziału [1, x])" ) );
                    
                    if( x == null ) alert( "Nie podano liczby" );
                    else
                    {
                        zadanie_4( n, x );
                    }
                }
                break;
            }
            default:
                alert( "Nie podano dobrego numeru zadania!" );
        }
    }
}
else
{
    alert( "Szkoda! Zapraszam ponownie " );
}