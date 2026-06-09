<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5</title>
</head>
<body>

    <form action="0_4-Zadanie5.php" method="post">

        <label for="year">Podaj rok:</label>
        <input type="number" name="year" min="0"> <br><br>

        <input type="reset">
        <input type="submit">

    </form>
    
    <?php

        include( "0_4-Zadanie5-skrypt.php" );

    ?>

</body>
</html>