<?php
    // tablice indeksowane numerycznie

    $kolory = array("biały","zielony","czerwony");

    echo "Początkowa zawartość tablicy: <br>";

    for ($i=0;$i<count($kolory);$i++){
        $elem = $i + 1;
        echo "Element [$elem] : $kolory[$i]<br>";
    }

$kolory[0] = "orange";
$kolory[1] = "blue";
$kolory[2] = "magenta";
    for ($i=0;$i<count($kolory);$i++){
        $elem = $i + 1;
        echo "Element [$elem] : $kolory[$i]<br>";
    }
echo "<br>";
//***************************************************************
//tablice asocjacyjne

$dane = array(
"imie" => "Janusz",
"nazwisko" => "Nowak",
"wiek" => 20
);

echo "Zawartość tablicy: <br>";
echo <<<TABLICA
Imię: {$dane['imie']}<br>
Nazwisko: {$dane['nazwisko']}<br>
Wiek: {$dane['wiek']}<br>
TABLICA;
echo '<br>';

//foreach

foreach($dane as $wartosc){
    echo "Wartość: $wartosc <br>";
}
echo "<br>";

foreach($dane as $klucz => $wartosc){
    echo "Element[$klucz] - $wartosc <br>";
}

//***********************************************************&***********************
//tablice wielowymiarowe
        echo "<br>";
    $uczen = array(
        array("Julia","Nowak",20),
        array("Agnieszka","TuNieMieszka",30)
    );
    for($i=0;$i<count($uczen);$i++){
        $nr = $i +1;
        echo "Uczeń $nr: ";
        for($j=0;$j<count($uczen[$i]);$j++){
            echo "{$uczen[$i][$j]}";
        }
        echo "<br>";
    }
        echo "<br><br>";

    foreach ($uczen as $klucz => $tablica){
        foreach($tablica as $klucz2 => $wartosc){
            echo $uczen[$klucz][$klucz2]." ";
        }
        echo "<br>";
    }

$cyfry = array(
    array(1,2,3,4),
    array(1,2,3),
    array(1,2),
    array(1)
);

foreach($cyfry as $wartosc){
    echo "<br>";
    foreach($wartosc as $x){
        echo $x." ";
    }
}

//*************************************************************************
//sortowanie tablic
    $tab = array(10,1,5,75,-4,100);

foreach($tab as $x){
    echo $x."  ";
}
echo "<br>";
echo "<br>";
//ASC
sort($tab);
echo "tablica po sortowaniu ASC <br>";
foreach($tab as $x){
    echo $x. " ";
}
echo "<br>";
echo "<br>";
//DESC

rsort($tab);
echo "tablica posortowana DESC <br>";
foreach($tab as $x){
    echo $x. " ";
}
echo "<br>";
echo "<br>";

$tab2 = array('karol','mariola',"patryk","dawid","szymon");

foreach($tab2 as $klucz =>$y){
    $z = strtolower($y);
    $tab2[$klucz]=$z;
    echo $z." ";
}
echo "<br>";

sort($tab2);
foreach($tab2 as $x){
    echo $x." "; //sortowanie rosnaco
}
echo "<br>";

//************************************************************************************
//SORTOWANIE W TABLICY ASOCJACYJNEJ

$tabAsoc = array(
 "imie" => "andrzej",
 "pseudonim" => "2endrju",
 "wiek" => 30,
 "nazwisko" => "kowal",
);
echo "<br><br>";
function wyswietl($tab){
    foreach($tab as $x){
        echo "$x ";
    }
    echo "<br>";
}

wyswietl($tabAsoc);


asort($tabAsoc);
wyswietl($tabAsoc); //andrzej endrju kowal 30

arsort($tabAsoc);
wyswietl($tabAsoc); // 30 kowal endrju andrzej

echo gettype($tabAsoc['pseudonim']); //string
echo gettype($tabAsoc['wiek']); //int

echo "<br><br>";
//sortowanie wedug klucza ("imie") itd)

ksort($tabAsoc);
wyswietl($tabAsoc);

krsort($tabAsoc);
wyswietl($tabAsoc);
echo "<br><br>";
//wyswietlanie danych z tablicy

var_dump($tabAsoc);
echo "<br><br>";

print_r($tabAsoc);

echo "<pre>";
    print_r($tabAsoc);
echo "<pre>";




?>
