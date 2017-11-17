<html>
<head>
    <meta charset="utf-8">
    <title>Data i czas</title>
</head>
<body>
    <?php

echo date("Y"),"<br>"; //rok 2017 || y tylko dwie cyfry koncowe
echo date("M"),"<br>"; //miesiac slowine || m liczba miesiaca
echo date("D"),"<br>"; //dzien slownie || d liczba dnia

echo date ("Y-m-d"),"<br>"; //2017-10-30
echo date ("Y-M-d"),"<br>"; //2017-Oct-30
echo date ("Y-M-D"),"<br>"; //2017-Oct-Mon
echo date("d-m-Y"),"<br>"; //30-10-2017
echo date("e"),"<br>"; // Europe/Berlin
echo date("F"),"<br>"; // October (Full month)
echo date('g'),"<br>"; // 1 pm format 12 godzinny bez zera na poczatku
echo date('G'),"<br>"; // 13  format 24 godzinny bez zera na poczatku
echo date('h'),"<br>"; // 1 pm format 12 godzinny z zerem na poczatku
echo date('H'),"<br>"; // 1 pm format 24 godzinny z zerem na poczatku
echo date('i'),"<br>"; // "33" wyswietla minuty z zerem na poczatku
echo date('I'),"<br>"; // czas letni i zimowy "0"-  zimowy "1" - letni
echo date('j'),"<br>"; // dzien miesiaca bez zera na poczatku
echo date('l'),"<br>"; // Monday dzien tygodnia
echo date('L'),"<br>"; // znacznik roku przestepnego
echo date('m'),"<br>"; // 10 miesiac z zerem na poczatku
echo date('n'),"<br>"; // 10 miesiac bez zera na poczatku
echo date('O'),"<br>"; // +0100 roznica do czasu Greenwich
echo date('o'),"<br>"; // 2017 rok
echo date('P'),"<br>"; // +01:00 roznica do czasu Greenwich
echo date('s'),"<br>"; // sekundy z zerem na poczatku
echo date('S'),"<br>"; // th
echo date('t'),"<br>"; // 31 liczba dni w miesiacu
echo date('T'),"<br>"; // CET strefa czasowa
echo date('U'),"<br>"; // Znacznik czasu Uniksa
echo date('w'),"<br>"; // 1 dzien tygodnia Niedziela= 0
echo date('W'),"<br>"; // 44 numer tygodnia w roku
echo date('z'),"<br>"; // 302 dzien roku

//***********************************************************************
//getdate()

$data=getdate();
$dzien = $data['mday'];
echo "dzisiaj jest $dzien";
$miesiac= $data['mon'];
$rok= $data['year'];
$dzienTygodnia = $data['wday'];
$dzienRoku = $data['yday'];
$dzienTyg = $data['weekday'];
$month = $data['month'];
echo "<br>";
echo "dzisiaj jest $dzien.$miesiac";
echo "<br>";
switch($miesiac){
    case 1:$miesiac = "styczeń"; break;
    case 2:$miesiac = "luty"; break;
    case 3:$miesiac = "marzec"; break;
    case 4:$miesiac = "kwiecień"; break;
    case 5:$miesiac = "maj"; break;
    case 6:$miesiac = "czerwiec"; break;
    case 7:$miesiac = "lipiec"; break;
    case 8:$miesiac = "sierpień"; break;
    case 9:$miesiac = "wrzesień"; break;
    case 10:$miesiac = "październik"; break;
    case 11:$miesiac = "listopad"; break;
    case 12:$miesiac = "grudzień"; break;
}
echo "Dzisiaj jest: $dzien $miesiac $rok";
echo "<br>";

switch($dzienTygodnia){
    case 0: $dzienTygodnia = "niedziela"; break;
    case 1: $dzienTygodnia = "poniedziałek"; break;
    case 2: $dzienTygodnia = "wtorek"; break;
    case 3: $dzienTygodnia = "środa"; break;
    case 4: $dzienTygodnia = "czwartek"; break;
    case 5: $dzienTygodnia = "piątek"; break;
    case 6: $dzienTygodnia = "sobota"; break;
}

echo "Dzisiaj jest: $dzien $miesiac $rok, $dzienTygodnia";
echo "<br>";
echo "Dzisiaj jest: $dzien $miesiac $rok, $dzienTygodnia, Dzień roku: $dzienRoku";
echo "<br>";
echo "Dzisiaj jest: $dzienTyg";
echo "<br>";
echo "Dzisiaj jest: $month";
echo "<br>";
//*************************************************************************************
//*************************************************************************************
//strftime
    setlocale(LC_ALL,'plk');

    echo strftime("Bieżąca strefa czasowa: %Z<br>"); //Bieżąca strefa czasowa: �rodkowoeuropejski czas stand.
    echo strftime("Bieżąca strefa czasowa: %z<br>"); //Bieżąca strefa czasowa: +0100
    echo strftime("Data: %d-%m-%Y <br>"); //Data: 30-10-2017
    echo strftime("Czas: %H:%M:%S <br>"); //Czas: 14:47:24
    echo strftime("Mamy %U tydzień i %j dzień roku <br>"); //Mamy 44 tydzień i 303 dzień roku
    echo strftime("Dziś jest %A, %d %B %Y r."); // poniedzia�ek, 30 pa�dziernik 2017 r.
    echo "<br>";

//*************************************************************************************
//*************************************************************************************
    //Znacznik czasu

    $r1 = 2017;
    $m1 = 10;
    $d1 = 30;

    $r2 = 2017;
    $m2 = 9;
    $d2 = 30;

    $czas1 = mktime(0,0,0,$m1,$d1,$r1);
    $czas2 = mktime(0,0,0,$m2,$d2,$r2);
    $czas3 = mktime(0,0,0,10,31,2017);

    $czas = floor(($czas1 - $czas2)/86400);
    $czas = abs(floor(($czas1 - $czas2)/86400));
    echo $czas."<br>";

    $dataUr = strtotime("17 march 1998");
    echo $dataUr,"<br>";
    $dataDzisiejsza = strtotime('now');
    $panK = $dataDzisiejsza - $dataUr;

    echo $panK."<br>";

    $dziesiecDniWstecz = strtotime("-10 day");
    echo $dziesiecDniWstecz."<br>";

    $przyszlosc = strtotime('10 day 6 hours 20 minutes 20 seconds');
    echo $przyszlosc,"<br>";
?>

</body>
</html>
