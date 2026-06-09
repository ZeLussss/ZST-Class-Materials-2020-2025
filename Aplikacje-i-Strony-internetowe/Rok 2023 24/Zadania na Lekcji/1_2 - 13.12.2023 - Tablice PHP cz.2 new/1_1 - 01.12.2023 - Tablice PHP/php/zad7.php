<?php 

    for( $i = 1; $i < 30; $i++ )
    {
        $rys[ $i ] = "banner/img" . $i . ".jpg";
    }

    shuffle( $rys );

    for( $i = 0; $i < 3; $i++ )
    {
        echo( "<img src=\"" . $rys[ $i ] . "\">" );
    }
    
?>