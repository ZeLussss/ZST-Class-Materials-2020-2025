<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>

    <form action="0_0-Zadanie1.php" method="post">

        <label for="bok1">Podaj pierwszy bok prostokąta:</label> <br>
        <input type="number" name="bok1" min="1"> <br>

        <label for="bok2">Podaj drugi bok prostokąta:</label> <br>
        <input type="number" name="bok2" min="1"> <br> <br>

        <input type="reset">
        <input type="submit">

    </form>
    
    <?php

        include( "0_0-Zadanie1-skrypt.php" );

    ?>

</body>
</html>