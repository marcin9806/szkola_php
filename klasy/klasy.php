<?php
    class Uzytkownik{
        public $imie, $nazwisko;
        public function ustaw_imie($wartosc){
            $this->imie=$wartosc;
        }
        public function ustaw_nazwisko($wartosc){
            $this->nazwisko=$wartosc;
        }
        public function pobierz_imie_nazwisko(){
            return $this->imie." ".$this->nazwisko;
        }
    }
    $uczen1 = new Uzytkownik();
    $uczen2 = new Uzytkownik();

    $uczen1->imie = "Janusz";
    $uczen1->nazwisko = "Nosacz";

    $uczen2->ustaw_imie("Julia");
    $uczen2->ustaw_nazwisko("Kowalska");

    echo $uczen1->imie." ".$uczen1->nazwisko."<br>";
    echo $uczen2->pobierz_imie_nazwisko()."<br>";
?>
