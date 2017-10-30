<?php
    echo date("Y"),"<br>"; //rok - 4 cyfry
    echo date("y"),"<br>"; //rok - 2 cyfry
    echo date("F"),"<br>"; //miesiąc - nazwa pełna
    echo date("M"),"<br>"; //miesiąc - nazwa skrócona
    echo date("m"),"<br>"; //miesiąc - 2 cyfry, bez 0 na początku
    echo date("w"),"<br>"; //dzień tygodnia - numer, niedziela 0, poniedziałek 1
    echo date("l"),"<br>"; //dzień tygodnia - nazwa pełna
    echo date("D"),"<br>"; //dzień tygodnia - nazwa skrócona
    echo date("d"),"<br>"; //dzień miesiąca, 0 na początku
    echo date("j"),"<br>"; //dzień miesiąca, bez 0 na początku

    echo date("Y-m-d"),"<br>"; //rok-miesiąc-dzień

    echo date("e"),"<br>"; //strefa czasowa - pełna nazwa
    echo date("T"),"<br>"; //strefa czasowa - skrót
    echo date("I"),"<br>"; //czas letni-1/ zimowy-0
    echo date("L"),"<br>"; //znacznik roku przestępnego (1 - prawda)
    echo date("O"),"<br>"; //różnica do czasu Greenwich
    echo date("P"),"<br>"; //różnica do czasu Greenwich - z separatorem
    echo date("S"),"<br>"; //"th", "nd" itp - przyrostek do daty

    echo date("g"),"<br>"; //godzina, format 12-godzinny, bez 0 na początku
    echo date("G"),"<br>"; //godzina, format 24-godzinny, bez 0 na początku
    echo date("h"),"<br>"; //godzina, format 12-godzinny, 0 na początku
    echo date("H"),"<br>"; //godzina, format 24-godzinny, 0 na początku
    echo date("i"),"<br>"; //minuta, 0 na początku
    echo date("s"),"<br>"; //sekunda, 0 na początku

    echo date("t"),"<br>"; //liczba dni w miesiącu

    echo date("U"),"<br>"; //sekundy od 1 stycznia 1970r. - znacznik czasu Uniksa
    echo date("W"),"<br>"; //tydzień roku
    echo date("z"),"<br>"; //dzień roku


//****************************************************************************************
    //getdate()

    $data=getdate();
    $dzien=$data['mday'];
    $miesiac=$data['mon'];
    $rok=$data['year'];
    $dzien_tyg=$data['wday'];
    $dzienRoku=$data['yday'];

    switch ($miesiac){
        case 1: $miesiac="stycznia"; break;
        case 2: $miesiac="lutego"; break;
        case 3: $miesiac="marca"; break;
        case 4: $miesiac="kwietnia"; break;
        case 5: $miesiac="maja"; break;
        case 6: $miesiac="czerwca"; break;
        case 7: $miesiac="lipca"; break;
        case 8: $miesiac="sierpnia"; break;
        case 9: $miesiac="września"; break;
        case 10: $miesiac="października"; break;
        case 11: $miesiac="listopada"; break;
        case 12: $miesiac="grudnia"; break;
    }

    switch ($dzien_tyg){
        case 0: $dzien_tyg="niedziela"; break;
        case 1: $dzien_tyg="poniedziałek"; break;
        case 2: $dzien_tyg="wtorek"; break;
        case 3: $dzien_tyg="środa"; break;
        case 4: $dzien_tyg="czwartek"; break;
        case 5: $dzien_tyg="piątek"; break;
        case 6: $dzien_tyg="sobota"; break;
    }
    echo "Dziś jest $dzien_tyg, $dzien. $miesiac $rok.<br>$dzienRoku dzień roku.<br><br>";

//*****************************************************************************************
    setlocale(LC_ALL, 'plk');
    echo strftime("Bieżąca strefa czasowa: %z<br>");
    echo strftime("Data: %d.%m.%Yr.<br>");
    echo strftime("Czas: %H:%M:%S<br>");
    echo strftime("Mamy %U tydzień roku i %j dzień roku<br>");
    echo strftime("Dziś jest %A, %d %B %Yr.<br>");


//******************************************************************************************
//znacznik czasu
    $r1=2017;
    $m1=10;
    $d1=30;

    $r2=2017;
    $m2=9;
    $d2=30;

    $czas1=mktime(0, 0, 0, $m1, $d1, $r1); // g, m, s, m, d, r
    $czas2=mktime(0, 0, 0, $m2, $d2, $r2); // g, m, s, m, d, r

    $czas=$czas1-$czas2;
    echo $czas;

    $dataDzisiejsza=strtotime("now");
    $dataUrodzenia=strtotime("25 march 1998");
    $panK=$dataDzisiejsza-$dataUrodzenia;
    echo "<br>",$panK;
    $dataPlus10=strtotime("+10 day 6 hour 8 minute 1 seconds");
    $dataMinus10=strtotime("-10 day 6 hour 8 minute 1 seconds");
?>
