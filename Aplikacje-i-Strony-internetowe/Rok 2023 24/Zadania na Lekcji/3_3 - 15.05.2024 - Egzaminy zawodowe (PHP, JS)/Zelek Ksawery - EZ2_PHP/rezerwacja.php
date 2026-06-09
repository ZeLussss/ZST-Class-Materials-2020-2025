<?php

    $con = mysqli_connect( "localhost", "root", "", "baza" );

    if( !empty( $_POST[ 'data_rez' ] ) )
    {
        $data_rez = $_POST[ 'data_rez' ];

        if( !empty( $_POST[ 'ile_osob' ] ) )
        {
            $ile_osob = $_POST[ 'ile_osob' ];
            
            if( !empty( $_POST[ 'telefon' ] ) )
            {
                $telefon = $_POST[ 'telefon' ];

                $kw = "INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) VALUES( '$data_rez', $ile_osob, '$telefon' )";
            
                mysqli_query( $con, $kw );
            
                echo( "Dodano rezerwację do bazy" );
            }
        }
    }
    

?>