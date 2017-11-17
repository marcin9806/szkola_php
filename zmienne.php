<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>PHP</title>
</head>
<body>
<?php
    $liczba = 10;
    $_liczba = 15;
    $liczba23 = 11;
    $imie_ = "Janusz";
    $Imie = "Anna";
    $imię = "KRzysztof";
    $wartość = 1;
    echo "$liczba";
    echo '$liczba';
//typy danych
//typ skalarny (prosty)
    $prawda = true;
    $falsz = false;
//typ integer
    $calkowita = 200;
    $szesnastkowa = 0xa;
    $oktalna = 010;
    $binarna = 0b1010;

    echo $binarna;
//typ float
    $dziesietna = 5.125;
//typ string
    $tekstowa = 'tekst';
    $tekstowa1 = "tekst";
//heredoc
    $nazwisko = "KOWAL";
    $napis = <<<NAZWISKO
    Mam na nazwisko: $nazwisko
    <br> Mam 20 lat
    <h1>LIPA</h1>
NAZWISKO;
    echo $napis;
    //na poczatku linii
    //typ zlozony
        //typ array
        //typ object

    //typ specjalny
        //typ resource
        //typ null
    $inna = null;
    $inna1 = NULL;

    echo 'Zmienna wynosi', $inna;





    ?>

</body>
</html>
