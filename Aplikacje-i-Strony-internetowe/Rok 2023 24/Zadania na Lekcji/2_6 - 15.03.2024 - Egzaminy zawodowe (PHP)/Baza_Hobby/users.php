<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styl4.css">
    
    <title>Panel administratora</title>
</head>
<body>

    <!-- BANER -->
    <section id="baner">

        <h3>Portal Społecznościowy - panel administratora</h3>

    </section>

    <!-- LEWY -->
    <section id="lewy">

        <h4>Użytkownicy</h4>

        <!-- SKRYPT 1 -->
        <?php

            $con = mysqli_connect( "localhost", "root", '', "dane4" );

            $str_zapytanie = "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30";

            $query = mysqli_query( $con, $str_zapytanie );

            $actualYear = date( 'Y' );
            
            while( $i = mysqli_fetch_array( $query ) )
            {
                echo( $i[ 'id' ] . ". " . $i[ 'imie' ] . " " . $i[ 'nazwisko' ] . ", " . ( $actualYear - $i[ 'rok_urodzenia' ] ) . " lat<br>" );
            }

        ?>

        <a href="settings.html">Inne ustawienia</a>

    </section>

    <!-- PRAWY -->
    <section id="prawy">

        <h4>Podaj id użytkowanika</h4>

        <form action="users.php" method="post">

            <input type="number" name="formID">

            <button type="submit">ZOBACZ</button>

        </form>

        <hr>

        <!-- SKRYPT 2 -->
        <?php

            
            if( !empty( $_POST[ 'formID' ] ) )
            {
                $id = $_POST[ 'formID' ];

                $str_zapytanie2 = "SELECT imie, nazwisko, rok_urodzenia, opis, zdjecie, h.nazwa FROM osoby o INNER JOIN hobby h ON o.Hobby_id = h.id WHERE o.id = ";
                $str_zapytanie2 .= $id;
                    
                $query = mysqli_query( $con, $str_zapytanie2 );

                while( $i = mysqli_fetch_array( $query ) )
                {
                    echo( "<h2>" . $id . ". " . $i[ 'imie' ] . " " . $i[ 'nazwisko' ] . "</h2>" );

                    $sciezka_photo = $i[ 'zdjecie' ];

                    echo( "<img src=\"" . $sciezka_photo . "\">" );

                    echo( "<p>" . "Rok urodzenia: " . $i[ 'rok_urodzenia' ] . "</p>" );

                    echo( "<p>" . "Opis: " . $i[ 'opis' ] . "</p>" );

                    echo( "<p>" . "Hobby: " . $i[ 'nazwa' ] . "</p>" );
                }
            }
        
            mysqli_close( $con );

        ?>

    </section>

    <!-- STOPKA -->
    <section id="stopka">

        <p>Stronę wykonał: ZELEK KSAWERY</p>

    </section>
    
</body>
</html>