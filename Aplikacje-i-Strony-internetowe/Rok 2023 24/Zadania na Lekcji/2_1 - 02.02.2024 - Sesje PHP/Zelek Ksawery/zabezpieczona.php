<?php

    session_start();
    if( !isset( $_SESSION[ 'log' ] ) )
    {
        header( "location: index.php" );
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5 - zabezpieczona</title>
</head>
<body>
    
    <p>Witamy na stronie.</p>

    <p>Pamiętaj o wylogowaniu przed opuszczeniem strony.</p>

    <a href="wylogowanie.php">Wylogowanie</a>

</body>
</html>