<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styl3.css">

    <title>Video On Demand</title>
</head>
<body>

    <section id="baner1">

        <h1>Internetowa wypożyczalnia filmów</h1>

    </section>

    <section id="baner2">

        <table>

            <tr>

                <td>Kryminał</td>
                <td>Horror</td>
                <td>Przygodowy</td>

            </tr>

            <tr>

                <td>20</td>
                <td>30</td>
                <td>20</td>

            </tr>

        </table>

    </section>

    <section id="polecamy">

        <h3>Polecamy</h3>

        <!-- Skrypt 1 -->
        <?php

            $con = mysqli_connect( "localhost", "root", "", "dane3" );
            
            $zapytanie1 = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id = 18 OR id = 22 OR id = 23 OR id = 25";

            $query = mysqli_query( $con, $zapytanie1 );
            
            while( $i = mysqli_fetch_array( $query ) )
            {
                echo( "<div class=\"film\">" );

                echo( "<h4>" . $i[ "id" ] . " " . $i[ "nazwa" ] . "</h4>" );

                $nazwa_obrazu = $i[ "zdjecie" ];
                echo( "<img src=\"$nazwa_obrazu\" alt=\"film\">" );
                
                echo( "<p>" . $i[ "opis" ] . "</p>" );

                echo( "</div>" );
            }

        ?>

    </section>
    
    <section id="Filmy_fantastyczne">

        <h3>Filmy fantastyczne</h3>

        <!-- Skrypt 2 -->
        <?php

            $zapytanie2 = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12";

            $query = mysqli_query( $con, $zapytanie2 );

            while( $i = mysqli_fetch_array( $query ) )
            {
                echo( "<div class=\"film\">" );

                echo( "<h4>" . $i[ "id" ] . " " . $i[ "nazwa" ] . "</h4>" );

                $nazwa_obrazu = $i[ "zdjecie" ];
                echo( "<img src=\"$nazwa_obrazu\" alt=\"film\">" );
                
                echo( "<p>" . $i[ "opis" ] . "</p>" );

                echo( "</div>" );
            }

        ?>

    </section>

    <section id="stopka">

        <form action="video.php" method="post">

            <label for="num_filmu">Usuń film nr.: </label>
            <input type="numer" name="num_filmu">

            <button type="submit"> Usuń film </button>

        </form>
        
        <!-- Skrypt 3 -->
        <?php

            if( !empty( $_POST[ "num_filmu" ] ) )
            {
                $numer_filmu = $_POST[ "num_filmu" ];
                $zapytanie3 = "DELETE FROM produkty WHERE id = " . $numer_filmu;
                $query = mysqli_query( $con, $zapytanie3 );
            }

        ?>

        <p>Stronę wykonał: <a href="mailto:ja@poczta.com"> Zelek Ksawery </a> </p>

        <?php

            mysqli_close( $con );

        ?>

    </section>

</body>
</html>