<?php

    $nasza = array( 'Bolek' => 'Wartość przechowywana',
                    'Lolek' => 2, 'dziesiata' => 5 );
    
    echo '$nasza["Bolek"]'
        .' przehowuje wartość = '
        .$nasza["Bolek"]
        .'<br>';

    echo '$nasza["Lolek"] '
        .' przechowuje wartość = '
        .$nasza["Lolek"]
        .'<br>';
    
    echo '$nasza[' . '"dziesiata"'
        .'] przechowuje wartość = '
        .$nasza["dziesiata"]
        .'<br>';

    echo '<pre>';
    print_r( $nasza );
    echo '</pre>';
?>