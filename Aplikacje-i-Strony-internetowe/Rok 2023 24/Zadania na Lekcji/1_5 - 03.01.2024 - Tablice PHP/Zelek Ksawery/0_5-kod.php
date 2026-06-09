<?php

    echo( "<h1> Zadanie 5 </h1>" );
    
    $min = rand( 0, 499 );
    $max = rand( 500, 999 );

    $tab = array();

    for( $i = 0; $i <= 199; $i++ )
    {
        $tab[ $i ] = rand( $min, $max );
    }

    // Drukowanie tablicy

    echo( "<table>" );

    echo( "<tr> <th colspan=\"20\"> Liczby pseudolosowe </th> </tr>" );

    $index = 0;
    for( $i = 0; $i <= 9; $i++ )
    {
        echo( "<tr>" );
        for( $j = 0; $j <= 19; $j++ )
        {
            if( $tab[ $index ] % 2 )
            {
                echo( "<td class=\"odd\">" );

                echo( $tab[ $index ] );
                $index += 1;

                echo( "</td>" );
            }
            else
            {
                echo( "<td class=\"even\">" );

                echo( $tab[ $index ] );
                $index += 1;

                echo( "</td>" );
            }
        }
        echo( "</tr>" );
    }

    echo( "</table>" );

?>