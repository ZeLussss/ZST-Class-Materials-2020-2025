<?php

    $size_of_tab = rand( 10, 30 );
    $tab = array();

    for( $i = 0; $i < $size_of_tab; $i++ )
    {
        $tab[] = rand( 0, 50 );
    }

    // Podpunkt A
    echo( "<h4> Podpunkt A (wyświetlenie zawartości) </h4>" );
    print_r( $tab );


    // Podpunkt B
    echo( "<h4> Podpunkt B (obliczanie ilości liczb parzystych oraz nieparzystych) </h4>" );
    $odd    = 0;        // Nieparzyste
    $even   = 0;        // Parzyste

    for( $i = 0; $i < sizeof( $tab ); $i++ )
    {
        if( $tab[ $i ] % 2 )
        {
            $odd += 1;
        }
        else
        {
            $even += 1;
        }
    }

    echo( "<b>Ilość liczb parzystych: </b> $even <br>" );
    echo( "<b>Ilość liczb nieparzystych: </b> $odd <br>" );


    // Podpunkt C
    echo( "<h4> Podpunkt C (ile razy występuje dana liczba?) </h4>" );
    $tab_w_amount_of_num = array();
    for( $i = 0; $i <= 50; $i++ )
    {
        $tab_w_amount_of_num[ "$i" ] = 0;
    }

    for( $i = 0; $i < sizeof( $tab ); $i++ )
    {
        $num = $tab[ $i ];
        $tab_w_amount_of_num[ "$num" ] = $tab_w_amount_of_num[ "$num" ] + 1;
    }

    for( $i = 0; $i <= 50; $i++ )
    {
        if( $tab_w_amount_of_num[ "$i" ] != 0 )
        {
            echo( "Numer $i występuje <b>" . $tab_w_amount_of_num[ "$i" ] . "</b> ilość razy <br>" );
        }
    }

    
    // Podpunkt D
    echo( "<h4> Podpunkt D (Posortowanie rosnąco) </h4>" );

    sort( $tab );
    print_r( $tab );


    // Podpunkt E
    echo( "<h4> Podpunkt E (Posortowanie malejąco) </h4>" );

    rsort( $tab );
    print_r( $tab );
    
?>
    
