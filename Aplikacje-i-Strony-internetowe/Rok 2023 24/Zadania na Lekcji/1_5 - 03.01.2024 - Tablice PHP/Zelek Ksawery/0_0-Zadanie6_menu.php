<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="0_0-styles.css">
    
    <title>Menu</title>
</head>
<body>

    <?php

        $menu = array(
            "Zadanie 1" => "0_1-zad1.php",
            "Zadanie 2" => "0_2-zad2.php",
            "Zadanie 3" => "0_3-zad3.php",
            "Zadanie 4" => "0_4-zad4.php",
            "Zadanie 5" => "0_5-zad5.php"
        );

        echo( "<ul>" );

        foreach( $menu as $nazwa => $adres )
        {
            echo( "<li>" );
            echo( "<a href=\"$adres\"> $nazwa </a>" );
            echo( "</li>" );
        }

        echo( "</ul><br>" );


    ?>

</body>
</html>
