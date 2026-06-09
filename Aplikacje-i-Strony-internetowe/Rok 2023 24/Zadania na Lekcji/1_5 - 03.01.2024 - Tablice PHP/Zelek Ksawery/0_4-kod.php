<?php

    echo( "<h1> Zadanie 4 </h1>" );
    // Stworzenie tablicy nazw na później
    $nazwy = array();
    for( $i = 0; $i <= 19; $i++ )
    {
        $chwilowe = "rys";
    
        if( $i < 9 )
        {
            $chwilowe .= "0" . strval( $i + 1 );
        }
        else
        {
            $chwilowe .= strval( $i + 1 );
        }
    
        $chwilowe .= ".jpg";
    
        $nazwy[ $i ] = $chwilowe;
    }
    
    // Stworzenie tablicy asocjacyjnej
    $tab_asso   = array();
    $pom_1D     = array();
    
    for( $i = 0; $i <= 19; $i++ )
    {
        $chwilowe = "rysunek";
    
        if( $i < 9 )
        {
            $chwilowe .= "0" . strval( $i + 1 );
        }
        else
        {
            $chwilowe .= strval( $i + 1 );
        }
    
        $pom_1D[ $i ] = $chwilowe;
    }
    
    for( $i = 0; $i <= 19; $i++ )
    {
        $tab_asso[ $pom_1D[ $i ] ] = $nazwy[ $i ];
    }
    
    // Mieszanie tablicy
    shuffle( $tab_asso );
    
    $x = 1;
    foreach( $tab_asso as $index => $nazwa )
    {
        echo( "<img src=\"grafika/" . $nazwa . "\">" );
    
        if( $x++ > 4 ) break;
    }

?>