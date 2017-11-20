<?php
    class liczby{
        public $wartosc1 = 1;
        protected $wartosc2 = 2; // Dostęp tylko przez metody lub klasy potomnej
        private $wartosc3 = 3; // Dostęp tylko przez metody

        public function wyswietl(){
            echo "Wartość 1: ".$this->wartosc1."<br>";
            echo "Wartość 2: ".$this->wartosc2."<br>";
            echo "Wartość 3: ".$this->wartosc3."<br>";
        }
    }

    class rzeczywiste extends liczby{
        public function wyswietl(){
            echo "Wartość 1: ".$this->wartosc1."<br>";
            echo "Wartość 2: ".$this->wartosc2."<br>";
            echo "Wartość 3: ".$this->wartosc3."<br>";
        }
    }
    $liczba1=new liczby();
    $liczba2=new rzeczywiste();
    $liczba1->wyswietl();
    $liczba2->wyswietl();
    echo $liczba2->wartosc2; //błąd - brak dostępu, bo private.
?>
