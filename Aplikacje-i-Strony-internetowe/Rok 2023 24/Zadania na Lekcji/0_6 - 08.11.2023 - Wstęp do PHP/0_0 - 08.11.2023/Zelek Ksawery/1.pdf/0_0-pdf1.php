<?php

    echo( "<h1> ZADANIE 1 </h1>" );

    $imie = "Jan";
    $nazwisko = "Kochanowski";

    echo( "<p>" );
    echo $nazwisko;
    echo $nazwisko.$imie;

    echo( "<br><br>" );

    echo( " 1. Nazywam się " . $imie . " " . $nazwisko . "<br>" );
    echo( " 2. Nazywam się $imie " . $nazwisko . "<br>" );
    echo( " 3. Nazywam się $imie $nazwisko <br> " );
    echo( ' 4. Nazywam się $imie $nazwisko  <b>w pojedyńczych wywoływanie zmiennych nie działa</b> <br> ' );
    echo( ' 5. Nazywam się ' . "$imie $nazwisko " . "<br>" );
    echo( " 6. Nazywam się {$imie} {$nazwisko} <br> " );

    echo( "</p>" );



    echo( "<h1> ZADANIE 2 </h1>" );

    $x = 5;
    $y = 1.25;
    $z;
    $napis = "PHP 5.0";
    $prawda = true;

    // Wyświetlenie informacji o zmiennych
    echo ( "<h2> gettype() </h2>" );

    echo( "x -> " . gettype( $x ) . "<br>" );
    echo( "y -> " . gettype( $y ) . "<br>" );
    echo( "z -> " . gettype( $z ) . "<br>" );
    echo( "napis -> " . gettype( $napis ) . "<br>" );
    echo( "prawda -> " . gettype( $prawda ) . "<br><br>" );


    echo( "<h2> var_dump() </h2>" );

    echo( var_dump( $x ) . "<br>" );
    echo( var_dump( $y ) . "<br>" );
    echo( var_dump( $z ) . "<br>" );
    echo( var_dump( $napis ) . "<br>" );
    echo(  var_dump( $prawda ) . "<br>" );


    echo( "<h2> print_r() </h2>" );

    echo( "x -> " . print_r( $x ) . "<br>" );
    echo( "y -> " . print_r( $y ) . "<br>" );
    echo( "z -> " . print_r( $z ) . "<br>" );
    echo( "napis -> " . print_r( $napis ) . "<br>" );
    echo( "prawda -> " . print_r( $prawda ) . "<br>" );

    echo( "<br><br>" . "<b> Wyskakuje nam błąd ponieważ zmienna z nie jest zadeklarowana</b>" );



    echo( "<h1> ZADANIE 3 </h3>" );

    $a = 10;
    $b = 5.5;
    $imie = "Jan";
    // $suma = $a + $b + $imie;
    $suma = $a + $b;

    echo( "<p> Suma = " . $suma . "</p>");

    $wynik = "{$a} + {$b} + {$imie}";

    echo( "<p> Wynik = " . $wynik . "</p>");

    echo( "<br><br> <b>Kod pokazuje nam błąd, ponieważ nie możemy dodać wartości typu string do integer
    Wystarczy usunąć wartość || + " . ' $imie ' . " || w linii 6;</b>" );



    echo( "<h1> ZADANIE 4 </h1>" );

    define( "aString", "To jest stały ciąg znaków" );

    define( "aNumber", 1 );

    define( "STAWKA_PODATKOWA", 0.18 );

    echo( aString . "<br>" . aNumber . "<br>" . STAWKA_PODATKOWA . "<br>")
?>