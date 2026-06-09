<?php

    // Deklaracja i inicjalizacja potrzebnych zmiennych
    $wyr1 = 0;
    $a = 1;
    $b = 2;

    $wyr1 = round( abs( ( $a + ( $b / $a ) ) / ( sqrt( pow( $a, 2 ) + pow( $b, 2 ) ) ) ), 3 );

    echo( "Wynik: " . $wyr1 . "<br>" );

?>