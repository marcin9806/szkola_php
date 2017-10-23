<?php
echo "<h1>DUPA</h1>";

//operatory
$potegowanie=2**10; //1024
echo $potegowanie, "<br>"; //2
$reszta=11%3;
echo $reszta, "<br>";

//operatory bitowe
/*
and &
or |
not ~
xor ^
przesunięcie bitowe w lewo <<
przesunięcie bitowe w prawo >>*/

$dwadziescia=0b10100;
echo $dwadziescia."<br>";
$nowaLewo=$dwadziescia<<1;// 010100 -> 101000
echo $nowaLewo."<br>";

$nowaPrawo=$dwadziescia>>1;// 010100 -> 001010

//operatory logiczne
/*and, or, xor, !, &&, ||*/

//sprawdź, czy w sklepie kupisz samochód

    /*$sklep="otwarty";
    $pieniadze=1000000;
    $ferrari=true;

    if($sklep=="otwarty" && $pieniadze>1500000 && $ferrari) echo "Kupiłeś ferari";
    else echo "Nie kupiłeś :(";*/

//chcesz kupić w sklepie ferrari lub BMW.

    $sklep="otwarty";
    $pieniadze=1500001;
    $ferrari=true;
    $BMW=false;

    if($sklep=="otwarty" && $pieniadze>1500000 && ($ferrari || $BMW))
        if($ferrari && $BMW) echo "Kupiłeś oba";
        else
            if($ferrari) echo "Kupiłeś Ferrari";
            else echo "Kupiłeś BMW";
    else echo "Nie kupiłeś nic";

    echo "<br>";

    $a=1;
    $b=1;

    if($a===$b) echo "A i B jest równe<br>";
    else echo "A i B jest różne<br>";


    $x=2;
    echo $x; //2
    echo ++$x; //3
    echo $x; //3
    $y=$x++;
    echo $y; //3
    $y=++$x;
    echo $y; //5
    echo ++$y; //6

    echo "<br>";

    //rozmiar typu integer
    echo PHP_INT_SIZE."<br>"; //4


//************************************************************************************
//kontrola typu zmiennych
$test = "szkola";
echo gettype($test)."<br>"; //string

$x=10;
echo gettype($x)."<br>"; //integer

$a=20.5;
echo gettype($a)."<br>"; //double

$z=null;
echo gettype($z)."<br>"; //NULL

$y=true;
echo gettype($y)."<br>"; //boolean

echo @gettype($w)."<br>"; //NULL

echo is_string($test)."<br>"; //1 - true

echo is_string($x)."<br>"; // "" - false

echo is_bool($y)."<br>"; //true

echo is_float($a)."<br>"; //true

echo is_null($y)."<br>"; //true

//***************************************************************************************
//zmienne superglobalne
//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION

echo $_SERVER["SERVER_PORT"]."<br>";
echo $_SERVER["SCRIPT_NAME"]."<br>";
echo $_SERVER["SERVER_PROTOCOL"]."<br>";
echo $_SERVER["DOCUMENT_ROOT"]."<br>";

//***************************************************************************************
//stałe
//(nazwy z dużych liter)

define("NAZWISKO","Nowak");
echo NAZWISKO."<br>";

define("IMIE","Janusz");
echo IMIE."<br>";

define("WIEK",18,true); //true - nazwa nie sprawdza wielkości liter
echo WIEK."<br>";
echo wiek."<br>";

define("PI",3.14159265359);
echo PI."<br>";


//***************************************************************************************
//stałe predefiniowane

echo PHP_VERSION."<br>";
echo gettype(PHP_VERSION)."<br>";

if(PHP_VERSION>=5.6) echo "Nowa wersja PHP<br>";
else echo "Stara wersja PHP<br>";

echo PHP_OS."<br>";
echo __LINE__."<br>";//numer linii
echo __FILE__."<br>";//ścieżka pliku
echo __DIR__."<br>";//folder

//**************************************************************************************
//operator konwersji - rzutowanie typów

$x=5.9;
$x=(int)$x;
echo $x."<br>";

$y=10;
$y=(float)$y;
echo gettype($y)."<br>";

$z=2;
$j= -1;
$c=100;
$tekst="wakacje";

echo gettype($z)."<br>";
$z=(float)$z;
echo gettype($z)."<br>";
echo $z."<br>";

$j=(boolean)$j;
echo gettype($j)."<br>";
echo $j."<br>";

$c=(unset)$c;
echo gettype($c)."<br>";

$tekst=(integer)$tekst;
echo $tekst."<br>";

?>
