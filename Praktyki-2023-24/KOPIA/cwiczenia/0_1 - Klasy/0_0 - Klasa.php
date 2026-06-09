<?php

    class Uczen
    {

        public $nr;
        public $imie;
        public $nazwisko;

        // Konstruktor
        public function __construct( $nr, $imie, $nazwisko )
        {
            $this->nr = $nr;
            $this->imie = $imie;
            $this->nazwisko = $nazwisko;
        }

        public function wypisz_ucznia()
        {
            echo $this->nr . " " . $this->imie . " " . $this->nazwisko;
        }

        public function ustaw_ucznia_nr( $nr )
        {
            $this->nr = $nr;
        }
    }

    $uczen1 = new Uczen( 1, "Adam", "Kowalski" );
    $uczen1->wypisz_ucznia();
    $uczen1->ustaw_ucznia_nr( 6 );
    
    echo "<br>Po zmianie: "; 
    $uczen1->wypisz_ucznia();

    echo "<br>Odwołanie się do własciwości imie: " . $uczen1->imie;
?>