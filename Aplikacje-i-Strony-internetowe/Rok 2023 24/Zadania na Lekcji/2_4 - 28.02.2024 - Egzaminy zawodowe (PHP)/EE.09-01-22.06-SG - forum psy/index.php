<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styl.css">
    
    <title>Forum o psach</title>
</head>
<body>

    <!-- Baner -->
    <section id="baner">

        <h1>Forum miłośników psów</h1>

    </section>

    <!-- Lewy -->
    <section id="lewy">

        <img src="Avatar.png" alt="Użytkownik forum">

        <!-- SKRYPT 1 -->
        <?php

            $con = mysqli_connect( "localhost", "root", "", "forumpsy" );
            
            $zapytanie = "SELECT konta.nick, konta.postow, pytania.pytanie FROM konta INNER JOIN pytania ON pytania.konta_id = konta.id WHERE pytania.id = 1";
            $zap = mysqli_query( $con, $zapytanie );
            $ile = mysqli_num_rows( $zap );

            $wynik = $zap->fetch_assoc();

            echo( "<h4> Użytkownik: " . $wynik[ 'nick' ] . "</h4>" );
            echo( "<p>" . $wynik[ 'postow' ] . "</p>" );
            echo( "<p>" . $wynik[ 'pytanie' ] . "</p>" );

            mysqli_close( $con );

        ?>

        <video src="video.mp4" loop controls></video>

    </section>

    <!-- Prawy -->
    <section id="prawy">

        <form action="index.php" method="post">

            <textarea name="pole" id="pole" cols="40" rows="4"></textarea>

            <br>
            <button type="submit">Dodaj odpowiedź</button>   

        </form>
        <!-- SKRYPT 2 -->
        <?php

            if( isset( $_POST[ 'pole' ] ) && !empty( $_POST[ 'pole' ] ) )
            {
                $con = mysqli_connect( "localhost", "root", "", "forumpsy" );

                $zapytanie = "INSERT INTO odpowiedzi VALUES ( NULL, 1, 5, '" . $_POST[ 'pole' ] . "' )";
                mysqli_connect( $con, $zapytanie );

                mysqli_close( $con );
            }

        ?>

        <h2>Odpowiedź na pytanie</h2>

        <!-- SKRYPT 3 -->
        <ol>

            <?php

                $con = mysqli_connect( "localhost", "root", "", "forumpsy" );

                $kw3 = mysqli_query( $con, "SELECT odpowiedzi.id, odpowiedzi.odpowiedz, konta.nick FROM odpowiedzi INNER JOIN konta ON konta.id = odpowiedzi.konta_id WHERE Pytania_id = 1")

                while( $row = mysqli_fetch_assoc( $kw3 ) )
                {
                    echo( "<li>" . $row[ 'odpowiedz' ] . "<i>" . $row[ 'nick' ] . "</i>" . "</li>" );
                }

                mysqli_close( $con );

            ?>

        </ol>

    </section>

    <!-- Stopka -->
    <section id="stopka">

        Autor: 00000000000, <a href="http://mojestrony.pl/" target="_blank">Zobacz nasze realizacje</a>

    </section>
    
</body>
</html>