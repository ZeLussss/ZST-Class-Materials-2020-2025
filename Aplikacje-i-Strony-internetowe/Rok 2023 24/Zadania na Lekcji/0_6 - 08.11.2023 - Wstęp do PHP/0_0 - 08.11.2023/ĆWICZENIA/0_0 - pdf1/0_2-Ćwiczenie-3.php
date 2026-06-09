<?php

    $a = 10;
    $b = 5.5;
    $imie = "Jan";
    $suma = $a + $b + $imie;

    echo( "<p> Suma = " . $suma . "</p>");

    $wynik = "{$a} + {$b} + {$imie}";

    echo( "<p> Wynik = " . $wynik . "</p>");

    echo( "<br><br> <b>Kod pokazuje nam błąd, ponieważ nie możemy dodać wartości typu string do integer
    Wystarczy usunąć wartość || + " . ' $imie ' . " || w linii 6;</b>" );

?>