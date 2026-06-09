<?php

    session_start();

    if( !isset( $_SESSION[ "log" ] ) )
    {
        header( "location: index.php" );
        exit;
    }
    else
    {
        unset( $_SESSION[ "log" ] );
    }
    session_destroy();

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5 - wylogowanie</title>
</head>
<body>

    <p>Wylogowanie prawidlowe</p>

    <a href="index.php">Powrót do strony logowania</a>
    
</body>
</html>