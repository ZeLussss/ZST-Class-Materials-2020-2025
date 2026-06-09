<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styles.css">
    
    <title>Zelek Ksawery</title>
</head>
<body>

    <?php

        // Funkcje
        function zadanie_1()
        {
            $tab = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20 );

            echo( "<h4> print_r </h4>" );
            print_r( $tab );

            echo( "<h4> pętla for </h4>" );
            for( $i = 0; $i < 20; $i++ )
            {
                echo( "indeks " . $i . ": " . $tab[$i] . "<br>" );
            }

            echo( "<h4> pętla for each </h4>" );
            foreach( $tab as $index => $wartosc )
            {
                echo( "indeks: " . $index . ": " . $wartosc . "<br>" );
            }
        }

        function zadanie_2()
        {
            $size_of_tab = rand( 10, 30 );
            $tab = array();

            for( $i = 0; $i < $size_of_tab; $i++ )
            {
                $tab[] = rand( 0, 50 );
            }

            // Podpunkt A
            echo( "<h4> Podpunkt A (wyświetlenie zawartości) </h4>" );
            print_r( $tab );


            // Podpunkt B
            echo( "<h4> Podpunkt B (obliczanie ilości liczb parzystych oraz nieparzystych) </h4>" );
            $odd    = 0;        // Nieparzyste
            $even   = 0;        // Parzyste

            for( $i = 0; $i < sizeof( $tab ); $i++ )
            {
                if( $tab[ $i ] % 2 )
                {
                    $odd += 1;
                }
                else
                {
                    $even += 1;
                }
            }

            echo( "<b>Ilość liczb parzystych: </b> $even <br>" );
            echo( "<b>Ilość liczb nieparzystych: </b> $odd <br>" );


            // Podpunkt C
            echo( "<h4> Podpunkt C (ile razy występuje dana liczba?) </h4>" );
            $tab_w_amount_of_num = array();
            for( $i = 0; $i <= 50; $i++ )
            {
                $tab_w_amount_of_num[ "$i" ] = 0;
            }

            for( $i = 0; $i < sizeof( $tab ); $i++ )
            {
                $num = $tab[ $i ];
                $tab_w_amount_of_num[ "$num" ] = $tab_w_amount_of_num[ "$num" ] + 1;
            }

            for( $i = 0; $i <= 50; $i++ )
            {
                if( $tab_w_amount_of_num[ "$i" ] != 0 )
                {
                    echo( "Numer $i występuje <b>" . $tab_w_amount_of_num[ "$i" ] . "</b> ilość razy <br>" );
                }
            }

            
            // Podpunkt D
            echo( "<h4> Podpunkt D (Posortowanie rosnąco) </h4>" );

            sort( $tab );
            print_r( $tab );


            // Podpunkt E
            echo( "<h4> Podpunkt E (Posortowanie malejąco) </h4>" );

            rsort( $tab );
            print_r( $tab );
        }

        function zadanie_3()
        {
            $imiona = array(
                "Albert",
                "Henri",
                "Niels",
                "Max",
                "Hendrik",
                "Pola",         
                "Jagoda",       
                "Izabela",      
                "Dominika",     
                "Joanna"        
            );

            $nazwiska = array(
                "Einstein",
                "Becquuerel",
                "Bohr",
                "Planck",
                "Lorentz",
                "Baran",
                "Sikora",
                "Szewczyk",
                "Jaworska",
                "Pawlak"
            );

            echo( "<table>" );

            {   // Nagłówek (Imie, Nazwisko) -> tr -> th
                echo( "<tr>" );
    
                echo( "<th>" );
                echo( "Imię" );
                echo( "</th>" );
    
                echo( "<th>" );
                echo( "Nazwisko" );
                echo( "</th>" );
    
                echo( "</tr>" );
            }

            for( $i = 0; $i < 10; $i++ )
            {
                echo( "<tr>" );

                echo( "<td>" );
                echo( $imiona[ $i ] );
                echo( "</td>" );

                echo( "<td>" );
                echo( $nazwiska[ $i ] );
                echo( "</td>" );

                echo( "</tr>" );
            }


            echo( "</table>" );
        }

        function zadanie_5()
        {
            $associative_array = array(
                "Nowak" => "Jakub",
                "Kowalski" => "Kacper",
                "Wiśniewski" => "Szymon",
                "Wójcik" => "Mateusz",
                "Kowalczyk" => "Filip",
                "Kamiński" => "Michał",
                "Lewandowski" => "Bartosz",
                "Zieliński" => "Wiktor",
                "Woźniak" => "Piotr",
                "Szymański" => "Dawid",
                "Dąbrowski" => "Adam",
                "Kozłowski" => "Maciej",
                "Jankowski" => "Jan",
                "Mazur" => "Igor",
                "Kwiatkowski" => "Mikołaj",
                "Wojciechowski" => "Patryk",
                "Krawczyk" => "Paweł",
                "Kaczmarek" => "Dominik",
                "Piotrowski" => "Oskar",
                "Grabowski" => "Antoni",
                "Zając" => "Wojciech",
                "Pawłowski" => "Kamil",
                "Król" => "Aleksander",
                "Michalski" => "Krzysztof",
                "Wróbel" => "Oliwier",
                "Wieczorek" => "Marcel",
                "Jabłoński" => "Karol",
                "Nowakowski" => "Franciszek",
                "Majewski" => "Tomasz",
                "Olszewski" => "Maksymilian",
                "Stępień" => "Hubert",
                "Dudek" => "Bartłomiej",
                "Jaworski" => "Adrian",
                "Malinowski" => "Alan",
                "Adamczyk" => "Sebastian",
                "Pawlak" => "Miłosz",
                "Górski" => "Krystian",
                "Nowicki" => "Łukasz",
                "Sikora" => "Nikodem",
                "Witkowski" => "Gabriel",
                "Walczak" => "Marcin",
                "Rutkowski" => "Stanisław",
                "Baran" => "Damian",
                "Michalak" => "Konrad",
                "Szewczyk" => "Daniel",
                "Ostrowski" => "Fabian",
                "Tomaszewski" => "Błaej",
                "Zalewski" => "Rafał",
                "Wróblewski" => "Tymoteusz",
                "Pietrzak" => "Ksawery",
                "Nowak" => "Julia",
                "Kowalska" => "Maja",
                "Wiśniewska" => "Zuzanna",
                "Wójcik" => "Wiktoria",
                "Kowalczyk" => "Oliwia",
                "Kamińska" => "Amelia",
                "Lewandowska" => "Natalia",
                "Zielińska" => "Aleksandra",
                "Szymańska" => "Lena",
                "Woźniak" => "Nikola",
                "Dąbrowska" => "Zofia",
                "Kozłowska" => "MARTYNA",
                "Jankowska" => "Weronika",
                "Mazur" => "Anna",
                "Wojciechowska" => "Emilia",
                "Kwiatkowska" => "Magdalena",
                "Krawczyk" => "Hanna",
                "Piotrowska" => "Karolina",
                "Kaczmarek" => "Gabriela",
                "Grabowska" => "Alicja",
                "Pawłowska" => "Maria",
                "Michalska" => "Nadia",
                "Zając" => "Kinga",
                "Król" => "Paulina",
                "Wieczorek" => "Milena",
                "Jabłońska" => "Patrycja",
                "Nowakowska" => "Klaudia",
                "Wróbel" => "Agata",
                "Majewska" => "Marta",
                "Olszewska" => "Laura",
                "Jaworska" => "Dominika",
                "Adamczyk" => "Katarzyna",
                "Stępień" => "Antonina",
                "Malinowska" => "Małgorzata",
                "Nowicka" => "Michalina",
                "Górska" => "Daria",
                "Dudek" => "Roksana",
                "Witkowska" => "Kornelia",
                "Pawlak" => "Joanna",
                "Rutkowska" => "Iga",
                "Walczak" => "Kamila",
                "Sikora" => "Jagoda",
                "Michalak" => "Sandra",
                "Ostrowska" => "Nina",
                "Szewczyk" => "Izabela",
                "Baran" => "Pola",
                "Tomaszewska" => "Barbara",
                "Pietrzak" => "Malwina",
                "Wróblewska" => "Justyna",
                "Zalewska" => "Blanka"
            );

            // Podpunkt A
            echo( "<h4> Podpunkt A (Wyświetlenie imion i nazwisk) </h4>" );

            foreach( $associative_array as $nazwisko => $imie )
            {
                echo( $imie . " | " . $nazwisko . "<br>" );
            }


            // Podpunkt B
            echo( "<h4> Podpunkt B (Sortowanie rosnąco i malejąco nazwisk) </h4>" );

            arsort( $associative_array );

            foreach( $associative_array as $nazwisko => $imie )
            {
                echo( $imie . " | " . $nazwisko . "<br>" );
            }


            // Podpunkt C
            echo( "<h4> Podpunkt C (Posortowanie rosnąco i majeląco)</h4>" );

            echo( "<b><p>Nazwiska rosnąco</p></b>" );
            ksort( $associative_array );

            foreach( $associative_array as $nazwisko => $imie )
            {
                echo( $imie . " | " . $nazwisko . "<br>" );
            }

            echo( "<b><p>Nazwiska malejąco</p></b>" );
            krsort( $associative_array );

            foreach( $associative_array as $nazwisko => $imie )
            {
                echo( $imie . " | " . $nazwisko . "<br>" );
            }


            // Podpunkt D
            echo( "<h4> Podpunkt D (Imiona Gabriel, Adrian, Beata)</h4>" );

            $czy_jest_G = in_array( "Gabriela", $associative_array );
            $czy_jest_A = in_array( "Adrian", $associative_array );
            $czy_jest_B = in_array( "Beata", $associative_array );

            if( $czy_jest_G )
            {
                echo( "Gabriela znajduje się w tablicy<br>" );
            }
            else
            {
                echo( "Gabriela NIE znajduje się w tablicy<br>" );
            }

            if( $czy_jest_A )
            {
                echo( "Adrian znajduje się w tablicy<br>" );
            }
            else
            {
                echo( "Adrian NIE znajduje się w tablicy<br>" );
            }

            if( $czy_jest_B )
            {
                echo( "Beata znajduje się w tablicy<br>" );
            }
            else
            {
                echo( "Beata NIE znajduje się w tablicy<br>" );
            }
        }

        function zadanie_6()
        {
            include( "php/zad6.php" );
        }

        function zadanie_7()
        {
            for( $i = 1; $i < 30; $i++ )
            {
                $rys[ $i ] = "banner/img" . $i . ".jpg";
            }

            shuffle( $rys );

            for( $i = 0; $i < 3; $i++ )
            {
                echo( "<img src=\"" . $rys[ $i ] . "\">" );
            }
        }

        function zadanie_8()
        {
            // Tablica jednowymiarowa
            $tab_1D = array();

            for( $i = 0; $i < 200; $i++ )
            {
                $tab_1D[ $i ] = rand( 0, 999 );
            }


            // Tablica dwuwymiarowa
            $tab_2D = array( array() );

            for( $i = 0; $i < 10; $i++ )
            {
                for( $j = 0; $j < 20; $j++ )
                {
                    $tab_2D[ $i ][ $j ] = rand( 0, 999 );
                }
            }

            
            // Wywołanie tablicy jednowymiarowej
            echo( "<h3>Tablica Jednowymiarowa</h3>" );

            echo( "<table>" );

            echo( "<tr>" );
                echo( "<th colspan=20>" );
                    echo( "Liczby pseudolosowe" );
                echo( "</th>" );
            echo( "</tr>" );

            for( $i = 0; $i < 10; $i++ )
            {
                echo( "<tr>" );
                for( $j = 0; $j < 20; $j++ )
                {
                    echo( "<td>" );

                    echo( $tab_1D[ $i + $j ] );

                    echo( "</td>" );
                }
                echo( "</tr>" );
            }

            echo( "</table>" );

            // Wywołanie tablicy dwuwymiarowej
            echo( "<h3>Tablica Dwuwymiarowa</h3>" );

            echo( "<table>" );

            echo( "<tr>" );
                echo( "<th colspan=20>" );
                    echo( "Liczby pseudolosowe" );
                echo( "</th>" );
            echo( "</tr>" );

            for( $i = 0; $i < 10; $i++ )
            {
                echo( "<tr>" );
                for( $j = 0; $j < 20; $j++ )
                {
                    echo( "<td>" );

                    echo( $tab_2D[ $i ][ $j ] );

                    echo( "</td>" );
                }
                echo( "</tr>" );
            }

            echo( "</table>" );
        }





        // Wywołanie
        // echo( "<h1> Zadanie 1 </h1>" );
        // zadanie_1();

        // echo( "<h1> Zadanie 2 </h1>" );
        // zadanie_2();

        // echo( "<h1> Zadanie 3 </h1>" );
        // zadanie_3();

        // echo( "<h1> Zadanie 5 </h1>" );
        // zadanie_5();

        // echo( "<h1> Zadanie 6 </h1>" );
        // zadanie_6();

        // echo( "<h1> Zadanie 7 </h1>" );
        // zadanie_7();

        // echo( "<h1> Zadanie 8 </h1>" );
        // zadanie_8();
    ?>
    
</body>
</html>