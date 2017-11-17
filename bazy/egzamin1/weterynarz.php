<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="weterynarz.css">
<meta charset="utf-8">
    <title>Weterynarz</title>
</head>
<body>
    <div id="main">
    <div id="baner">
    <h1>GABINET WETERYNARYJNY</h1></div>
    <div id="lewy">
        <H2>PSY</H2>
<!--skrypt 1-->
    <?php
    $polaczenie = mysqli_connect('localhost','root','','weterynarz4tb');
    mysqli_set_charset($polaczenie,'utf8');
    $zapytanie = "SELECT id,imie,wlasciciel FROM `zwierzeta` WHERE rodzaj = 1";
    if($rezultat = mysqli_query($polaczenie,$zapytanie)){
        while($wiersz = mysqli_fetch_array($rezultat)){
            echo <<<WIERSZ
            {$wiersz['id']}
            {$wiersz['imie']}
            {$wiersz['wlasciciel']}
            <br>
WIERSZ;
        }
    }

    ?>
    <h2>KOTY</h2>
    <!--skrypt 1-->
    <?php
    $zapytanie = "SELECT id,imie,wlasciciel FROM `zwierzeta` WHERE rodzaj = 2";
    if($rezultat = mysqli_query($polaczenie,$zapytanie)){
        while($wiersz = mysqli_fetch_array($rezultat)){
            echo <<<WIERSZ
            {$wiersz['id']}
            {$wiersz['imie']}
            {$wiersz['wlasciciel']}
            <br>
WIERSZ;
        }
    }
    ?>
        </div>
    <div id="srodkowy">
    <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
        <?php
    $zapytanie = "SELECT imie, telefon, szczepienie, opis FROM `zwierzeta`";

    if($rezultat = mysqli_query($polaczenie,$zapytanie)){
        while($wiersz = mysqli_fetch_array($rezultat)){
            echo <<<WIERSZ
            <p>Pacjent: {$wiersz['imie']}<br>
            Telefon właściciela: {$wiersz['telefon']}
            Ostatnie szczepienie: {$wiersz['szczepienie']}
            Informacje: {$wiersz['opis']}</p>
            <hr>
WIERSZ;
        }
    }
        mysqli_close($polaczenie);

        ?>
    </div>
    <div id="prawy"><h2>WETERYNARZ</h2>
    <p id="akap">Krzysztof <br>Nowakowski, <br>lekarz <br>weterynarii </p>
        <img src="logo-mini.jpg">
    <h2>GODZINY PRZYJĘĆ</h2>

    <table>
    <tr>
        <td>Poniedziałek</td>
        <td>15:00 - 19:00</td>
    </tr>
    <tr>
        <td>Wtorek</td>
        <td>15:00 - 19:00</td>
    </tr>
    </table>
        </div>
        </div>
</body>
</html>
