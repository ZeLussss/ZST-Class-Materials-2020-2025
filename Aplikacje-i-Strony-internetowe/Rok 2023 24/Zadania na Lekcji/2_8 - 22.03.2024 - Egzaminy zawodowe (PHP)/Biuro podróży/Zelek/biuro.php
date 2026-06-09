<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styl9.css">

    <title>Poznaj Europę</title>
</head>
<body>

    <!-- BANER -->
    <section id="baner">

        <h1>BIURO PODRÓŻY</h1>

    </section>

    <!-- LEWY -->
    <section id="lewy">

        <h2>Promocje</h2>

        <table>

            <tr>
                <td>Warszawa</td>

                <td>od 600 zł</td>
            </tr>

            <tr>
                <td>Wenecja</td>

                <td>od 1200 zł</td>
            </tr>
            
            <tr>
                <td>Paryż</td>

                <td>od 1200 zł</td>
            </tr>

        </table>

    </section>

    <!-- SRODKOWY -->
    <section id="srodkowy">

        <h2>W tym roku jedziemy do...</h2>

        <!-- SKRYPT 1 -->
        <?php

            $con = mysqli_connect( "localhost", "root", "", "podroze" );

            $kwerenda = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis";
            $query = mysqli_query( $con, $kwerenda );

            while( $i = mysqli_fetch_array( $query ) )
            {
                echo( "<img src='" . $i[ 'nazwaPliku' ] . "' alt='" . $i[ 'podpis' ] . "'>" );
            }

        ?>

    </section>

    <!-- PRAWY -->
    <section id="prawy">

        <h2>Kontakt</h2>

        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>

        <p>telefon: 444555666</p>

    </section>

    <!-- DANE -->
    <section id="dane">

        <h3>W poprzednich latach byliśmy...</h3>

        <ol>

            <!-- SKRYPT 2 -->
            <?php

                $kwerenda = "SELECT cel, dataWyjazdu FROM wycieczki WHERE dostepna = 0";
                $query = mysqli_query( $con, $kwerenda );

                while( $i = mysqli_fetch_array( $query ) ) 
                {
                    echo( "<li>" . "Dnia " . $i[ 'dataWyjazdu' ] . " " . "pojechaliśmy do " . $i[ 'cel' ] . "</li>" );
                }

                mysqli_close( $con );

            ?>

        </ol>

    </section>

    <!-- STOPKA -->
    <section id="stopka">

        <p>Stronę wykonał: Ksawery Zelek</p>

    </section>
    
</body>
</html>