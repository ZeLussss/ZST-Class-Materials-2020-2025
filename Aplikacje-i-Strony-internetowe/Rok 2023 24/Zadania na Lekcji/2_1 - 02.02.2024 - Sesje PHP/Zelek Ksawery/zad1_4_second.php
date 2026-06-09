<?php
    session_start();
    
    $nazwa_main = "second";
    $expireDate = time() + 60 * 60 * 24 * 365;

    if( !isset( $_SESSION[ $nazwa_main ] ) )
    {
        $odw_sec = 1;
        $_SESSION[ $nazwa_main ] = 1;
    }
    else
    {
        $odw_sec = $_SESSION[ $nazwa_main ];
        $_SESSION[ $nazwa_main ];
    }
    $_SESSION[ $nazwa_main ]++;
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>

    <?php

        if( !isset( $_SESSION[ 'wizyty-main' ] ) )
        {
            $odw = 0;
            $_SESSION[ 'wizyty-main' ] = $odw;
        }
        else
        {
            $odw = $_SESSION[ 'wizyty-main' ];
            $_SESSION[ 'wizyty-main' ] = $odw;
        }

        if( !isset( $_SESSION[ 'third' ] ) )
        {
            $odw_third = 0;
            $_SESSION[ 'third' ] = $odw_third;
        }
        else
        {
            $odw_third = $_SESSION[ 'third' ];
            $_SESSION[ 'third' ] = $odw_third;
        }

        echo( "<h2>Strona main</h2>" );
        echo( "Odwiedzin na stronie main: " . $odw . "<br>" );
        echo( "Odwiedzin na stronie second: " . $odw_sec . "<br>" );
        echo( "Odwiedzin na stronie third: " . $odw_third . "<br>" );

        echo( "<br><br><br>" );

        echo( "<a href='zad1_4_main.php'> main </a> <br>" );
        echo( "<a href='zad1_4_second.php'> second </a> <br>" );
        echo( "<a href='zad1_4_third.php'> third </a> <br>" );

    ?>
    
</body>
</html>