<?php
    //skladowe statyczne - istnieją nawet bez istnienia obiektu
    class liczby{
        public static $liczba=10;
        public static function wyswietl(){
            echo liczby::$liczba."<br>";
        }
    }
    echo liczby::$liczba."<br>";
    liczby::wyswietl();
    liczby::$liczba = 50;
    liczby::wyswietl();
?>
