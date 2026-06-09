<?php

    if( !isset( $_POST[ 'year' ] ) && ( $_POST[ 'year' ] != 0 ) )
    {
        echo( "<h2>NIE PODAŁEŚ DANYCH</h2>" );
    }
    else
    {
        $year = $_POST[ 'year' ];

        if( !empty( $year ) )
        {
            if( $year % 4 == 0 )
            {
                echo( "Rok <b>$year</b> jest przestępny" );
            }
            else
            {
                echo( "Rok <b>$year</b> NIE jest przestępny" );
            }
        }
        else
        {
            echo( "<h2>NIE PODAŁEŚ DANYCH</h2>" );
        }
    }

?>