<?php

    if( !isset( $_POST[ "bok1" ] ) || !isset( $_POST[ "bok2" ] ) )
    {
        echo( "<h2>NIE PODAŁEŚ DANYCH</h2>" );
    }
    else
    {
        $bok1 = $_POST[ "bok1" ];
        $bok2 = $_POST[ "bok2" ];

        if( empty( $bok1 ) || empty( $bok2 ) )
        {
            echo( "<h2>NIE PODAŁEŚ DANYCH</h2>" );
        }
        else
        {
            $pole_prost = $bok1 * $bok2;
        
            echo( "<h2>Pole prostokąta wynosi:</h2>" );
            echo( "<b>Wynik:</b> $pole_prost cm<sup>2</sup>" );
        }
    }

?>