<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styl1.css">

    <title>Portal ogłoszeniowy</title>
</head>
<body>

    <section id="baner">

        <h1>Portal Ogłoszeniowy</h1>

    </section>

    <section id="lewy">

        <h2>Kategorie ogłoszeń</h2>

        <ol>

            <li>Książki</li>
            <li>Muzyka</li>
            <li>Filmy</li>
        
        </ol>

        <img src="ksiazki.jpg" alt="Kupię / sprzedam książkę">

        <table>

            <tr>

                <td>Liczba ogłoszeń</td>
                <td>Cena ogłoszenia</td>
                <td>Bonus</td>

            </tr>

            <tr>

                <td>1 - 10</td>
                <td>1 PLN</td>
                <td rowspan='3'>Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>

            </tr>

            <tr>

                <td>11 - 50</td>
                <td>0,80 PLN</td>

            </tr>

            <tr>

                <td>51 i więcej</td>
                <td>0,60 PLN</td>

            </tr>

        </table>

    </section>

    <section id="prawy">

        <h2>Ogłoszenia kategorii książki</h2>

        <!-- SKRYPT -->
        <?php

            $con = mysqli_connect( 'localhost', 'root', '', 'ogloszenia' );

            $zap1 = mysqli_query( $con, 'SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria = 1' );

            while( $i = mysqli_fetch_array( $zap1 ) )
            {
                echo( "<h3>" . $i[ 'id' ] . ". " . $i[ 'tytul' ] . "</h3>" );
                echo( "<p>" . $i[ 'tresc' ] . "</p>" );

                $id = $i[ 'id' ];
                $tw_kwe2 = "SELECT u.telefon FROM uzytkownik u INNER JOIN ogloszenie o ON u.id = o.uzytkownik_id WHERE o.id = $id";
                $zap2 = mysqli_query( $con, $tw_kwe2 );
                $i2 = mysqli_fetch_array( $zap2 );

                echo( "<p>telefon kontaktowy:" . $i2[ 0 ] . "</p>" );
            }

            mysqli_close( $con );
        ?>

    </section>

    <section id="stopka">

        Portal ogłoszeniowy opracował: Ksawery Zelek

    </section>
    
</body>
</html>