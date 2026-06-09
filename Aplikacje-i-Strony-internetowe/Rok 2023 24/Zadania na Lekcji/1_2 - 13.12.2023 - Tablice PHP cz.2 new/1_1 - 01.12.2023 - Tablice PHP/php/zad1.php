<?php

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

?>