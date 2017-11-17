<?php
//declare(strict_types=1);
function wartosc ($a):string{
    if($a < 0){
        return "ujemna <br>";
    }else if($a > 0){
        return "dodatnia<br>";
        return 5;
    }else {
        return "zero <br>";
    }
}

$a = 1;
$wynik = wartosc($a);

echo gettype($wynik); // string
echo "<br>";

//**************************************************************************************
function dajWartosc():int{
    return 10.25;
}
echo dajWartosc();
//*************************************************************************************
//zasieg zmiennych
$x = 20; // zmienna globalna nielokalna
function wyswietl(){
    echo "Wartość zmiennej \$x wynosi: $x<br>"; // nie ma takiej zmiennej w funkcji
    echo $GLOBALS['x']; // wyswietlenie z tablicy globalnej
}
wyswietl();

//****************************************************************************************

$y = 5;
echo "<br>";
function wyswietl2(){
    global $y;
    echo "Wartość zmiennej \$x wynosi: $y<br>";

}
wyswietl2();

function suma(){
$liczba = 10;
    static $liczba = 10; // powoduje zwiekszenie funkcji( bez tego wyswitli sie zawsze liczba = 10)
    echo "\$liczba wynosi $liczba <br>";
    $liczba += 5;
}
suma();
suma();
suma();

//***********************************************************************************************
//argumenty
function dodaj($x, $y = 1){
    return $x + $y;
}

$z = 20;
$liczba = dodaj($z,6);
echo $liczba;
echo "<br>";
$liczba1 = dodaj(2,5);
echo $liczba1;
echo "<br>";
$liczba2 = dodaj(3);
echo $liczba2;
//************************************************************************************************
//argumenty i typy danych
echo "<br>";
function mnozenie(float $x,int $y){
    return $x * $y;
}

echo mnozenie(3,4).'<br>'; //12
echo mnozenie(3.5,4).'<br>';  //14
echo mnozenie(4,3.5).'<br>';  //12




















?>
