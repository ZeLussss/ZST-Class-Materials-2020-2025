<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ksawery Zelek</title>
</head>
<body>

    <?php 
    
        require_once '0_-Zadanie1.php';

        // require_once załącza plik w miejscu wywołania, w razie próby ponownego załączenia tych samych danych w tym samym pliku, dyrektywa ta zostanie zignorowana
        // Jeśli dane są wymagane i wystąpi błąd to jest to traktowane jako fatal error;

        echo( "Imie: " . $imie . "<br>" );
        echo( "Nazwisko: " . $nazwisko . "<br>" );
        echo( "Email: " . $email . "<br>" );
        echo( "Nazwa szkoły: " . $nazwa_szkoly . "<br>" ); 
        echo( "Adres szkoły: " . $adres_szkoly . "<br>" );

    ?>
    
</body>
</html>