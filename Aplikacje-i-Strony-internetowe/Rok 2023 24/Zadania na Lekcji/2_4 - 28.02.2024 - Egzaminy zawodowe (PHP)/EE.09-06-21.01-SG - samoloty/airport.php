<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styl6.css">

    <title>Odloty samolotów</title>
</head>
<body>

    <!-- Baner 1 -->
    <section class="baner">

        <h2>Odloty z lotniska</h2>

    </section>

    <!-- Baner 2 -->
    <section class="baner">

        <img src="zad6.png" alt="logotyp">

    </section>

    <!-- Główny -->
    <section id="glowny">

        <h4>tabela odlotów</h4>

        <table>

            <tr>

                <th>lp.</th>

                <th>Numer rejsu</th>

                <th>Czas</th>

                <th>Kierunek</th>

                <th>Status</th>

            </tr>

            <!-- SKRYPT 1 -->
            <?php

                $con = mysqli_connect( 'localhost', 'root', '', 'egzamin' );

                $zap1 = mysqli_query( $con, "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC" );
                $ile = mysqli_num_rows( $zap1 );
                
                for( $i = 0; $i <= $ile - 1; $i++ )
                {
                    $wiersz = $zap1->fetch_assoc();

                    echo( "<tr>" );

                    echo( "<td>" . $wiersz[ 'id' ] . "</td>" );
                    echo( "<td>" . $wiersz[ 'nr_rejsu' ] . "</td>" );
                    echo( "<td>" . $wiersz[ 'czas' ] . "</td>" );
                    echo( "<td>" . $wiersz[ 'kierunek' ] . "</td>" );
                    echo( "<td>" . $wiersz[ 'status_lotu' ] . "</td>" );
                    
                    echo( "</tr>" );
                }

                mysqli_close( $con );
            ?>

        </table>

    </section>

    <!-- Stopka 1 -->
    <section id="stopka1">

        <a href="Zelek/kw1.png" target="_blank">Pobierz obraz</a>

    </section>

    <!-- Stopka 2 -->
    <section id="stopka2">

        <!-- SKRYPT 2 -->
        <?php

            if( !isset( $_COOKIE[ 'wizyta' ] ) )
            {
                setcookie( "wizyta", time(), time() + 60 * 60 );
                echo( "<p><i> Dzień dobry! Sprawdź regulamin naszej strony </i></p>" );
            }
            else
            {
                echo( "<p><b> Miło nam, że nas znowu odwiedziłeś </b></p>" );
            }

        ?>

    </section>

    <!-- Stopka 3 -->
    <section id="stopka3">

        Autor: 00000000000

    </section>
    
</body>
</html>