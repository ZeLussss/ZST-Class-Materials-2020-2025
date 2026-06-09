<?php

    $cookie_name = "visit_count";
    $expireTime = strtotime( "next month" );

    if( isset( $_COOKIE[ $cookie_name ] ) )
    {
        $visitCount = intval( $_COOKIE[ $cookie_name ] ) + 1;
        setcookie( $cookie_name, $visitCount, $expireTime );
    }
    else
    {
        $visitCount = 1;
        setcookie( $cookie_name, $visitCount, $expireTime );
    }

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
    
    <?php

        if( $_COOKIE[ $cookie_name ] > 10 )
        {
            echo( "Gratuluje! Odwiedziłeś tą stronę co najmniej 10 razy w tym miesiącu!" );
        }

    ?>

</body>
</html>