<form action="" method="post">

    <label for="Dzial">Dział: </label>
    <input type="text" name="dzial" id="dzial">

    <input type="submit" value="Dodaj">

</form>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

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
                $komenda2 = 'SELECT Dzial FROM Dzialy WHERE Dzial = "' . $dzial . '"'; 

                $query = $komenda2;
                
                if( $result = mysqli_query( $connect, $query ) )
                {
                    $rowcount=mysqli_num_rows($result);
                    
                    if( $rowcount != 0 )
                    {
                        echo "Istnieje już taki dział";
                    }
                    else
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
                }
                else
                {
                    echo "1";
                }
            }
            $connect->close();
        }
        catch( Exception $e )
        {
            echo '<span style="color:red;">Istnieje już taki dział!</span>';
            echo '<br>Wyrzucenie wyjątku: ' . $e;
        }
        
        if( isset( $_SESSION['error'] ))
        {
            echo $_SESSION['error'];
            unset( $_SESSION['error'] );
        }
        
    }

?>

