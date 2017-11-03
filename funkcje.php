<?php
//declare(strict_types=1); brak mozliwosci konwertowania typow zmiennych przez funkcje
function wartosc($a){ //function wartosc($a):string - zwróci zawsze string
    if($a<0) return "ujemna";
    else if($a>0) return "dodatnia";
    else return "zero";
}
$a=0;
echo wartosc($a)."<br>";

//******************************************************************
//zasieg zmiennych

$x=20;
function wyswietl(){
    //echo "Wartość zmiennej \$x wynosi: $x<br>"; //niezdefiniowana zmienna
    echo "Wartość zmiennej \$x wynosi: ",$GLOBALS['x'],"<br>"; //zmienna globalna spoza funkcji
    global $x;
    echo "Wartość zmiennej \$x wynosi: $x<br>";//zmienna globalna spoza funkcji
}
wyswietl();


function suma(){
    $liczba = 10;
    echo "\$liczba wynosi $liczba<br>";
    $liczba += 5;
}
suma(); //10
suma(); //10
suma(); //10

function suma1(){
    static $liczba = 10;
    echo "\$liczba wynosi $liczba<br>";
    $liczba += 5;
}
suma1(); //10
suma1(); //15
suma1(); //20

//*******************************************************************
//argumenty
function dodaj($x,$y=1){ //jeżeli nie będzie podane, to przypisze 1
    return $x + $y;
}
$z=20;
$liczba=dodaj($z, 6);
$liczba2=dodaj($z);
echo $liczba,"<br>";
echo $liczba2,"<br>";


//*******************************************************************
//argumenty i typy danych
function mnozenie(float $x, int $y){
    return $x*$y;
}
echo mnozenie(3,4);












?>
