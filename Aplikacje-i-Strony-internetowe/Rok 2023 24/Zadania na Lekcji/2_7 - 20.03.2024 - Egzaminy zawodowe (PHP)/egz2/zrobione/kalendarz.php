<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styl6.css">

    <title>Zadania na Lipiec</title>
</head>
<body>

    <!-- Baner1 -->
    <section id="baner1">

        <img src="logo1.png" alt="Lipiec">

    </section>

    <!-- Baner 2 -->
    <section id="baner2">

        <h1>TERMINARZ</h1>

        <p>najbliższe zadania:

            <!-- SKRYPT 1 -->
            <?php

                $con = mysqli_connect( "localhost", "root", "", "terminarz" );

                $query = mysqli_query( $con, "SELECT DISTINCT wpis FROM zadania WHERE dataZadania BETWEEN '2020-07-01' AND '2020-07-07' AND wpis != ''" );

                while( $i = mysqli_fetch_array( $query ) )
                {
                    echo( $i[ 'wpis' ] . "; " );
                }

            ?>

        </p>

    </section>

    <!-- Główny -->
    <section id="glowny">

        <!-- SKRYPT 2 -->
        <?php

            $query = mysqli_query( $con, "SELECT dataZadania, wpis FROM zadania WHERE miesiac LIKE 'Lipiec'" );

            while( $i = mysqli_fetch_array( $query ) )
            {
                echo( "<div class='kalendarz'>" );

                echo( "<h6>" . $i[ 'dataZadania' ] . "</h6>" );

                echo( "<p>" . $i[ 'wpis' ] . "</p>" );

                echo( "</div>" );
            }

            mysqli_close( $con );
        ?>

    </section>

    <!-- Stopka -->
    <section id="stopka">

        <a href="sierpien.html">Terminarz na sierpień</a>

        <p>Stronę wykonał: Ks. Zelek, Tymoteusz Wilczyński</p>

    </section>
    
</body>
</html>
