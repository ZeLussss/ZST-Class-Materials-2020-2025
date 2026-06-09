<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>

    <?php

        if( isset( $_COOKIE[ "odw" ] ) )
        {
            $last_visit = $_COOKIE[ "odw" ];
            echo( "Witaj, ostatni raz odwiedziłeś nas " . $_COOKIE[ "odw" ] );
            $currentDateTime = date( "d F Y, \o \g\o\d\z. H:i:s" );
            setcookie( 'odw', $currentDateTime, time() + ( 86400 * 30 ) );
        }
        else
        {
            $currentDateTime = date( "d F Y r, \o \g\o\d\z. H:i:s" );
            setcookie( 'odw', $currentDateTime, time() + ( 86400 * 30 ) );
            echo( "Cześć, jesteś tutaj po raz pierwszy!" );
        }

    ?>
    
</body>
</html>