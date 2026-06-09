<?php

    echo( "<h1> Zadanie 2 </h1>" );
    
    $stolice = array( 
        "Malediwy"      => "Male",
        "Kongo"         => "Brazzaville",
        "Surinam"       => "Paramaribo",
        "Sierra Leone"  => "Freetown",
        "Maroko"        => "Rabat",
        "Kambodża"      => "Phnom Penh",
        "Libia"         => "Trypolis",
        "Algieria"      => "Algier",
        "Mjanma"        => "Naypyidaw",
        "Albania"       => "Tirana",
        "Erytrea"       => "Asmara",
        "Barbados"      => "Bridgetown",
        "Wenezuela"     => "Caracas",
        "Katar"         => "Doha",
        "Madagaskar"    => "Antananarywa",
        "Senegal"       => "Dakar",
        "Bahrajn"       => "Manama",
        "Belize"        => "Belmopan",
        "Botswana"      => "Gaborone",
        "Andora"        => "Andora",
        "Mikronezja"    => "Palikir",
        "Monako"        => "Monako",
        "Gwinea"        => "Konakry",
        "Gabon"         => "Libreville",
        "Mongolia"      => "Ułan Bator",
        "Nigeria"       => "Abudża",
        "Ghana"         => "Akra",
        "Somalia"       => "Mogadiszu",
        "Dżibuti"       => "Dżibuti",
        "Zimbabwe"      => "Harare",
        "Rwanda"        => "Kigali",
        "Gwatemala"     => "Gwatemala",
        "Gambia"        => "Bandżul",
        "Kamerun"       => "Jaunde",
        "Liberia"       => "Monrovia",
        "Mozambik"      => "Maputo",
        "Czad"          => "Ndżamena",
        "Mołdawia"      => "Kiszyniów",
        "Mauritius"     => "Port Louis",
        "Komory"        => "Moroni",
        "Bahamy"        => "Nassau",
        "Seszele"       => "Victoria",
        "Mauretania"    => "Nawakszut",
        "Malta"         => "Valletta",
        "Filipiny"      => "Manila",
        "Macedonia"     => "Skopje",
        "Zambia"        => "Lusaka",
        "Meksyk"        => "Meksyk",
        "Mali"          => "Bamako",
        "Malawi"        =>"Lilongwe"
    );
    
    // Podpunkt A
    echo( "<h4> a) Wyświetlenie państw pętlą foreach </h4>" );
    
    echo( "<ol>" );
    foreach( $stolice as $kraj => $stolica )
    {
        echo( "<li>" );
        echo( "Stolicą państwa <b> $kraj </b> jest <b> $stolica </b> <br>" );
        echo( "</li>" );
    }
    echo( "</ol>" );
    
    // Podpunkt B
    echo( "<h4> b) Wyświetlenie państw które są posortowane </h4>" );
    ksort( $stolice );
    
    echo( "<ol>" );
    foreach( $stolice as $kraj => $stolica )
    {
        echo( "<li>" );
        echo( "Stolicą państwa <b> $kraj </b> jest <b> $stolica </b> <br>" );
        echo( "</li>" );
    }
    echo( "</ol>" );
    
    // Podpunkt C
    echo( "<h4> c) Sprawdzenie czy w tablicy są stolice Maputo i Kampala </h4>" );
    
    $stan_Maputo    = false;
    $stan_Kampala   = false;
    
    foreach( $stolice as $kraj => $stolica )
    {
        if( $stolica == "Maputo" )
        {
            $stan_Maputo = true;
        }   
    
        if( $stolica == "Kampala" )
        {
            $stan_Kampala = true;
        }
    }
    
    if( $stan_Kampala && $stan_Maputo )
    {
        echo( "<b>Odpowiedź: </b> Obie stolice znajdują się w tablicy" );
    }
    else
    {
        echo( "<b>Odpowiedź: </b> Podanych stolic lub jednej z nich nie ma w tablicy" );
    }

?>