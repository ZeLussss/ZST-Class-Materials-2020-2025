<?php
    if( !isset( $_COOKIE[ "form" ] ) && !isset ( $_POST[ "dane" ] ) )
    {
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>

    <p>Podaj swoje imię:</p> <br>

    <form action="zad0_3.php" method="post">

        <input type="text" name="dane" value=" ">

        <p> <input type="submit" name="wyslij"> </p>
    </form>

</body>

<?php

    }
    else
    {
        if( isset( $_POST[ "dane" ] ) )
        {
            setcookie( "form", $_POST[ "dane" ], time() + 60 * 60 * 24 * 365 );
            echo( "Dziękujemy za wprowadzenie danych" );
        }
        else
        {
            echo( "Cześć " . $_COOKIE[ "form" ] );
        }
    }



?>

</html>