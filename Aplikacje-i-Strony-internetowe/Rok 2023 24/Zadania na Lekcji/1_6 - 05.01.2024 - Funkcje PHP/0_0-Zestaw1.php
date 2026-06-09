<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="0_0-styles.css">

    <title>Zadanie 1</title>
</head>
<body>

    <?php

        function zadanie_1()
        {
            echo( "<h1> Zadanie 1 </h1>" );

            echo( "<table>" );

            $x = 1;
            for( $i = 0; $i <= 9; $i++ )
            {
                echo( "<tr>" );

                $wart = $x; 
                for( $j = 0; $j <= 9; $j++ )
                {
                    echo( "<td>" );

                    echo( $wart );
                    $wart = $wart + $x;

                    echo( "</td>" );
                }
                $x += 1;

                echo( "</tr>" );
            }

            echo( "</table>" );

            echo( "<br><br>" );
        }

        function zadanie_2( $a = 0, $b = 0, $c = 0 )
        {
            echo( "<h1> Zadanie 2 </h1>" );

            echo( "<h3> Wylosowane liczby: </h3>" );
            echo( "<p> <b> a = </b> $a </p>" );
            echo( "<p> <b> b = </b> $b </p>" );
            echo( "<p> <b> c = </b> $c </p>" );

            if( $a == 0 )
            {
                echo( "<p> Jest to równanie liniowe </p>" );

                if( $b == 0 )
                {
                    if( $c == 0 )
                    {
                        echo( "<p> Nieskończenie wiele rozwiązań </p>" );
                    }
                    else
                    {
                        echo( "<p> Brak rozwiązań </p>" );
                    }
                }
                else
                {
                    $x = -( $c / $b );

                    echo( "<p> x = $x </p>" );
                }
            }
            else
            {
                echo( "<p> Jest to równanie kwadratowe </p>" );

                $delta = pow( $b, 2 ) - ( 4 * $a * $c );

                if( $delta < 0 )
                {
                    echo( "<p> Brak rozwiązań </p>" );
                }
                else if( $delta == 0 )
                {
                    $x = -( $c / ( 2 * $a ) );

                    echo( "<p> x = $x </p>" );
                }
                else
                {
                    $x1 = ( -( $b ) - sqrt( $delta ) ) / ( 2 * $a );
                    $x2 = ( -( $b ) + sqrt( $delta ) ) / ( 2 * $a );

                    echo( "<p> x1 = $x1 </p>" );
                    echo( "<p> x2 = $x2 </p>" );
                }
            }

            echo( "<br><br>" );
        }

        function zadanie_3()
        {
            echo( "<h1> Zadanie 3 </h1>" );

            $wylosowany_numer = rand( 1, 8 );
            
            $dzien_tygodnia;
            switch( $wylosowany_numer )
            {
                case 1:
                {
                    $dzien_tygodnia = "Poniedziałek";
                    break;
                }
                case 2:
                {
                    $dzien_tygodnia = "Wtorek";
                    break;
                }
                case 3:
                {
                    $dzien_tygodnia = "Środa";
                    break;
                }
                case 4:
                {
                    $dzien_tygodnia = "Czwartek";
                    break;
                }
                case 5:
                {
                    $dzien_tygodnia = "Piątek";
                    break;
                }
                case 6:
                {
                    $dzien_tygodnia = "Sobota";
                    break;
                }
                case 7:
                {
                    $dzien_tygodnia = "Niedziela";
                    break;
                }
                default:
                {
                    $dzien_tygodnia = "<span class=\"error\"> Wylosowano numer, do którego nie ma przypisanego dnia tygodnia </span>";
                    break;
                }
            }

            return $dzien_tygodnia;
        }

        function zadanie_4( $a1, $b1, $c1, $a2, $b2, $c2 )
        {
            echo( "<h1> Zadanie 4 </h1>" );

            echo( "<h3> Podane wartości: </h3>" );
            
            echo( "<p> <b> a1 </b> = $a1 </p>" );
            echo( "<p> <b> b1 </b> = $b1 </p>" );
            echo( "<p> <b> c1 </b> = $c1 </p>" );
            
            echo( "<hr>" );

            echo( "<p> <b> a2 </b> = $a2 </p>" );
            echo( "<p> <b> b2 </b> = $b2 </p>" );
            echo( "<p> <b> c2 </b> = $c2 </p>" );

            echo( "<br>" );

            $w  = ( $a1 * $b2 ) - ( $a2 * $b1 );
            $w_x = ( $c1 * $b2 ) - ( $c2 * $b1 );
            $w_y = ( $a1 * $c2 ) - ( $a2 * $c1 );
            
            $x = ( $w_x / $w );
            $y = ( $w_y / $w ); 

            return array( $x, $y );
        }

        // Zadanie 1
        zadanie_1();


        // Zadanie 2
        $a = rand( -100, 100 );
        $b = rand( -100, 100 );
        $c = rand( -100, 100 );

        zadanie_2( $a, $b, $c );


        // Zadanie 3
        $wylosowany_dzien = zadanie_3();

        echo( "Wylosowano dzień tygodnia o nazwie <b> $wylosowany_dzien </b> <br><br><br>" );


        // Zadanie 4
        $result = zadanie_4( 7, 2, 1, 3, 4, 2 );

        $first_x = $result[ 0 ];
        $first_y = $result[ 1 ];

        echo( "<b> x </b> = $first_x <br>" );
        echo( "<b> y </b> = $first_y <br><br><br>" );

    ?>
    
</body>
</html>