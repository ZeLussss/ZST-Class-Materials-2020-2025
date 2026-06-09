<?php

    if( !isset( $_COOKIE[ "odwiedzin" ] ) )
    {
        $odw = 1;
        setcookie( "odwiedzin", $odw, time() + 60 * 60 * 24 * 365 );
    }
    else
    {
        $odw = intval( $_COOKIE[ "odwiedzin" ] ) + 1;
        setcookie( "odwiedzin", $odw, time() + 60 * 60 * 24 * 365 );
    }

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>

    <?php

        if( $odw > 10 )
        {
            echo( "Odwiedziłeś stronę więcej niż 10 razy! Dostęp ZABLOKOWANY!" );
            exit;
        }
        else
        {
            echo( "Witaj, odwiedziłeś nas już $odw raz/razy" );
        }

    ?>
    
</body>
</html>