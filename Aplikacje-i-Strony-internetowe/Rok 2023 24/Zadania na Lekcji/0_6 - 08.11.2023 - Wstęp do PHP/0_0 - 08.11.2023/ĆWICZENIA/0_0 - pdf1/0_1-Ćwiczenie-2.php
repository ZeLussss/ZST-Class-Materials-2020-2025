<?php

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

    echo( "<br><br>" . "<b> Wyskakuje nam błąd ponieważ zmienna z nie jest zadeklarowana</b>")
?>