<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styl8.css">

    <title>Nasz sklep komputerowy</title>
</head>
<body>

    <section id="menu">

        <a href="index.php">Główna</a>
        <a href="procesory.html">Procesory</a>
        <a href="ram.html">RAM</a>
        <a href="grafika.html">Grafika</a>

    </section>

    <section id="logo">

        <h2>Podzespoły komputerowe</h2>

    </section>

    <section id="glowny">

        <h1>Dzisiejsze promocje</h1>

        <table>

            <tr>

                <th>NUMER</th>

                <th>NAZWA PODZESPOŁU</th>

                <th>OPIS</th>

                <th>CENA</th>

            </tr>

            <!-- SKRYPT -->
            <?php

                $con = mysqli_connect( "localhost", "root", "", "sklep" );

                $zap = mysqli_query( $con, "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000" );

                while( $i = mysqli_fetch_array( $zap ) )
                {
                    echo( "<tr>" );

                    echo( "<td>" . $i[ 0 ] . "</td>" );
                    echo( "<td>" . $i[ 1 ] . "</td>" );
                    echo( "<td>" . $i[ 2 ] . "</td>" );
                    echo( "<td>" . $i[ 3 ] . "</td>" );

                    echo( "</tr>" );
                }

                mysqli_close( $con ); 

            ?>

        </table>

    </section>

    <section id="stopka1">

        <img src="scalak.jpg" alt="promocje na procesory">

    </section>

    <section id="stopka2">

        <h4>Nasz Sklep Komputerowy</h4>

        <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>

    </section>

    <section id="stopka3">

        <p>zadzwoń: 601 602 603</p>

    </section>

    <section id="stopka4">

        <p>Stronę wykonał: Ksawery Zelek</p>

    </section>
    
</body>
</html>