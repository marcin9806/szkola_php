<?php
//tablice indeksowane numerycznie
$kolory=array('biały', 'zielony', 'czerwony');
echo "początkowa zawartość tablicy: ";
for ($i=0;$i<count($kolory);$i++)
{
    $element=$i+1;
    echo "<br>Element $element: $kolory[$i]";
}
$kolory[0]="orange";
$kolory[1]="aqua";
$kolory[2]="magenta";
for ($i=0;$i<count($kolory);$i++)
{
    $element=$i+1;
    echo "<br>Element[$element]: $kolory[$i]";
}
echo "<br>";
echo "<br>";

//******************************************************************************************
//tablice asocjacyjne
$dane=array(
    'imie' => 'Janusz',
    'nazwisko' => 'Nowak',
    'wiek' => 20
);
echo 'Zawartość tablicy: <br>';
echo <<< TABLICA
Imię: {$dane["imie"]}<br>
Nazwisko: {$dane["nazwisko"]}<br>
Wiek: {$dane["wiek"]}<br>
TABLICA;

echo "<br>";
echo "<br>";

//foreach
foreach($dane as $zmienna){
    echo 'Wartość: '.$zmienna.'<br>';
}
foreach($dane as $klucz => $wartosc){
    echo 'Element '.$klucz.': '.$wartosc.'<br>';
}

//******************************************************************************************
//tablice wielowymiarowe
$uczen=array(
    array('Julia','Nowak',20),
    array('Anna','Kowal',19)
);

for ($i=0;$i<count($uczen);$i++){
    for($j=0;$j<count($uczen[$i]);$j++){
        echo $uczen[$i][$j].';';
    }
    echo '<br>';
}

foreach($uczen as $klucz => $tablica){
    foreach($tablica as $klucz2 => $wartosc){
        echo $uczen[$klucz][$klucz2]." ";
    }
    echo "<br>";
}


//********************************************************************************************
$cyfry=array(
    array(1,2,3,4),
    array(5,6,7),
    array(8),
    array(9,10)
);

foreach($cyfry as $wartosc){
    foreach($wartosc as $x){
        echo "$x ";
    }
    echo "<br>";
}

//**********************************************************************************************
//sortowanie

$tab = array(10,1,5,-5,2,3,100);
foreach($tab as $x){
    echo $x." ";
}
echo "<br>";

//rosnąco
sort($tab);
echo "Tablica posortowana rosnąco.<br>";

foreach($tab as $x){
    echo $x." ";
}
echo "<br>";

//malejąco
rsort($tab);
echo "Tablica posortowana malejąco.<br>";
foreach($tab as $x){
    echo $x." ";
}
echo "<br>";
echo "<br>";

$tab2 = array('22','24','240','2','3');
sort($tab2);
echo "Tablica posortowana rosnąco.<br>";
foreach($tab2 as $x){
    echo $x." ";
}
echo "<br>";

//********************************************************************************************
//Sortowanie tablicy asocjacyjnej

$tabAsoc=array(
    "imie"=>"andrzej",
    "pseudonim"=>"endru",
    "wiek"=>30,
    "nazwisko"=>"kowal"
);

function wyswietl($tab){
    foreach($tab as $x){
        echo "$x ";
    };
    echo "<br>";
}

wyswietl($tabAsoc);

//sortowanie wg wartosci
asort($tabAsoc);
wyswietl($tabAsoc);
arsort($tabAsoc); //odwrotnie
wyswietl($tabAsoc);
echo gettype($tabAsoc["wiek"])."<br>";

//sortowanie wg klucza
ksort($tabAsoc);
wyswietl($tabAsoc);
krsort($tabAsoc); //odwrotnie
wyswietl($tabAsoc);

//wyswietlanie danych z tablicy
var_dump($tabAsoc);
echo "<br>";
print_r($tabAsoc);
echo "<br>";
echo "<pre>";
print_r($tabAsoc);
echo "</pre><br>";
?>
