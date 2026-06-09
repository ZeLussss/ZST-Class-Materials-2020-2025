<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">

    <title>Twoje BMI</title>
</head>
<body>

    <?php

        $con = mysqli_connect( 'localhost', 'root', '', 'egzamin' );

    ?>

    <!-- Logo -->
    <section id="logo">

        <img src="wzor.png" alt="wzór BMI">

    </section>

    <!-- Baner -->
    <section id="baner">

        <h1>Oblicz swoje BMI</h1>

    </section>

    <!-- Główny -->
    <section id="glowny">
    
        <table>

            <!-- 1 wiersz -->
            <tr>

                <th>Interpretacja BMI</th>

                <th>Wartość minimalna</th>

                <th>Wartość maksymalna</th>

            </tr>

            <!-- Skrypt 1 -->
            <?php

                $kw1 = mysqli_query( $con, "SELECT informacja, wart_min, wart_max FROM bmi" );
                $ile = mysqli_num_rows( $kw1 );

                for( $i = 0; $i <= $ile; $i++ )
                {
                    while( $wyn = mysqli_fetch_row( $kw1 ) )
                    {
                        echo( "<tr>" );
                        for( $j = 0; $j <= 2; $j++ )
                        {
                            echo( "<td>" );
                            echo( $wyn[ $j ] );
                            echo( "</td>" );
                        }
                        echo( "</tr>" );
                    }
                }

            ?>

        </table>

    </section>

    <!-- Lewy -->
    <section id="lewy">

        <h2>Podaj wagę i wzrost</h2>

        <form action="bmi.php" method="post">

            <label for="waga">Waga:</label>
            <input type="number" name="waga"> <br>

            <label for="wzrost">Wzrost w cm:</label>
            <input type="number" name="wzrost"> <br>

            <input type="submit" value="Oblicz i zapamiętaj wynik"> <br><br>

        </form>

        <!-- Skrypt 2 -->
        <?php

            $BMI    = NULL;
            $waga   = NULL;
            $wzrost = NULL;

            if( !empty( $_POST['waga'] ) || !empty( $_POST[ 'wzrost' ] ) )
            {
                $waga   = $_POST[ 'waga' ];
                $wzrost = $_POST[ 'wzrost' ];
            }

            if( $waga != NULL && $wzrost != NULL )
            {
                $BMI = ( $waga ) / ( pow( $wzrost, 2 ) );
                $BMI *= 10000;
            
                echo( "Twoja waga: $waga; Twój wzrost: $wzrost <br>" );
                echo( "BMI wynosi: $BMI" );

                $BMI = round( $BMI );
    
                if( $BMI >= 0 && $BMI <= 18 )
                {
                    $interpretacja = 1;
                }
                else if( $BMI >= 19 && $BMI <= 25 )
                {
                    $interpretacja = 2;
                }
                else if( $BMI >= 26 && $BMI <= 30 )
                {
                    $interpretacja = 3;
                }
                else if( $BMI >= 31 && $BMI <= 100 )
                {
                    $interpretacja = 4;
                }

                $date = date( "Y-m-d" );
    
                $kwerenda_zmieniona = "INSERT INTO wynik( bmi_id, data_pomiaru, wynik ) VALUES ( $interpretacja, '$date', $BMI )";
                $kw2 = mysqli_query( $con, $kwerenda_zmieniona );
            }


        ?>

    </section>

    <!-- Prawy -->
    <section id="prawy">

        <img src="rys1.png" alt="ćwiczenia">

    </section>

    <!-- Stopka -->
    <section id="stopka">

        Tekst: 00000000000 <a href="PESEL-KsZelek/kwerendy.txt">Zobacz kwerendy</a>

    </section>

    <?php

        mysqli_close( $con );

    ?>
    
</body>
</html>