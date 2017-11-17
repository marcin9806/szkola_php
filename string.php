<?php

$text = <<<TEKST
zsk - Zespół
szkół
komunikacji
TEKST;

    echo "Przed uzyciem funkcji nl2br: <br> $text";
    echo "<br><br>";
    echo "Po uzyciu funkcji nl2br: <br> ";
    echo nl2br($text);
    echo "<br><br>";

// zmiana na male litery
    echo strtolower($text);
    echo "<br>";

//zmiana na duze litery
    echo strtoupper($text);
    echo "<br>";

//zamiana pierwszej litery na duza
     $tekst = "rAZ DWA trzy";
    echo ucfirst($tekst);
    echo "<br>";
    echo "<br>";

//zamiana wszystkich pierwszych liter na duze
    echo ucwords($tekst);
    //echo "<br>";
    echo "<br>";

$lorem ="Aut summis legam quae offendit, mandaremus iis occaecat. A fore ingeniis
incurreret, quis quo quamquam iis quis, ubi se sunt laborum in ut eu
comprehenderit. Enim vidisse nam aliquip et quid commodo arbitrantur quo ab ex
illum anim elit, multos officia incididunt. Noster pariatur quo irure quae,
pariatur multos irure quo quis. Culpa te quibusdam ea culpa, deserunt malis
mandaremus senserit. Nostrud a irure appellat est eu et adipisicing ita litteris
ex veniam arbitror, est eram eram est quibusdam. Fabulas an offendit, quo ea
magna labore irure, senserit qui cupidatat quo de multos ubi minim, sed
consequat adipisicing, veniam non offendit se sunt, e mandaremus praesentibus,
ipsum cohaerescant consequat quorum incurreret.";

    $kolumna = wordwrap($lorem,30, "<br>");
    echo $kolumna;

//usuwanie bialych znakow
$imie1 = "Marian";
$imie = "  Marian ";

echo strlen($imie1); //6
echo strlen($imie); //9

echo strlen(ltrim($imie)); //7
echo strlen(trim($imie)); //6
echo "<br>";

//przeszukiwanie

$adres = "Poznań, ul. Fredry 13, tel. (61) 445-44-58";
$szukaj = strstr($adres, "tel"); // wyszukanie podanej frazy w ciagu
echo $adres;
echo "<br><br>";
echo $szukaj;
echo "<br><br>";

$szukaj1 = strstr($adres, "tel", true);
echo $szukaj1;
echo "<br><br>";

$szukaj2 = stristr($adres, "TEL");

echo $szukaj2, '<br>';

$mail = strstr("grzes@o2.pl","@");
echo $mail,"<br>";

$mail1 = strstr("grzes@gmail.pl",64);

echo $mail1;
echo "<br> <br>";
//@Gmail.pl

//*******************************************************************************
$ciag1 = "a";
$ciag2 = "aa";

echo strcmp($ciag1,$ciag2),"<br>";//-1
echo strcmp("zzz","zzz"),"<br>";//0
echo strcmp("zza","zzz"),"<br>";//-1
echo strcmp("zzc","zzb"),"<br>";// 1
echo strcmp("zzca","zzc"),"<br>";// 1

//********************************************************************************
$poz = strpos("abcdefg","cde");
echo $poz; // znajduje index w stringu //2
echo "<br> <br>";

$poz1 = strpos('abcabc',"ab"); //0
echo $poz1;
echo "<br> <br>";

    //zad.1
$tekst1 = "abcdabcd";
$tekst2 = "abc";
if(strpos($tekst1,$tekst2) === false){
    echo "Ciag $tekst2 nie znajduje sie w ciagu $tekst1";
} else{
    echo "Ciag $tekst2 znajduje sie w ciagu $tekst1";
}

//*********************************************************************************
//przetwarzanie ciagow znakow

echo "<br> <br>";
    $zamien = str_replace("%imie%","Janusz","%imie% to nie imie, %imie% to styl zycia");

echo $zamien;
echo "<br><br>";
//*********************************************************************************
$login = "Łukasz Bąk";
$cenzura = array(
"ą","ę","ć","ż","ź","ł","ó","ń","ś",
"Ą","Ę","Ć","Ż","Ź","Ł","Ó","Ń","Ś",
);

$zamiana = array(
"a","e","c","z","z","l","o","n","s",
"A","E","C","Z","Z","L","O","N","s"
);

$poprawnyLogin = str_replace($cenzura,$zamiana,$login);

echo $poprawnyLogin;
echo "<br><br>";

/*zad.dom.1
Napisz program, ktory pozwoli cenzurowac zdanie popdane przez uzytkownika w formularzu*/

/*zad.don.2
Napisz funkcję, ktora bedzie obliczala wystapienia okreslonego ciagu znakow w danym tekscie. Tekst i szukany ciag znakow powinny byc przekazywane w postaci argumentow
*/



$formularz = <<< FORM
<form method="post">
    <input type="text" name="dane">
    <input type="submit">
</form>
FORM;
echo $formularz;

if(isset($_POST['dane'])){
    $dane = $_POST['dane'];
    $niedozwolone = ['polonez','multipla','bmw'];
    $zamiana = "#$@#$^^&*&";
    $poprawne = str_ireplace($niedozwolone,$zamiana,$dane);
    echo "<h1>$poprawne</h1>";
}


















?>
