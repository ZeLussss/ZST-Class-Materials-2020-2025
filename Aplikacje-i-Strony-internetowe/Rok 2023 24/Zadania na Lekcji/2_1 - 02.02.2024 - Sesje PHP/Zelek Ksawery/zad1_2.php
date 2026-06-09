<?php

    if( !isset( $_COOKIE[ 'data_urodzenia' ] ) && !isset( $_POST[ "data" ] ) )
    {

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>

    <form action="zad1_2.php" method="post">

        <label for="data"><input type="date" name="data"></label>
        <input type="submit" name="submit">

    </form>

    <?php

    }
    else
    {
        if( isset( $_POST[ "data" ] ) )
        {
            setcookie( "data_urodzenia", $_POST[ "data" ], strtotime("+1 year") );
            echo( "Dziękuję za podanie twojej daty urodzenia!");
        }
    }

    if( isset( $_COOKIE[ 'data_urodzenia' ] ) ) 
    {
        if( date( "Y-m-d" ) == $_COOKIE[ 'data_urodzenia' ] )
        {
            echo( "Szczęśliwych urodzin!" );
        }
        else
        {
            echo( "Twoja data urodzenia: " . $_COOKIE[ "data_urodzenia" ] );
        }
    }

    ?>
    
</body>
</html>