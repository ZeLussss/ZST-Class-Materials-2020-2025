<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styles.css">
    
    <title>Strona</title>
</head>
<body>
    
    <div id="all">

        <div id="logo">

            <img src="img/logo.jpg" alt="Logo strony" />

        </div>

        <div id="menu">

            <?php include( "php/zad6.php" ); ?>

        </div>

        <div id="banner">

            <h2> Zadanie nr 7 </h2>

            <div id="photos">

                <?php include( "php/zad7.php" ); ?>

            </div>

        </div>

        <div id="srodek">

            <p>
                W PHP nie deklarujemy wcześniej tablic, podobnie nie podajemy rozmiaru tablic podczas jej tworzenia.
                Każdy element tablicy składa się z dwóch części: klucza oraz wartości. Klucz służy do pobierania z tablicy skojarzonej z nim wartości.
                Istnieją dwa rodzaje kluczy: numeryczne oraz asocjacyjne
            </p>

            <!-- Jeden -->
            <h2> 1. Tablice indeksowane numerycznie </h2>
            <p>
                W tego typu tablicach, jak sama nazwa wskazuje, indeskami są liczby.
            </p>

            <!-- Dwa -->
            <h2> 2. Tablice dwuwymiarowe </h2>
            <p>
                Tablicę dwuwymiarową definiujemy jako tablicę jednowymiarową, której elementami są tablice jednowymiarowe.
            </p>

            <!-- Trzy -->
            <h2> 3. Tablice asocjacyjne </h2>
            <p>
                Indeksami tablicy mogą być dowolne literały.
            </p>

            <img id="tablica" src="img/tablica.jpg" alt="tablica" />

        </div>
        
        <div id="stopka">
            
            Wszystkie prawa zastrzeżone

        </div>
        
    </div>
    

</body>
</html>