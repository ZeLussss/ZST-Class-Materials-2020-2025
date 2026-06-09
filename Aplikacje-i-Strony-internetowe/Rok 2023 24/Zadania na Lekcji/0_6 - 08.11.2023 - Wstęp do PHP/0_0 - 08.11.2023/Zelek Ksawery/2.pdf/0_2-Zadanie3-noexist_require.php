<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ksawery Zelek</title>
</head>
<body>

    <?php 
    
        require '0_1-Zadanie1.php';     // Nieistniejący plik

        // Kiedy podamy ścieżkę do nieistniejącego pliku i użyjemy dyrektywy require, to pokaże nam się błąd na stronie
        // Ale PRZESZKODZI to nam w dalszym odczytywaniu kodu na stronie (Pokaże się fatal error)

        echo( "Imie: " . $imie . "<br>" );
        echo( "Nazwisko: " . $nazwisko . "<br>" );
        echo( "Email: " . $email . "<br>" );
        echo( "Nazwa szkoły: " . $nazwa_szkoly . "<br>" ); 
        echo( "Adres szkoły: " . $adres_szkoly . "<br>" );

    ?>
    
</body>
</html>