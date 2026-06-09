<?php

    $dzial = $_POST['dzial'];

    $komenda = "INSERT INTO Dzialy (ID_Dzialu, Dzial) SELECT null, '" . $dzial . "' WHERE NOT EXISTS (SELECT Dzial FROM Dzialy WHERE Dzial = '" . $dzial . "')";

    session_start();
    require_once "connect.php";

    mysqli_report( MYSQLI_REPORT_STRICT );

    try
    {
        $connect = new mysqli( $host, $user, $password, $dbase );
        if( $connect->connect_errno!=0 )
        {
            throw new Exception( mysqli_connect_errno() );
        }
        else
        {
            $connect->set_charset( "utf8" );
            $query = 'SELECT * FROM pracownicy WHERE Nazwisko = "Misiak"';

            if( $result = $connect->query( $query ) )
            {
                $query = $komenda;

                if( $result = $connect->query( $query ) )
                {
                    echo "Udany update";
                }
                else
                {
                    $_SESSION['error'] = '<span style="color: red;">Nieudany update</span>';
                }
            }
            else
            {
                throw new Exception( $connect->error );
            }
        }
        $connect->close();
    }
    catch( Exception $e )
    {
        echo '<span style="color:red;">Ups coś nie tak!</span>';
        echo '<br>Wyrzucenie wyjątku: ' . $e;
    }
    
    if( isset( $_SESSION['error'] ))
    {
        echo $_SESSION['error'];
        unset( $_SESSION['error'] );
    }
?>