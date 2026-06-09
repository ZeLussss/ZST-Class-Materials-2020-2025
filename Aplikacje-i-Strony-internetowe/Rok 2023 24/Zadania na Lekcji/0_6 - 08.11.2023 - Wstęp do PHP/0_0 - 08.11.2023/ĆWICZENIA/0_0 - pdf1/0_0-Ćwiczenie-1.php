<?php

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

?>