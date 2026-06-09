<?php

    $imiona = array(
        "Albert",
        "Henri",
        "Niels",
        "Max",
        "Hendrik",
        "Pola",         
        "Jagoda",       
        "Izabela",      
        "Dominika",     
        "Joanna"        
    );

    $nazwiska = array(
        "Einstein",
        "Becquuerel",
        "Bohr",
        "Planck",
        "Lorentz",
        "Baran",
        "Sikora",
        "Szewczyk",
        "Jaworska",
        "Pawlak"
    );

    echo( "<table>" );

    {   // Nagłówek (Imie, Nazwisko) -> tr -> th
        echo( "<tr>" );

        echo( "<th>" );
        echo( "Imię" );
        echo( "</th>" );

        echo( "<th>" );
        echo( "Nazwisko" );
        echo( "</th>" );

        echo( "</tr>" );
    }

    for( $i = 0; $i < 10; $i++ )
    {
        echo( "<tr>" );

        echo( "<td>" );
        echo( $imiona[ $i ] );
        echo( "</td>" );

        echo( "<td>" );
        echo( $nazwiska[ $i ] );
        echo( "</td>" );

        echo( "</tr>" );
    }


    echo( "</table>" );

?>

