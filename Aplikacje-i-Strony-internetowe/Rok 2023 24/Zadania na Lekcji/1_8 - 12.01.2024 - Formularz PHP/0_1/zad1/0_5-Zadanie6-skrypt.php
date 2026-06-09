<?php

    if( !isset( $_POST[ 'regulamin' ] ) )
    {
        echo( "<h3> <b class=\"important\">Nie zaakceptowano</b> regulaminu </h3>" );
    }
    else
    {
        echo( "<table>" );

        echo( "<tr> <td colspan=\"2\"> Podane dane </td> </tr>" );

        // Sposób prowadzenia firmy
        {
            echo( "<tr>" );
    
            echo( "<th> Sposób prowadzenia firmy: </th>" );
            
            if( !empty( $_POST[ 'forma_pracy' ] ) )
            {
                echo( "<td>" . $_POST[ 'forma_pracy' ] . "</td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }
    
            echo( "</tr>" );
        }

        // Imie
        {
            echo( "<tr>" );

            echo( "<th> Imię: </th>" );

            if( !empty( $_POST[ 'imie' ] ) )
            {
                echo( "<td>" . $_POST[ 'imie' ] . "</td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }

            echo( "</tr>" );
        }

        // Nazwisko
        {
            echo( "<tr>" );

            echo( "<th> Nazwisko: </th>" );

            if( !empty( $_POST[ 'nazwisko' ] ) )
            {
                echo( "<td>" . $_POST[ 'nazwisko' ] . "</td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }

            echo( "</tr>" );
        }

        // Nazwa firmy
        {
            echo( "<tr>" );

            echo( "<th> Nazwa firmy </th>" );

            if( $_POST[ 'forma_pracy' ] == "Firma" )
            {
                echo( "<td>" . $_POST[ 'firma' ] . "</td>" );
            }
            else if( $_POST[ 'forma_pracy' ] == "Osoba prywatna" )
            {
                echo( "<td class=\"important\">Pole wyłączone z użytku </td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }

            echo( "</tr>" );
        }

        // Adres
        {
            echo( "<tr>" );

            echo( "<th> Adres: </th>" );

            if( !empty( $_POST[ 'adres' ] ) )
            {
                echo( "<td>" . $_POST[ 'adres' ] . "</td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }

            echo( "</tr>" );
        }

        // Kod pocztowy
        {
            echo( "<tr>" );

            echo( "<th> Kod pocztowy: </th>" );

            if( !empty( $_POST[ 'kod_pocztowy' ] ) )
            {
                echo( "<td>" . $_POST[ 'kod_pocztowy' ] . "</td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }

            echo( "</tr>" );
        }

        // Miasto
        {
            echo( "<tr>" );

            echo( "<th> Miasto: </th>" );

            if( !empty( $_POST[ 'miasto' ] ) )
            {
                echo( "<td>" . $_POST[ 'miasto' ] . "</td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }

            echo( "</tr>" );
        }

        // Kraj
        {
            echo( "<tr>" );

            echo( "<th> Kraj: </th>" );

            if( !empty( $_POST[ 'country' ] ) )
            {
                echo( "<td>" . $_POST[ 'country' ] . "</td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }

            echo( "</tr>" );
        }

        // Przerwa
        {
            echo( "<tr> <td colspan=\"2\"></td> </tr>" );
        }

        // Nazwa użytkownika
        {
            echo( "<tr>" );

            echo( "<th> Nazwa użytkownika: </th>" );

            if( !empty( $_POST[ 'username' ] ) )
            {
                echo( "<td>" . $_POST[ 'username' ] . "</td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }

            echo( "</tr>" );
        }

        // Hasło:
        {
            echo( "<tr>" );

            echo( "<th> Hasło: </th>" );

            if( !empty( $_POST[ 'password' ] ) )
            {
                echo( "<td>" . $_POST[ 'password' ] . "</td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }

            echo( "</tr>" );
        }

        // Czy zaznaczono regulamin?
        {
            echo( "<tr>" );

            echo( "<th> Czy zaakceptowano regulamin </th>" );

            if( isset( $_POST[ 'regulamin' ] ) )
            {
                echo( "<td> Zaakceptowano regulamin </td>" );
            }
            else
            {
                echo( "<td> Nie zaakceptowano regulaminu </td>" );
            }

            echo( "</tr>" );
        }

        // Przerwa
        {
            echo( "<tr> <td colspan=\"2\"></td> </tr>" );
        }

        // e-mail
        {
            echo( "<tr>" );

            echo( "<th> e-mail: </th>" );

            if( !empty( $_POST[ 'email' ] ) )
            {
                echo( "<td>" . $_POST[ 'email' ] . "</td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }

            echo( "</tr>" );
        }

        // Telefon
        {
            echo( "<tr>" );
            
            echo( "<th> Telefon: </th>" );

            if( !empty( $_POST[ 'telefon' ] ) )
            {
                echo( "<td>" . $_POST[ 'telefon' ] . "</td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }

            echo( "</tr>" );
        }

        // Telefon dodatkowy
        {
            echo( "<tr>" );
            
            echo( "<th> Telefon dodatkowy: </th>" );

            if( !empty( $_POST[ 'telefon_dodatkowy' ] ) )
            {
                echo( "<td>" . $_POST[ 'telefon_dodatkowy' ] . "</td>" );
            }
            else
            {
                echo( "<td> <b> NIE PODANO DANYCH </b> </td>" );
            }

            echo( "</tr>" );
        }

        echo( "</table>" );
    }

?>