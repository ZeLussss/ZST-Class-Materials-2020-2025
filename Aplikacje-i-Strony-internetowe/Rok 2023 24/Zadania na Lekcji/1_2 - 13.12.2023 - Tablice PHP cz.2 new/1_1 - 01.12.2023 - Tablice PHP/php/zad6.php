<?php

    $menu = array( 
        "Home" => "Strona1.php",
        "PHP part I" => "Strona2.php",
        "PHP part II" => "Strona3.php",
        "PHP part III" => "Strona4.php"
    );

    echo( "<ol>" );

    foreach( $menu as $index => $url )
    {
        echo( "<a href=\"$url\">" );
        echo( "<li>" );

        echo( "$index" );

        echo( "</li>" );
        echo( "</a>" );
    }

    echo( "</ol>" );

?>