<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ksawery Zelek</title>
</head>
<body>

    <?php 
    
        include '0_1-Zadanie1.php';     // Nieistniejący plik

        // Kiedy podamy ścieżkę do nieistniejącego pliku i użyjemy dyrektywy include, to pokaże nam się błąd na stronie
        // Ale nie przeszkodzi to w dalszym odczytywaniu kodu na stronie

        echo( "Imie: " . $imie . "<br>" );
        echo( "Nazwisko: " . $nazwisko . "<br>" );
        echo( "Email: " . $email . "<br>" );
        echo( "Nazwa szkoły: " . $nazwa_szkoly . "<br>" ); 
        echo( "Adres szkoły: " . $adres_szkoly . "<br>" );

    ?>
    
</body>
</html>