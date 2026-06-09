<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>

    <form action="0_2-Zadanie3.php" method="post">

        <label for="name">Podaj swoje imie:</label>
        <input type="text" name="name"> <br>

        <label for="wiek">Podaj swój wiek: </label>
        <input type="number" name="wiek" min="0"> <br><br>

        <input type="reset">
        <input type="submit">

    </form>
    
    <?php

        include( "0_2-Zadanie3-skrypt.php" );

    ?>

</body>
</html>