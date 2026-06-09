<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ksawery Zelek</title>
</head>
<body>

    <?php 
    
        require '0_0-Zadanie1.php';     

        // require załącza plik w miejscu wywołania,
        // Jeśli dane są wymagane i wystąpi błąd to jest to traktowane jako fatal error;

        echo( "Imie: " . $imie . "<br>" );
        echo( "Nazwisko: " . $nazwisko . "<br>" );
        echo( "Email: " . $email . "<br>" );
        echo( "Nazwa szkoły: " . $nazwa_szkoly . "<br>" ); 
        echo( "Adres szkoły: " . $adres_szkoly . "<br>" );

    ?>
    
</body>
</html>