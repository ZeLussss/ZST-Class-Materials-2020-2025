<?php

    echo( "<h1> Zadanie 3 </h1>" );
    
    $rozmiar = rand( 100, 200 );
    echo( "<h3>Wylosowana liczba to: " . $rozmiar . "</h3>" );
    
    $tab = array();
    for( $i = 0; $i <= $rozmiar - 1; $i++ )
    {
        $tab[ $i ] = rand( 100, 150 );
    }
    
    // Średnia
    $suma_liczb = 0;
    for( $i = 0; $i <= $rozmiar - 1; $i++ )
    {
        $suma_liczb += $tab[ $i ];
    }
    
    $srednia = $suma_liczb / $rozmiar;
    $srednia = round( $srednia, 2 );
    
    echo( "<h4> Średnia liczb to: " . $srednia . "</h4>" );
    
    
    // Mediana
    sort( $tab );
    $mediana = 0;
    
    if( $rozmiar % 2 )
    {
        $liczba = $tab[ floor( $rozmiar / 2 ) ];
    
        $mediana = $liczba;
    }
    else
    {
        $liczba_1 = $tab[ floor( $rozmiar / 2 ) - 1 ];
        $liczba_2 = $tab[ floor( $rozmiar / 2 ) ];
    
        $mediana = ( $liczba_1 + $liczba_2 ) / 2;
    }
    
    echo( "<h4> Mediana to: " . $mediana . "</h4>" );
    
    
    // Odchylenie standardowe
    $odchylenie = 0;
    $wynik_sigma = 0;
    
    for( $i = 0; $i <= $rozmiar - 1; $i++ )
    {
        $x = pow( ( $tab[ $i ] - $srednia ), 2 );
    
        $wynik_sigma += $x;
    }
    
    $odchylenie = round( sqrt( $wynik_sigma / $rozmiar ), 2 );
    
    echo( "<h4> Odchylenie standardowe to: " . $odchylenie . "</h4>" );

?>