<?php

    echo( "<h1>Instrukcje warunkowe i wyboru</h1>" );

    define( "IMIE", "Ksawery" );
    define( "NAZWISKO", "Zelek" );
    define( "EMAIL", "ksawery.zelek@zst.tarnow.pl" );

    echo( "Imie: " . IMIE . "<br>" );
    echo( "Nazwisko: " . NAZWISKO . "<br>" );
    echo( "Email: " . EMAIL . "<br>" );

    // Pole koła
    echo( "<h2>Pole koła</h2>" );

    function oblicz_pole_kola( $r )
    {
        if( $r > 5 )
        {
            $pole_kola = M_PI * pow( $r, 2 );
            echo( "Pole koła dla r > 5 ( r = $r ) wynosi: $pole_kola <br>" );
        }
        else
        {
            echo( "Nie można obliczyć pola koła dla r = $r <br>" );
        }
    }

    oblicz_pole_kola( 4 );
    oblicz_pole_kola( 6 );


    // Objętość kuli
    echo( "<h2>Objętość kuli</h2>" );

    function oblicz_obj_kuli( $r )
    {
        if( $r > 0 )
        {
            $objetosc_kuli = ( 4 / 3 ) * M_PI * pow( $r, 3 );
            echo( "Objętość kuli dla r > 0 ( r = $r ) wynosi: $objetosc_kuli <br>" );
        }
        else
        {
            echo( "Nie można obliczyć objętości kuli dla r = $r <br>" );
        }
    }

    oblicz_obj_kuli( -1 );
    oblicz_obj_kuli( 3 );


    // Parzystość liczby
    echo( "<h2>Czy jest nieparzysta?</h2>" );

    function czy_jest_nieparzysta( $liczba )
    {
        echo( "<b>Czy liczba $liczba jest nieparzysta? -> </b>");
        
        if( $liczba % 2 )
        {
            echo( "Tak, jest nieparzysta <br>" );
        }
        else
        {
            echo( "Nie, jest parzysta <br>" );
        }
    }
    
    czy_jest_nieparzysta( 4 );
    czy_jest_nieparzysta( 5 );
    

    // Czy jest podzielna przez 5 lub 7?
    echo( "<h2>Czy jest podzielna przez 5 lub 7?</h2>");

    function podz_przez_5_lub_7( $liczba )
    {
        if( ( $liczba % 5 == 0 ) && ( $liczba % 7 == 0 ) )
        {
            echo( "Liczba $liczba jest podzielna przez 5 i przez 7 <br>" );
        }
        else if( $liczba % 5 == 0 )
        {
            echo( "Liczba $liczba jest podzielna przez 5, i nie jest podzielna przez 7 <br>" );
        }
        else if( $liczba % 7 == 0 )
        {
            echo( "Liczba $liczba jest podzielna przez 7, i nie jest podzielna przez 5 <br>" );
        }
        else
        {
            echo( "Liczba $liczba nie jest podzielna przez 5 ani przez 7 <br>" );
        }
    }

    podz_przez_5_lub_7( 5 );
    podz_przez_5_lub_7( 7 );
    podz_przez_5_lub_7( 35 );
    podz_przez_5_lub_7( 4 );


    // Czy jest podzielna przez 4 i przez 9?
    echo( "<h2>Czy jest podzielna przez 4 i przez 9?</h2>" );

    function podz_przez_4_i_9( $liczba )
    {
        if( ( $liczba % 4 == 0 ) && ( $liczba % 9 == 0 ) )
        {
            echo( "Liczba $liczba jest podzielna przez 4 i przez 9 <br>" );
        }
        else if( $liczba % 4 == 0 )
        {
            echo( "Liczba $liczba jest podzielna przez 4, i nie jest podzielna przez 9 <br>" );
        }
        else if( $liczba % 9 == 0 )
        {
            echo( "Liczba $liczba jest podzielna przez 9, i nie jest podzielna przez 4 <br>" );
        }
        else
        {
            echo( "Liczba $liczba nie jest podzielna przez 4 i przez 9 <br>" );
        }
    }

    podz_przez_4_i_9( 36 );
    podz_przez_4_i_9( 4 );
    podz_przez_4_i_9( 9 );
    podz_przez_4_i_9( 3 );

    
    // Równanie liniowe
    echo( "<h2>Równanie liniowe</h2>" );

    function rozw_rown_liniowe( $a, $b )
    {
        if( $a == 0 )
        {
            if( $b == 0 )
            {
                echo( "Wynik: Równanie tożsamościowe <br>" );
            }
            else
            {
                echo( "Wynik: Równanie sprzeczne <br>" );
            }
        }
        else
        {
            $x = ( ( -$b ) / $a );
            echo( "Wynik dla a = $a, b = $b '->' x = $x <br>" );
        }
    }

    rozw_rown_liniowe( 10, 5 );
    rozw_rown_liniowe( 4, 15 );


    // Równanie kwadratowe
    echo( "<h2>Równanie kwadratowe</h2>" );

    function rozw_rown_kwadratowe( $a, $b, $c )
    {
        echo( "<b>Rozwiązanie dla liczb: $a, $b, $c -> </b>");
        if( $a == 0 )
        {
            echo( "<b><span style='color: red;'>To nie jest równanie kwadratowe tylko liniowe</span></b>  -> " );
            rozw_rown_liniowe( $b, $c );
        }
        else
        {
            $delta = pow( $b, 2 ) - ( 4 * $a * $c );

            if( $delta < 0 )
            {
                echo( "Wynik: Brak rozwiązań <br>" );
            }
            else
            {
                if( $delta == 0 )
                {
                    $x = ( ( -$b ) / $a );

                    echo( "Wynik: Jedno rozwiązanie -> x = $x <br>" );
                }
                else
                {
                    $x1 = ( ( -$b + sqrt( $delta ) ) / ( 2 * $a ) );
                    $x2 = ( ( -$b - sqrt( $delta ) ) / ( 2 * $a ) );
                    
                    echo( "Wynik: Dwa rozwiązania x1 = $x1, x2 = $x2 <br>");
                }
            }
        }
    }

    rozw_rown_kwadratowe( -2, 1, 1 );
    rozw_rown_kwadratowe( 0, 10, 5 );


    // Dzień tygodnia
    echo( "<h2>Dzień tygodnia</h2>");

    function ktory_dzien( $liczba )
    {
        echo( "<b>Odpowiednik dnia tygodnia dla liczby $liczba to -> </b>" );
        switch( $liczba )
        {
            case 1:
            {
                echo( "Poniedziałek" );
                break;
            }
            case 2:
            {
                echo( "Wtorek" );
                break;
            }
            case 3:
            {
                echo( "Środa" );
                break;
            }
            case 4:
            {
                echo( "Czwartek" );
                break;
            }
            case 5:
            {
                echo( "Piątek" );
                break;
            }
            case 6:
            {
                echo( "Sobota" );
                break;
            }
            case 7:
            {
                echo( "Niedziela" );
                break;
            }
            default:
            {
                echo( "Nie ma odpowiednika w nazwach tygodnia dla liczby: $liczba" );
                break;
            }
        }
        echo( "<br>" );
    }

    ktory_dzien( 3 );
    ktory_dzien( 7 );
    ktory_dzien( 2 );
    ktory_dzien( 9 );
?>

<!-- 4/3 pi * r ^ 3 -->