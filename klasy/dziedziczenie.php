<?php
    require_once("klasa_samochod.php");

    class Ciezarowy extends Samochod{
        public $ladownosc;
        function wyswietl(){
            echo parent::wyswietl();
            return $this->ladownosc;
        }
    }

    $tir1=new Ciezarowy("Polska");
    $tir1->ladownosc=19000;
    $tir1->marka="DAF";
    $tir1->model="XF 95 480";
    echo $tir1->wyswietl()."<br>";
?>
