<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="przychodnia.css">
<meta charset="utf-8">
    <title>Przychodnia</title>
</head>
<body>
    <div id="baner"><h1>PRAKTYKA LEKARZA RODZINNEGO</h1></div>
    <div id="lewy"><h3>LISTA PACJENTÓW</h3>
    <?php
        $polaczenie = @new mysqli('localhost','root','','przychodnia4tb');
        if($polaczenie->connect_errno){
           echo "Błąd: ".$polaczenie->connect_errno."<br>";
        }else {
           echo "prawidłowe połączenie<br>";
        }
        $zapytanie = "SELECT id,imie,nazwisko FROM `pacjenci`";
        if($rezultat = $polaczenie->query($zapytanie)){
            while($wiersz = $rezultat->fetch_assoc()){
                echo <<<WIERSZ
                {$wiersz['id']}
                {$wiersz['imie']}
                {$wiersz['nazwisko']}<br>
WIERSZ;
            }

        }else{
            echo "Bledne zapytanie";
        }
            echo "<br><br>";
            echo <<<FORMULARZ
        <form action="pacjent.php">
            Podaj id: <br>
            <input type="number" name="id">
            <input type="submit" name="przycisk" value="Pokaż dane">
        </form>
FORMULARZ;
    ?>
    </div>
    <div id="prawy">
    <?php

    $zapytanie = ""
    ?>




    </div>
    <div id="stopka"></div>

</body>
</html>
