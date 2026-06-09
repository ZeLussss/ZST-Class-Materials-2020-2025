<?php

    if( !isset( $_POST[ 'liczba' ] ) && ( $_POST[ 'liczba' ] != 0 ) )
    {
        echo( "<h2>NIE PODAŁEŚ DANYCH</h2>" );
    }
    else
    {
        $number = $_POST[ 'liczba' ];

        if( isset( $number ) )
        {
            if( $number > 0 )
            {
                echo( "Liczba <b>$number</b> jest dodatnia" );
            }
            else if( $number == 0 )
            {
                echo( "Liczba <b>$number</b> jest równa 0" );
            }
            else
            {
                echo( "Liczba <b>$number</b> jest ujemna" );
            }
        }
        else if( empty( $number ) )
        {
            echo( "<h2>NIE PODAŁEŚ DANYCH</h2>" );
        }
    }

?>