<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>

    <style>

        table
        {
            border-collapse: collapse;
            border: 1px solid black;
        }

        table > tbody > tr > th
        {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        table > tbody > tr > td
        {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        table > tbody > tr > td.NULL
        {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            background-color: darkred;
        }

    </style>

</head>
<body>

    <?php

        $con = mysqli_connect( 'localhost', 'root', '', 'komis' );

        if( mysqli_connect_errno() )
        {
            exit( "Błąd połączenia z serwerem MySQL: " . mysqli_connect_errno() );
        }
        else
        {
            echo( "Połączono z serwerem baz danych" );
        }

        echo( "<br>" );
        echo( "<br>" );

    ?>

    <form action="index.php" method="post">

        <h2>Dodanie nowego samochodu</h2>

        <table>

            <!-- Marka -->
            <tr>

                <th> <label for="marka">Marka:</label> </th>

                <td>
                    <input type="text" name="marka">
                </td>

            </tr>

            <!-- Model -->
            <tr>

                <th> <label for="model">Model: </label> </th>

                <td>
                    <input type="text" name="model">
                </td>

            </tr>

            <!-- Wersja -->
            <tr>

                <th> <label for="wersja">Wersja: </label> </th>

                <td>
                    <input type="text" name="wersja">
                </td>

            </tr>

            <!-- Pojemność -->
            <tr>

                <th> <label for="pojemnosc">Pojemność: </label> </th>

                <td>
                    <input type="number" name="pojemnosc" step="0.1">
                </td>

            </tr>

            <!-- Moc -->
            <tr>

                <th> <label for="moc">Moc: </label> </th>

                <td>
                    <input type="number" name="moc">
                </td>

            </tr>

            <!-- Nadwozie -->
            <tr>

                <th> <label for="nadwozie">Nadwozie: </label> </th>

                <td>
                    <input type="text" name="nadwozie">
                </td>

            </tr>

            <!-- Drzwi -->
            <tr>

                <th> <label for="drzwi">Drzwi: </label> </th>

                <td>
                    <input type="number" name="drzwi" max="10">
                </td>

            </tr>

            <!-- Silnik -->
            <tr>

                <th> <label for="silnik">Silnik: </label> </th>

                <td>
                    <input type="text" name="silnik">
                </td>

            </tr>


            <!-- Cena -->
            <tr>

                <th> <label for="cena">Cena: </label></th>

                <td>
                    <input type="number" name="cena">
                </td>

            </tr>


            <!-- Submit -->
            <tr>

                <td colspan="2">
                    <input type="submit" value="Dodaj">
                </td>

            </tr>

        </table>

    </form>

    <?php

        $marka      = NULL;
        $model      = NULL;
        $wersja     = NULL;
        $pojemnosc  = NULL;
        $moc        = NULL;
        $nadwozie   = NULL;
        $drzwi      = NULL;
        $silnik     = NULL;
        $cena       = NULL;

        if( !empty( $_POST[ 'marka' ] ) )
        {
            $marka = $_POST[ 'marka' ];
        }
        else
        {
            $marka = NULL;
        }

        if( !empty( $_POST[ 'model' ] ) )
        {
            $model = $_POST[ 'model' ];
        }
        else
        {
            $model = NULL;
        }

        if( !empty( $_POST[ 'wersja' ] ) )
        {
            $wersja = $_POST[ 'wersja' ];
        }

        if( !empty( $_POST[ 'pojemnosc' ] ) )
        {
            $pojemnosc = $_POST[ 'pojemnosc' ];
        }

        if( !empty( $_POST[ 'moc' ] ) )
        {
            $moc = $_POST[ 'moc' ];
        }

        if( !empty( $_POST[ 'nadwozie' ] ) )
        {
            $nadwozie = $_POST[ 'nadwozie' ];
        }

        if( !empty( $_POST[ 'drzwi' ] ) )
        {
            $drzwi = $_POST[ 'drzwi' ];
        }

        if( !empty( $_POST[ 'silnik' ] ) )
        {
            $silnik = $_POST[ 'silnik' ];
        }

        if( !empty( $_POST[ 'cena' ] ) )
        {
            $cena = $_POST[ 'cena' ];
        }

        $kwe_insert = "INSERT INTO cars( marka, model, wersja, pojemnosc, moc, nadwozie, drzwi, silnik, cena) 
        VALUES( '$marka', '$model', '$wersja', $pojemnosc, $moc, '$nadwozie', $drzwi, '$silnik', $cena )";

        if( $marka == NULL && $model == NULL && $wersja == NULL && $pojemnosc == NULL && $moc == NULL && $nadwozie == NULL && $drzwi == NULL && $silnik == NULL && $cena == NULL )
        {
            echo( "<br>" );
            echo( "<b>BŁĄD ZAPYTANIA</b>" );
        }
        else
        {
            $zapytanie = mysqli_query( $con, $kwe_insert );
            
            if( !$zapytanie === true )
            {
                echo( "<br>" );
                echo( "<b>BŁĄD ZAPYTANIA</b>" );
            }
            else
            {
                echo( "<br>" );
                echo( "Dodano pomyślnie!" );
            }
        }


        

        echo( "<br>" );
        echo( "<br>" );


        // Kwerenda
        $kwe_select = mysqli_query( $con, "SELECT * FROM cars" );
        $ile = mysqli_num_rows( $kwe_select );

        echo( "<br>" );
        
        echo( "<table>" );
        {
            echo( "<tr>" );
            {
                echo( "<th>" );
                echo( "id" );
                echo( "</th>" );

                echo( "<th>" );
                echo( "marka" );
                echo( "</th>" );

                echo( "<th>" );
                echo( "model" );
                echo( "</th>" );

                echo( "<th>" );
                echo( "wersja" );
                echo( "</th>" );

                echo( "<th>" );
                echo( "pojemnosc" );
                echo( "</th>" );

                echo( "<th>" );
                echo( "moc" );
                echo( "</th>" );

                echo( "<th>" );
                echo( "nadwozie" );
                echo( "</th>" );

                echo( "<th>" );
                echo( "drzwi" );
                echo( "</th>" );

                echo( "<th>" );
                echo( "silnik" );
                echo( "</th>" );

                echo( "<th>" );
                echo( "cena" );
                echo( "</th>" );
            }
            echo( "</tr>" );

            for( $i = 0; $i <= $ile; $i++ )
            {
                {
                    while( $wyn = mysqli_fetch_row( $kwe_select ) )
                    {
                        echo( "<tr>" );
                        for( $j = 0; $j <= 9; $j++ )
                        {
                            if( $wyn[ $j ] == NULL )
                            {
                                echo( "<td class=\"NULL\">" );
                                echo( "</td>" );
                            }
                            else
                            {
                                echo( "<td>" );
                                echo( $wyn[ $j ] );
                                echo( "</td>" );
                            }
                        }
                        echo( "</tr>" ); 
                    }
                }
            }

        }
        echo( "</table>" );
        


        mysqli_close( $con );

    ?>
    
</body>
</html>