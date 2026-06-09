<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zelek Ksawery - 4TI</title>
</head>
<body>

    <?php

        function return_polish_month( $name )
        {
            $arr = array( 
                "January"   => "Styczeń",
                "February"  => "Luty",
                "March"     => "Marzec",
                "April"     => "Kwiecień",
                "May"       => "Maj",
                "June"      => "Czerwiec",
                "July"      => "Lipiec",
                "August"    => "Sierpień",
                "September" => "Wrzesień",
                "October"   => "Październik",
                "November"  => "Listopad",
                "December"  => "Grudzień"
            );

            $returned_value = "";

            foreach( $arr as $en => $pl )
            {
                if( $name == $en )
                {
                    $returned_value = $pl;
                } 
            }

            return $returned_value;
        }

        function return_polish_weekday( $name )
        {
            $arr = array(
                "Monday"    => "Poniedziałek",
                "Tuesday"   => "Wtorek",
                "Wednesday" => "Środa",
                "Thursday"  => "Czwartek",
                "Friday"    => "Piątek",
                "Saturday"  => "Sobota",
                "Sunday"    => "Sunday"
            );

            $returned_value = "";

            foreach( $arr as $en => $pl )
            {
                if( $name == $en )
                {
                    $returned_value = $pl;
                }
            }

            return $returned_value;
        }

        function how_many_days_to_end_of_the_month( $day, $month, $year )
        {
            $rok_przestępny = false;

            if( $year % 4 == 0 )
            {
                $rok_przest = true;
            }
            
            if( $rok_przest )
            {
                $luty = 29;
            }
            else
            {
                $luty = 28;
            }

            $how_many_days = array(
                31, $luty, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31
            );

            $miesiac = $how_many_days[ ( $month - 1 ) ];

            $wynik = $miesiac - $day;

            return $wynik;
        }

        function how_many_time_until( $time )
        {
            $sec = $time[ "yday" ];
            echo( $sec );
        }

        // -----------------------------------

        echo( "<h1>Zadanie </h1>" );

        $data = getdate();
        $egzamin = mktime( 9, 0, 0, 12, 06, 2024 );


    ?>

    <div>

        <!-- 1 -->
        <p>
            
            Wszedłeś na stronę o godz. 
            <?php
                echo( " " . $data[ "hours" ] . ":" . $data[ "minutes" ] . ":" . $data[ "seconds" ] );
            ?>
        
        </p>

        <!-- 2 -->
        <p>

            <?php

                echo( return_polish_weekday( $data[ "weekday" ] ) . ", " . $data[ "mday" ] . " " . return_polish_month( $data[ "month" ] ) . " " . $data[ "year" ] . "r." );

            ?>

        </p>

        <!-- 3 -->
        <p>

            Jest to 
            <?php
                echo( " " . $data[ "yday" ] + 1 . ". dzień roku." );
            ?>

        </p>

        <!-- 4 -->
        <p>

            Do końca miesiąca mamy
            <?php

                echo( " " . how_many_days_to_end_of_the_month( $egzamin[ "mday" ], $egzamin[ "mon" ], $egzamin[ "year"] ) );

            ?>
        
        </p>

        <!-- 5 -->
        <p>

            Do egzaminu zostało:
            <?php

                echo( " " . how_many_time_until( $egzamin ) );

            ?>

        </p>

    </div>

</body>
</html>