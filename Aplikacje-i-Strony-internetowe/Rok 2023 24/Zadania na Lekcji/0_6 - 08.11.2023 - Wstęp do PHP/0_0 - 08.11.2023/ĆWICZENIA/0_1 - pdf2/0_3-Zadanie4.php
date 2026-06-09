<?php

    $liczba1 = 5;
    $liczba2 = 1.25;
    $liczba3;
    $napis = "PHP 5.0";
    $prawda = true;

    // Wyświetlenie informacji o zmiennych
    echo ( "<h2> gettype() </h2>" );

    echo( "x -> " . gettype( $liczba1 ) . "<br>" );
    echo( "y -> " . gettype( $liczba2 ) . "<br>" );
    echo( "z -> " . gettype( $liczba3 ) . "<br>" );
    echo( "napis -> " . gettype( $napis ) . "<br>" );
    echo( "prawda -> " . gettype( $prawda ) . "<br><br>" );


    echo( "<h2> var_dump() </h2>" );

    echo( var_dump( $liczba1 ) . "<br>" );
    echo( var_dump( $liczba2 ) . "<br>" );
    echo( var_dump( $liczba3 ) . "<br>" );
    echo( var_dump( $napis ) . "<br>" );
    echo(  var_dump( $prawda ) . "<br>" );

    echo( "<br><br>" . "<b> Wyskakuje nam błąd ponieważ zmienna z nie jest zadeklarowana</b>")

?>