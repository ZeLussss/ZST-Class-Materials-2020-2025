<?php 

    $zmienna_float = 123.55;            // Zmienna float z kropką nie przecinkiem
    echo "$zmienna_float<br>";
    settype( $zmienna_float, "integer" );       // Zmieniamy typ 
    echo "$zmienna_float"."<br>";               // Konkatenacja

    /* funkcja settype przyjmuje argumenty:
        "boolean" or "bool"
        "integer" or "int"
        "float" or "double"
        "string"
        "array"
        "object"
        "null"
       i zwraca true lub false w przypadku niepowodzenia */

    var_dump( $zmienna_float );
    settype( $zmienna_float, "string" );
    echo "<br>$zmienna_float"."<br>";
    var_dump( $zmienna_float );

?>