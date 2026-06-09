<?php

    session_start();
    if( isset( $_SESSION[ 'log' ] ) )
    {
        header( "location: zabezpieczona.php" );
        exit;
    }
    else if( isset( $_POST[ "username" ] ) && isset( $_POST[ "password" ] ) )
    {
        if( $_POST[ "username" ] == "Ksawi" && $_POST[ "password" ] == "123456" )
        {
            $_SESSION[ "log" ] = "Username";
            header( "location: zabezpieczona.php" );
            exit;
        }
        else
        {
            echo( "Niepoprawne dane logowania" );
        }
    }
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5 - Logowanie</title>
</head>
<body>
    
    <p>Podaj nazwe i haslo</p>

        <form action="index.php" method="post">

            <label for="username"> Użytkownik:
                <input type="text" name="username">
            </label> <br>

            <label for="password"> Hasło:
                <input type="password" name="password">
            </label> <br>

            <input type="submit">

        </form>

</body>
</html>