<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styl.css">

    <title>Lista przyjaciół</title>
</head>
<body>

    <!-- BANER -->
    <section id="baner">

        <h1>Portal Społecznościowy - moje konto</h1>

    </section>

    <!-- GŁÓWNY -->
    <section id="glowny">

        <h2>Moje zainteresowania</h2>

        <ul>

            <li>muzyka</li>

            <li>film</li>

            <li>komputery</li>

        </ul>

        <h2>Moi znajomi</h2>

        <!-- SKRYPT -->
        <?php

            $con = mysqli_connect( "localhost", "root", "", "dane" );

            $kwerenda = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE (Hobby_id = 1) OR (Hobby_id = 2) OR (Hobby_id = 6)";
            $query = mysqli_query( $con, $kwerenda );

            while( $i = mysqli_fetch_array( $query ) )
            {
                echo( "<div class='zdjecie'>" . "<img src='" . $i[ 'zdjecie' ] . "' alt='przyjaciel'>" . "</div>" );

                echo( "<div class='opis'>" . "<h3>" . $i[ 'imie' ] . " " . $i[ 'nazwisko' ] . "</h3>" . "<p>" . "Ostatni wpis: " . $i[ 'opis' ] . "</p>" . "</div>" );

                echo( "<div class='linia'>" . "<hr>" . "</div>" );

            }

            mysqli_close( $con );

        ?>

    </section>
    
    <!-- STOPKA 1 -->
    <section id="stopka1">

        Stronę wykonał: Ksawery Zelek

    </section>

    <!-- STOPKA 2 -->
    <section id="stopka2">

        <a href="mailto:ja@portal.pl">napisz do mnie</a>

    </section>
    
</body>
</html>