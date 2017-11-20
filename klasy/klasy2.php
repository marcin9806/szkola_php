<?php
    require_once("klasa_samochod.php");
    $auto1 = new Samochod;
    echo $auto1->ilosc_kol;
    $auto1->ustaw_marke("Opel");
    $auto1->model="Tigra";
?>
