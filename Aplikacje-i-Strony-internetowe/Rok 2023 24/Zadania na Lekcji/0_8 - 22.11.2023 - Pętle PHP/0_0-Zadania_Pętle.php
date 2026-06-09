<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="0_0-style-ZelekKsawery.css"> 
    
    <title>Zelek Ksawery - Zadania, pętle</title>
</head>
<body>

    <?php

        function zadanie_1()
        {
            // Pętla for
            $suma       = 0;

            for( $i = 0; $i <= 100; $i++ )
            {
                $suma += $i;
            }

            $srednia = $suma / 100;
            echo( "Srednia wykonana za pomocą pętli for: $srednia <br>" );

            // Pętla while
            $suma       = 0;
            $i          = 0;

            while( $i <= 100 )
            {
                $suma += $i;
                $i++;
            }

            $srednia = $suma / 100;
            echo( "Średnia wykonana za pomocą pętli while: $srednia <br>" );

            // Pętla do...while
            $suma       = 0;
            $i          = 0;

            do
            {
                $suma += $i;
                $i++;
            } while( $i <= 100 );

            $srednia = $suma / 100;
            echo( "Średnia wykonana za pomocą pętli do...while: $srednia <br>" );
        }

        function zadanie_2()
        {
            $liczba = 0;
            $suma   = 0;
            $ile    = 0;

            while( $suma <= 10000 )
            {
                $suma += $liczba;
                $liczba++;
                $ile++;
            }

            echo( "Suma: $suma <br>" );
            echo( "Na jakiej liczbie się zakończyło: $liczba <br>" );
            echo( "Ile operacji wykonano: $ile <br>" );
        }

        function zadanie_3( $liczba )
        {
            $silnia = 1;
            if( $liczba < 0 )
            {
                echo( "Nie można wykonać działania silnii na liczbie: <b>$liczba</b> <br>" );
            }
            else if( $liczba == 0 )
            {
                echo( "Silnia dla liczby <b>0</b> wynosi 1 <br>" );
            }
            else
            {
                for( $i = 1; $i <= $liczba; $i++ )
                {
                    $silnia *= $i;
                }
                echo( "Silnia dla liczby <b>$liczba</b> wynosi $silnia <br>" );
            }
            
        }

        function zadanie_4_a()
        {
            // rand( od ilu, do ilu );

            echo( "<table>" );

            for( $i = 0; $i < 10; $i++ )
            {
                if( $i == 0 || $i == 4 || $i == 6 )
                {
                    echo( "<tr>" );
                }
                else if( $i == 1 || $i == 3 || $i == 7 || $i == 9 )
                {
                    echo( "<tr>" );
                }
                else if( $i == 2 || $i == 5 || $i == 8 )
                {
                    echo( "<tr>" );
                }

                // Komórki tabeli
                for( $k = 0; $k < 10; $k++ )
                {
                    $los_numer = rand( 1, 1000 );
                    echo( "<td>" );
                    echo( "$los_numer" );
                    echo( "</td>" );
                }

                echo( "</tr>" );
            }

            echo( "</table>" );
        }

        function zadanie_4_b()
        {

            echo( "<ol>" );

                for( $i = 0; $i < 5; $i++ )
                {
                    echo( "<li>" );
                        
                        echo( "<ul>" );
    
                        for( $o = 0; $o < 5; $o++ )
                        {
                            $los_numer = rand( 1, 1000 );
                            echo( "<li>" );
    
                            echo( $los_numer );
    
                            echo( "</li>" );
                        }
                        
                        echo( "</ul>" );
                    
                    echo( "</li>" );
                }
                
            echo( "</ol>" );
            
        }

        function zadanie_5()
        {
            // Tworzę tablicę liter
            $tablica = array( "a", "b", "c", "r", "s", "u", "v", "x", "y", "z" );

            // Wypisuje tabele
            echo( "<table id='zad5'>" );

            for( $i = 0; $i < 10; $i++ )
            {
                echo( "<tr>" );

                $ile    = 1;
                
                for( $k = 0; $k < 5; $k++ )
                {
                    $litera = $tablica[ $i ];
                    $litera = str_repeat( $litera, $ile );

                    echo( "<td>" );
                    
                    echo( $litera );
                    
                    echo( "</td>" );

                    $ile *= 2;
                    
                }
                echo( "</tr>" );
            }

            echo( "</table>" );
        }


        // Wywołanie funkcji
        echo( "<h1> Zadanie 1 </h1>" );
        zadanie_1();

        echo( "<h1> Zadanie 2 </h1>" );
        zadanie_2();

        echo( "<h1> Zadanie 3 </h1>" );
        zadanie_3( 5 );
        zadanie_3( 6 );
        zadanie_3( 0 );
        zadanie_3( -3 );

        echo( "<h1> Zadanie 4 </h1>" );
        zadanie_4_a();
        zadanie_4_b();

        echo( "<h1> Zadanie 5 </h1>" );
        zadanie_5();

    ?>
    
</body>
</html>