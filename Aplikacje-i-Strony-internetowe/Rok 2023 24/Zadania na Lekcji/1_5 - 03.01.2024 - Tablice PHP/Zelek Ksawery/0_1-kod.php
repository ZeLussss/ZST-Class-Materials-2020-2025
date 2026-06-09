<?php

    

    echo( "<h1> Zadanie 1 </h1>" );
    
    $rozmiar = rand( 1, 100 );
    echo( "<h3> Podana liczba (rozmiar): " . $rozmiar . "</h3>" );
    
    $tab = array();
    
    for( $i = 0; $i <= $rozmiar - 1; $i++ )
    {
        $tab[ $i ] = rand( 1, 50 );
    }
    
    // Podpunkt A
    $suma = 0;
    for( $i = 0; $i <= $rozmiar - 1; $i++ )
    {
        $suma += $tab[ $i ];
    }
    
    $srednia = $suma / $rozmiar;
    $srednia = round( $srednia, 2 );
    
    echo( "<h4> a) Średnia: " . $srednia . "</h4>" );
    
    // Podpunkt B
    $najm = $tab[ 0 ];
    for( $i = 1; $i <= $rozmiar - 1; $i++ )
    {
        if( $tab[ $i ] < $najm )
        {
            $najm = $tab[ $i ];
        }
    }
    
    echo( "<h4> b) Najmniejsza liczba: " . $najm . "</h4>" );
    
    //Podpunkt C
    echo( "<h4> c) Tablica malejąco: </h4>" );
    rsort( $tab );
    
    echo( "<ol>" );
    for( $i = 0; $i <= $rozmiar - 1; $i++ )
    {
        echo( "<li>" );
        echo( "tab[" . $i . "] = " . $tab[ $i ] . "<br>" );
        echo( "</li>" );
    }
    echo( "</ol>" );

?>
