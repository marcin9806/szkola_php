<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="weterynarz.css">
        <meta charset="utf-8">
        <title>Weterynarz</title>
    </head>
    <body>
        <div id="baner">
            <h1>GABINET WETERYNARYJNY</h1>
        </div>
        <div id="lewy">
            <h2>PSY</h2>
            <!--skrypt1-->
            <?php
            //https://egzamin-e14.blogspot.com/2017/10/arkusz-e14-03-1706.html
                $polaczenie=mysqli_connect('localhost','root','','weterynarz4tb');
                mysqli_set_charset($polaczenie,'utf8');
                $zapytanie="SELECT `id`,`imie`,`wlasciciel` FROM `zwierzeta` WHERE `rodzaj`=1";
                if($rezultat=mysqli_query($polaczenie,$zapytanie)){
                    while($wiersz=mysqli_fetch_array($rezultat)){
                        echo <<<WIERSZ
                        {$wiersz["id"]} {$wiersz["imie"]} {$wiersz["wlasciciel"]}<br>
WIERSZ;
                    }
                }
            ?>
            <h2>KOTY</h2>
            <!--skrypt2-->
            <?php
            //https://egzamin-e14.blogspot.com/2017/10/arkusz-e14-03-1706.html
                $zapytanie="SELECT `id`,`imie`,`wlasciciel` FROM `zwierzeta` WHERE `rodzaj`=2";
                if($rezultat=mysqli_query($polaczenie,$zapytanie)){
                    while($wiersz=mysqli_fetch_array($rezultat)){
                        echo <<<WIERSZ
                        {$wiersz["id"]} {$wiersz["imie"]} {$wiersz["wlasciciel"]}<br>
WIERSZ;
                    }
                }
            ?>
        </div>
        <div id="srodek">
            <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
            <?php
            //https://egzamin-e14.blogspot.com/2017/10/arkusz-e14-03-1706.html
                $zapytanie="SELECT `imie`, `telefon`, `szczepienie`, `opis` FROM `zwierzeta`";
                if($rezultat=mysqli_query($polaczenie,$zapytanie)){
                    while($wiersz=mysqli_fetch_array($rezultat)){
                        echo <<<WIERSZ
                        <p style="border-bottom: 1px solid black">
                        Pacjent: {$wiersz["imie"]}<br>
                        Telefon właściciela: {$wiersz["telefon"]}, ostatnie szczepienie: {$wiersz["szczepienie"]}, informacje: {$wiersz["opis"]}<br>
                        </p>
WIERSZ;
                    }
                }
                mysqli_close($polaczenie);
            ?>

        </div>
        <div id="prawy">

        </div>
    </body>
</html>
