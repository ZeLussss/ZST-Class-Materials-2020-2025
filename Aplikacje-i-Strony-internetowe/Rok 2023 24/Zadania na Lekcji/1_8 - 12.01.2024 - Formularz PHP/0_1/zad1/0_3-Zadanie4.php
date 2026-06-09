<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>

    <form action="0_3-Zadanie4.php" method="post">

        <label for="liczba">Podaj liczbę</label>
        <input type="number" name="liczba"> <br><br>

        <input type="reset">
        <input type="submit">

    </form>

    <?php

        include( "0_3-Zadanie4-skrypt.php" );

    ?>
    
</body>
</html>