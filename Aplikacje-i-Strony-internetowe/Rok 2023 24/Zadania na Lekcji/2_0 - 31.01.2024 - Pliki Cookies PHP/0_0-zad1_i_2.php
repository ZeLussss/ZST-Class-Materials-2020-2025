<?php

    if( !isset( $_COOKIE[ 'odwiedzen' ] ) )
    {
        $odw = 1;
    }
    else
    {
        $odw = intval( $_COOKIE[ 'odwiedzen' ] ) + 1;
    }

    setcookie( "odwiedzen", $odw, time() + 60 * 60 * 365 );


    $miesiac = 2592000 + time();
    $rok = $miesiac * 12;

    setcookie( "wizyta", date( "d.M.y H:i", $miesiac ) );
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zadanie 1</title>
    </head>
    <body>
        
        <?php

            if( $odw == 1 )
            {
                echo( "Cześć, jesteś tu po raz pierwszy!" . "<br>" );
            }
            else
            {
                $ostatnia_wizyta = $_COOKIE[ 'wizyta' ];
                echo( "Witaj, ostatni raz odwiedziłeś nas " . $ostatnia_wizyta . "<br>" );
            }

        ?>
    
</body>
</html>