<?php

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

?>