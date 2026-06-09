<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styl2.css">
    
    <title>Prognoza pogody Wrocław</title>
</head>
<body>

    <section id="baner1">

        <img src="logo.png" alt="meteo">

    </section>

    <section id="baner2">

        <h1>Prognoza dla Wrocławia</h1>

    </section>

    <section id="baner3">

        <p>maj, 2019 r.</p>

    </section>

    <section id="glowny">

        <table>

            <tr>

                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>

            </tr>

            <!-- SKRYPT 1 -->
            <?php

                $con = mysqli_connect( "localhost", "root", "", "prognoza" );
                $zapytanie = "SELECT * FROM pogoda WHERE miasta_id = 1 ORDER BY data_prognozy ASC";
                
                $query = mysqli_query( $con, $zapytanie );
                $ile_wierszy = mysqli_num_rows( $query );

               
                while( $i = mysqli_fetch_array( $query ) )
                {
                    echo( "<tr>" );

                    // data_prognozy
                    echo( "<td>" );
                    echo( $i[ "data_prognozy" ] );
                    echo( "</td>" );

                    // temperatura_noc
                    echo( "<td>" );
                    echo( $i[ "temperatura_noc" ] );
                    echo( "</td>" );

                    // temperatura_dzien
                    echo( "<td>" );
                    echo( $i[ "temperatura_dzien" ] );
                    echo( "</td>" );

                    // opady
                    echo( "<td>" );
                    echo( $i[ "opady" ] );
                    echo( "</td>" );

                    // cisnienie
                    echo( "<td>" );
                    echo( $i[ "cisnienie" ] ); 
                    echo( "</td>" );
                    
                    echo( "</tr>" );
                }


                mysqli_close( $con );
            ?>

        </table>

    </section>

    <section id="lewy">

        <img src="obraz.jpg" alt="Polska, Wrocław">

    </section>

    <section id="prawy">

        <a href="kwerendy.txt">Pobierz kwerendy</a>

    </section>

    <section id="stopka">

        <p>Stronę wykonał: Zelek Ksawery</p>

    </section>
    
</body>
</html>