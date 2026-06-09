<?php

    if( !isset( $_POST[ 'liczba1' ] ) || !isset( $_POST[ 'liczba2' ] ) )
    {
        echo( "<h2>NIE PODAŁEŚ DANYCH</h2>" );
    }
    else
    {
        $num1 = $_POST[ 'liczba1' ];
        $num2 = $_POST[ 'liczba2' ];
    
        if( empty( $num1 ) || empty( $num2 ) )
        {
            echo( "<h2>NIE PODAŁEŚ DANYCH</h2>" );
        }
        else
        {
            echo( "<h2>Wynik</h2>" );
            if( $num1 > $num2 )
            {
                echo( "Liczba num1( $num1 ) <b>jest większa</b> niż liczba num2( $num2 )" );
            }
            else if( $num2 > $num1 )
            {
                echo( "Liczba num2( $num2 ) <b>jest większa</b> niż liczba num1( $num1 )" );
            }
            else
            {
                echo( "Liczba num1( $num1 ) <b>jest równa</b> liczbie num2( $num2 )" );
            }
        }
    }

?>