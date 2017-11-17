<?php
    //operatory
    $potegowanie = 2**4; //16
    $modulo = 11%3; //2
    echo $modulo;
   // +, -, *, /
    //operatory bitowe
        //and &, or , not ~,xor ^, przesuniecie bitowe w lewo <<,przesuniecie bitowe w prawo >>,

    $dwadziescia = 0b10100;
    echo $dwadziescia, '<br>';
    $nowaLewo = $dwadziescia <<1;
    echo $nowaLewo; //40
    $nowaPrawo = $dwadziescia >> 1;
    echo $nowaPrawo; // 10

    //operatory logiczne
    //and, or, xor, !, &&, ||,

//zadanie 1
//Sprawdz czy w sklepie kupisz samochod

$sklep = 'otwarty';
$pieniadze = 1000000;
$ferrari = true;
if($sklep == 'otwarty' && $pieniadze > 1500000 && $ferrari){
    echo 'Kupiłaś Ferrari';
}else{
    echo 'Nie kupiłaś Ferrari <br>';
}

//Zadanie2
//Chcesz kupic w sklepie Ferrari lub BMW
$BMW = false;
$Ferrari = true;

if($BMW == true && $Ferrari == true){
    echo "Kupuje dwa autka";
} else if ($Ferrari == false){
    echo "Kupuje BMW";
}else if($Ferrari){
    echo "Kupuje Ferrari";
}

$a =1;
$b ='1';

if($a===$b){
    echo '<br> a i b jest rowne<br>';
}else {
    echo '<br> a i b nie jest rowne<br>';
}

$x = 2;
echo $x; //2
echo ++$x; //3
echo $x; //3
$y=$x++;
echo $y; //3
$y=++$x;
echo $y; //  5
echo ++$y; //  6
echo '<br>';
    //rozmiar typu integer
    echo PHP_INT_SIZE;
//kontrola typu zmiennych

$test = 'szkola';
$x = 10;
$a = 22.0;
$y = true;
$z = null;
echo gettype($test); //string
echo gettype($x); //integer
echo gettype($a); //integer double
echo gettype($y); //bolean
echo gettype($y); //bolean
echo gettype($z); //NULL
//echo gettype($w); //NULL
echo @gettype($w); //bez errorka
echo '<br>';

echo is_string($test);
echo is_string($x);
echo is_bool($y);
echo is_float($a);
echo is_int($x);
echo is_null($z);
echo '<br>';
//*****************************************************************
//zmienne superglobalne
//$_GET, $_POST,$_COOKIE,$_FILES,$_SESSION
echo $_SERVER['SERVER_PORT']; //80
echo $_SERVER['SCRIPT_NAME']; ///4TB/operacjeNaZmiennych.php
echo $_SERVER['SERVER_PROTOCOL']; //HTTP/1.1
echo $_SERVER['DOCUMENT_ROOT']; //C:/xampp/htdocs
$lokalizacjaPliku = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'];
echo '<br>',$lokalizacjaPliku;

//*******************************************************************
//stałe
//nazwy z duzych liter!!

define('NAZWISKO','Nowak');
echo '<br>',NAZWISKO;

define ('imie','Janusz');
echo imie;

define('WIEK',18,true);
//echo WIEK;
echo wiek;

define('PI',3.14);
    echo PI,'<br>';

//*****************
//stałe prefefiniowane
echo PHP_VERSION.'<br>';
echo gettype(PHP_VERSION).'<br>';
$ver = PHP_VERSION;

if($ver > 5.6){
    echo "Nowa wersja php";
}else {
    echo "stara wersja php";
}

echo PHP_OS; //WINNT
echo '<br>',__LINE__; //130
echo '<br>',__FILE__; //C:\xampp\htdocs\4TB\operacjeNaZmiennych.php
echo '<br>',__DIR__; //C:\xampp\htdocs\4TB


//******************************************************************
//operator konwersji (rzutowanie) typów

$x = 5.9;
$y = 10.9;
$z = 2;
$j = -1;
$c = 100;
$text = 'wakacje';

$x = (int)$x;
echo '<br>'.$x.'<br>';

$y = (float)$y;
echo gettype($y).'<br>'; // double

echo gettype($z).'<br>';
$z = (float)$z;
echo gettype($z).'<br>'; //double
echo $z.'<br>'; // 2

$j = (bool)$j;
echo gettype($j); //boolean
echo $j.'<br>'; //1


$c = (unset)$c;
echo gettype($c);//NULL
$c = 'jacek';
echo $c; //jacek
$text = (int)$text;
echo $text; //0

//string,array

?>


