<?php

        if( !isset( $_COOKIE[ "odw" ] ) )
        {
            $odwiedziny = 1;
            setcookie( "odw", $odwiedziny, time() + 60 * 60 * 24 * 365 );
        }
        else
        {
            $odwiedziny = intval( $_COOKIE[ "odw" ] ) + 1;
            setcookie( "odw", $odwiedziny, time() + 60 * 60 * 24 * 365 );
        }

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>

    <?php

        if ( isset( $_COOKIE[ "odw" ] ) ) 
        {
            $koncowka = ( $odwiedziny == 1 ) ? "raz" : "razy";
            echo "Licznik odświeżeń strony: $odwiedziny $koncowka";
        } 
        else 
        {
            echo "Licznik odświeżeń strony: 1 raz";
        }   

       ?>

</body>
</html>