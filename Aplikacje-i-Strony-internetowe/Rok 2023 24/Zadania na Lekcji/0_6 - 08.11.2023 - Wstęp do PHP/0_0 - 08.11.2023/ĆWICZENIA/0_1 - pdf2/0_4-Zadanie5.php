<?php

    $tekst = "Nazywam się ";
    $napis1 = "Jan Kowalski";
    $tekst .= $napis1;

    echo( $tekst );
    echo( "<br>" );

    // $wynik = 3 * $napis1;            <- NIE WYKONA SIĘ BO NIE MOŻNA MNOŻYĆ NAPISÓW

    echo( "Wynik mnożenia: 3 * ($)napis1 = " . "<b>NIE WYKONA SIĘ</b><br>" );
    
    echo( "Za to można wykorzystać funkcję str_repeat();<br>" );
    $wynik = str_repeat( $napis1, 3 );
    echo( "Wynik str_repeat( $napis1, 3 ) = " . "$wynik<br>" );
    
    echo( "<br>" );

    $napis2 = "30 Ton";
    // $wynik2 = 3 * $napis2;           <- NIE WYKONA SIĘ BO NIE MOŻNA MNOŻYĆ NAPISÓW

    echo( "<p>Wynik mnożenia: 3 * ($)napis2 = " . "<b>NIE WYKONA SIĘ</b>" . "</p>" );
    
    echo( "Za to można wykorzystać funkcję str_repeat();<br>" );
    $wynik2 = str_repeat( $napis2, 3 );
    echo( "Wynik str_repeat( $napis2, 3 ) = " . "$wynik2<br>" );

    $a = 10;
    $b = 5.5;
    $imie = "Jan";
    $nazwisko = "Kowalski";

    // $suma = $a + $b + $imie;             <----- NIE MOŻNA DODAWAĆ STRINGA DO INTA

    echo( "<p>Suma = " . "<b>NIE WYKONA SIĘ</b>" . "</p>" );

    // $suma1 = $imie + $a + $b;            <----- NIE MOŻNA DODAWAĆ INT DO STRINGA
    // $suma2 = $imie + $nazwisko;          <----- NIE MOŻNA DODAWAĆ INT DO STRINGA

    // Aby rozwiązać ten problem należy zmienić typ zmiennej a i b komendą settype();

    echo( "<p>Suma1 = <b>NIE WYKONA SIĘ</b>, Suma2 = <b>NIE WYKONA SIĘ</b>  </p>" );

    echo( "<p> <b>Nie zadziała ponieważ nie można dodawać INT DO STRINGA</b> </p>")
?>