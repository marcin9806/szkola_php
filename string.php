<?php
    $text = <<<TEXT
    ZSK - zespół
    szkół
    komunikacji
TEXT;

echo "Przed użyciem funkcji nl2br: <br> $text<br><br>";
echo "Po użyciu funkcji nl2br: <br>";
echo nl2br($text)."<br><br>";

//zamiana na małe litery:
echo strtolower($text);
echo "<br><br>";

//zamiana na duże litery
echo strtoupper($text);
echo "<br><br>";

//zamioana pierwszej litery na dużą
$tekst="rAZ DWA trzy";
echo ucfirst($tekst);
echo "<br><br>";

//zamiana wszystkich pierwszych liter na duże
echo ucwords($tekst);
echo "<br><br>";



$lorem="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.";

$kolumna=wordwrap($lorem,30, "<br>");
echo $kolumna;

$imie1="Marian";
$imie="  Marian ";

echo "<br>".strlen(ltrim($imie)); //"Marian "
echo "<br>".strlen(rtrim($imie)); //"  Marian"

//przeszukiwanie

$adres="Poznań, ul. Fredry 13, tel. (61) 445-44-58";
$szukaj=strstr($adres,"tel.",false); //false - od "tel.", true - do "tel."
echo "<br>$szukaj";
$szukaj2=stristr($adres,"Tel",false); //nisensitive - nie zwraca uwagi na wielkość liter
echo "<br>$szukaj2";

$mail=strstr("grzes@o2.pl","@");
echo "<br>".$mail;

$mail1=strstr("grzes@gmail.pl",64);//ASCII - 64="@"
echo "<br>".$mail1;

$ciag1="a";
$ciag2="aa";
echo "<br>".strcmp($ciag1,$ciag2); //string compare: -1
echo "<br>".strcmp("zzz","zza"); //string compare: 1
echo "<br>".strcmp("zzz","zzz"); //string compare: 0

$poz=strpos("abcdefg","cde");
echo "<br>Pozycja \"cde\" w \"abcdefg\": ".$poz;

//**************************************************************************************
//zad1
$tekst1="abcdabcd";
$tekst2="abc";
if(strpos($tekst1,$tekst2)===false) echo "<br>Ciąg $tekst2 nie znajduje się w ciągu $tekst1.<br>";
else echo "<br>Ciąg $tekst2 znajduje się w ciągu $tekst1 na pozycji ".strpos($tekst1,$tekst2);
//trzeba użyć ===, bo == zwróci 0 i przekonwertuje to na false


//******************************************************************************
//przetwarzanie ciągów znaków

$zamien=str_replace("%imie%", "Janusz", "%imie% to nie imie, %imie% to styl zycia");
echo "<br> $zamien <br>";
//*******************************************
$login="Łukasz Bąk";
$cenzura=array(
    "ą","ę","ć","ż","ź","ł","ń","ł","ś",
    "Ą","Ę","Ć","Ż","Ź","Ł","Ń","Ł","Ś"
);
$zamiana=array(
    "a","e","c","z","z","l","n","l","s",
    "A","E","C","Z","Z","L","N","L","S"
);
$poprawnyLogin=str_replace($cenzura, $zamiana, $login);
echo "$poprawnyLogin<br>";

//*****************************************
//napisz program ktory pozwoli cenzurowac zdanie podane przez uzytkownika w formularzu
//cenzura


//*****************************************
//napisz funkcje ktora bedzie obliczala wystapienia okreslonego ciagu znakow w danym tekscie.
//Tekst i szukany ciagh znakow powiny byc przekazywane w postaci argumentu.





















?>


