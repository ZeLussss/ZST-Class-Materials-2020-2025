<?php

    // Tablica jednowymiarowa
    $tab_1D = array();

    for( $i = 0; $i < 200; $i++ )
    {
        $tab_1D[ $i ] = rand( 0, 999 );
    }


    // Tablica dwuwymiarowa
    $tab_2D = array( array() );

    for( $i = 0; $i < 10; $i++ )
    {
        for( $j = 0; $j < 20; $j++ )
        {
            $tab_2D[ $i ][ $j ] = rand( 0, 999 );
        }
    }

    
    // Wywołanie tablicy jednowymiarowej
    echo( "<h3>Tablica Jednowymiarowa</h3>" );

    echo( "<table>" );

    echo( "<tr>" );
        echo( "<th colspan=20>" );
            echo( "Liczby pseudolosowe" );
        echo( "</th>" );
    echo( "</tr>" );

    for( $i = 0; $i < 10; $i++ )
    {
        echo( "<tr>" );
        for( $j = 0; $j < 20; $j++ )
        {
            echo( "<td>" );

            echo( $tab_1D[ $i + $j ] );

            echo( "</td>" );
        }
        echo( "</tr>" );
    }

    echo( "</table>" );

    // Wywołanie tablicy dwuwymiarowej
    echo( "<h3>Tablica Dwuwymiarowa</h3>" );

    echo( "<table>" );

    echo( "<tr>" );
        echo( "<th colspan=20>" );
            echo( "Liczby pseudolosowe" );
        echo( "</th>" );
    echo( "</tr>" );

    for( $i = 0; $i < 10; $i++ )
    {
        echo( "<tr>" );
        for( $j = 0; $j < 20; $j++ )
        {
            echo( "<td>" );

            echo( $tab_2D[ $i ][ $j ] );

            echo( "</td>" );
        }
        echo( "</tr>" );
    }

    echo( "</table>" );

?>