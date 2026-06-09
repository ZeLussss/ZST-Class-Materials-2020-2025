<?php

    if( !isset( $_COOKIE[ 'zadanie3' ] ) && !isset( $_POST[ 'imie' ] ) )
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane użytkownika</title>
</head>
<body>
    
    <form action="0_1-zad3.php" method="post">

        <label for="imie">Podaj swoje imie: &nbsp</label>
        <input type="text" name="imie" id="imie">

        <input type="submit">

    </form>

    <?php

    }
    else
    {
        if( isset( $_POST[ 'imie' ] ) )
        {
            setcookie( 'zadanie3', $_POST[ 'imie' ], time() + 60 * 60 * 24 * 365 );
        }
        else
        {
            echo( "Cześć " . $_COOKIE[ 'zadanie3' ] . "!<br>" );
        }
    }

    ?>



</body>
</html>