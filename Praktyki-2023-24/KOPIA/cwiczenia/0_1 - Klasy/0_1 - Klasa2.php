<?php

    class Kierowca
    {
        public $imie;
        public $kategoria;
        public $punkty_karne;
        public $uprawnienia = true;
        public static $liczba;

        public function panel()
        {
            
        }

        private function update_uprawnienia()
        {
            if( $this->kategoria == 'A' )
            {
                if( $this->punkty_karne < 23 )
                {
                    $this->uprawnienia = true;
                }
                else
                {
                    $this->uprawnienia = false;
                }
            }
            else if( $this->kategoria == 'B' )
            {
                if( $this->punkty_karne < 20 )
                {
                    $this->uprawnienia = true;
                }
                else
                {
                    $this->uprawnienia = false;
                }
            }
            else if( $this->kategoria == 'C' )
            {
                if( $this->punkty_karne < 15 )
                {
                    $this->uprawnienia = true;
                }
                else
                {
                    $this->uprawnienia = false;
                }
            }
        }

        public function static_value()
        {
            return self::$liczba += 1;
        }

        public function __construct( $imie, $kategoria, $punkty_karne = 0 )
        {
            $this->imie = $imie;
            $this->kategoria = $kategoria;
            $this->punkty_karne = $punkty_karne;
            
            $this->update_uprawnienia();
            $this->static_value();
        }

        public function mandat( $ile )
        {
            $this->punkty_karne += $ile;

            $this->update_uprawnienia();
        }

        public function kasuj()
        {
            $this->punkty_karne = 0;

            $this->update_uprawnienia();
        }

        public function drukuj()
        {
            echo '<pre class="desc">-------<br>';
            echo 'Imie: ' . $this->imie . '<br>';
            echo 'Kategoria: ' . $this->kategoria . '<br>';
            echo 'Punkty karne: ' . $this->punkty_karne . '<br>';
            
            if( $this->uprawnienia == true )
            {
                echo 'Uprawnienia: Posiada <br>';
            }
            else if( $this->uprawnienia == false )
            {
                echo 'Uprawnienia: Nie posiada <br>';
            }

            echo '-------</pre>';
        }

    }

    // --- MAIN ---


    // /* ------- KIEROWCA 1 ------- */
    // echo '<h3>Stworzymy teraz kierowcę, z 15 punktami karnymi</h3>';
    $kierowca1 = new Kierowca( "Ksawery", "B", 15 );

    // echo 'Kierowca z 15 punktami: <br>';
    // echo '<br>' . $kierowca1->drukuj() . '<br>';

    // // Mandat --> BRAK UPRAWNIEŃ (Sprawdza automatycznie)
    // $kierowca1->mandat( 10 );
    // echo 'Kierowca z 25 punktami: NIE POSIADA UPRAWNIEŃ !!!!: <br>';
    // echo '<br>' . $kierowca1->drukuj() . '<br>';

    // // Kasowanie punktów karnych ---> JUŻ BĘDĄ UPRAWNIENIA
    // $kierowca1->kasuj();
    // echo 'Kierowca bez punktów karnych: JUŻ POSIADA UPRAWNIENIA !!!!: <br>';
    // echo '<br>' . $kierowca1->drukuj();


    // /* ------- KIEROWCA 2 ------- */
    // echo '<h3>Stworzymy teraz kierowcę z użyciem argumentemtu domniemanego w konstruktorze czyli punkty karne będą miały równość 0 -> <h4>public function __construct( $imie, $kategoria, $punkty_karne = 0 )</h4></h3><br>';
    // $kierowca2 = new Kierowca( "Adam", "B" );

    // echo 'Wywołanie komendy -> $kierowca2 = new Kierowca( "Adam", "B" ); zrobi to, że Adam będzie miał zero punktów (przez wartość domniemaną)';
    // echo '<br><br>' . $kierowca2->drukuj();

    // echo '<h3>Próba wywołania prywatnej funkcji update_uprawnienia() kończy się nie powodzeniem (bo jest to prywatna funkcja składowa): </h3>';
    // $kierowca2->update_uprawnienia();
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="0_1 - styles.css">

    <title>Panel Kierowcy</title>
</head>
<body>

    <div id="container">

        <div id="menu">

            PROFIL KIEROWCY

        </div>

        <div id="content">

            <div id="profil">

                <span class="text">Kierowca 1</span>

                 <?php $kierowca1->drukuj() ?>

            </div>

        </div>

        <div id="footer">

            Profil kierowcy &copy Copyright 2023

        </div>

    </div>
    
</body>
</html>