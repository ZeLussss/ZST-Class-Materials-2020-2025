<?php
    session_start();
    
    $nazwa_main = "third";
    $expireDate = time() + 60 * 60 * 24 * 365;

    if( !isset( $_SESSION[ $nazwa_main ] ) )
    {
        $odw_third = 1;
        $_SESSION[ $nazwa_main ] = 1;
    }
    else
    {
        $odw_third = $_SESSION[ $nazwa_main ];
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

        if( !isset( $_SESSION[ 'second' ] ) )
        {
            $odw_sec = 0;
            $_SESSION[ 'second' ] = $odw_sec;
        }
        else
        {
            $odw_sec = $_SESSION[ 'second' ];
            $_SESSION[ 'second' ] = $odw_sec;
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