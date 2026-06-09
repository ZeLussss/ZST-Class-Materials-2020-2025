<?php

    if( !isset( $_POST[ 'name' ] ) || !isset( $_POST[ 'wiek' ] ) )
    {
        echo( "<h2>NIE PODAŁEŚ DANYCH</h2>" );
    }
    else
    {
        $name = $_POST[ 'name' ];
        $wiek = $_POST[ 'wiek' ];
    
        if( empty( $name ) || empty( $wiek ) )
        {
            echo( "<h2>NIE PODAŁEŚ DANYCH</h2>" );
        }
        else
        {
            if( $wiek >= 18 )
            {
                $wynik = "$name <b>jesteś pełnoletni!</b>";
            }
            else
            {
                $wynik = "$name <b>NIE jesteś pełnoletni!</b>";
            }
        
            echo( $wynik );
        
            echo( "<br><br>" );
        }
    }
?>