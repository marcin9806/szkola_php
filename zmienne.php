<?php //znacznik kanoniczny
    $liczba=10;
    $_liczba=10;
    $liczba2=10;
    //$2liczba=10; //niedozwolone
    $imie="Janusz";
    $Imie="Anna";
    $imię="Kacper";
    echo $liczba;
    echo "Marcin $liczba Kaczmarek"; //Marcin 10 Kaczmarek
    echo 'Marcin $liczba Kaczmarek'; //Marcin $liczba Kaczmarek

//typy danych
    //typ skalarny - prosty
    $prawda = true;
    //$prawda = "true"; //niedozwolone
    $falsz = false;

    //typ integer
    $calkowita = 200;
    $szesnastkowa = 0xA;
    $szesnastkowa2 = 0xa;
    $oktalna = 010;
    $binarna = 0b1010;

    //typ float
    $dziesietna = 6.135;
    //$dziesietna = 6,135; //nieprawidlowo

    //typ string
    $tekstowa="tekst";
    $tekstowa2='tekst';

    //herdoc
    $imie="Ola";
    $napis = <<<TEKST
    Mam na imię $imie
    <br>Mam 20 lat
    <h1>Egzamin</h1>
TEKST;
//kończymy na początku linii
    echo $napis;

    //nowdoc - nie pobiera wartości zmiennych
    $nazwisko="Ola";
    $napis2 = <<<'NAZWISKO'
    Mam na imię $nazwisko
    <br>Mam 20 lat
    <h1>Egzamin</h1>
NAZWISKO;
//kończymy na początku linii
    echo $napis2;

    //typ złożony
        //typ array
        //typ object


    //typ specjalny
        //typ sesource
        //typ null

        $inna = null;
        $inna1 = NULL;

        echo $inna;



?>
