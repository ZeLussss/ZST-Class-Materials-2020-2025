<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>

    <form action="0_1-Zadanie2.php" method="post">

        <label for="liczba1">Podaj 1-szą liczbę: </label>
        <input type="number" name="liczba1"> <br>

        <label for="liczba2">Podaj 2-ą liczbę: &nbsp;&nbsp;</label>
        <input type="number" name="liczba2"> <br> <br>

        <input type="reset">
        <input type="submit">

    </form>
    
    <?php

        include( "0_1-Zadanie2-skrypt.php" );

    ?>

</body>
</html>