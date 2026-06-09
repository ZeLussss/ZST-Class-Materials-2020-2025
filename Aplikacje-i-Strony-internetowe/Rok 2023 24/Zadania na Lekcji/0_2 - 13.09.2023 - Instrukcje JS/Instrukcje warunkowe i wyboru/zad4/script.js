if( confirm( "Czy chcesz wykonać obliczenie równania liniowego?" ) )
{
    const a = Number( prompt( "Podaj liczbe a" ) );

    if( a != null )
    {
        const b = Number( prompt( "Podaj liczbe b" ) );

        if( b != null )
        {
            const c = Number( prompt( "Podaj liczbe c" ) );

            if( c != null )
            {
                let delta = ( b * b ) - 4 * a * c;

                if ( delta < 0 )
                {
                    document.write( "<br>Wyniki dla \t a => " + a + ", b => " + b + ", c => " + c + '<br>' );
                    document.write( "Nie ma rozwiązań" );
                }
                else if( delta == 0 )
                {
                    let x = -( b / ( 2 * a ) );

                    document.write( "<br>Wyniki dla \t a => " + a + ", b => " + b + ", c => " + c + '<br>' );
                    document.write( "Równanie ma jedno miejsce zerowe równe: " + x.toFixed( 3 ) );
                }
                else if( delta != 0 )
                {
                    let x1 = ( -b - Math.sqrt( delta ) ) / ( 2 * a );
                    let x2 = ( -b + Math.sqrt( delta ) ) / ( 2 * a );

                    document.write( "<br>Wyniki dla \t a => " + a + ", b => " + b + ", c => " + c + '<br>' );
                    document.write( "Równanie ma dwa miejsca zerowe równe: x1 => " + x1.toFixed( 3 ) + ", x2 => " + x2.toFixed( 3 ) );
                }
            }
        }
    }
}
else
{
    alert( "Spróbujmy następnym razem!" );
}