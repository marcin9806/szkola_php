<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="przychodnia.css">
<meta charset="utf-8">
    <title>Pacjent</title>
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
        if(isset($_GET['przycisk'])){
        $id = $_GET['id'];
        echo $id;
        $zapytanie = "SELECT imie, nazwisko, choroby_przewlekle, uczulenia FROM `pacjenci` WHERE id='$id'";
        if($rezultat = $polaczenie->query($zapytanie)){
            $wiersz = $rezultat->fetch_assoc();
                echo "<p>Imię i nazwisko: {$wiersz['imie']} {$wiersz['nazwisko']}</p>";
                echo "<p>Choroby przewlekłe: {$wiersz['choroby_przewlekle']}</p>";
                echo "<p>uczulenie: {$wiersz['uczulenia']}</p>";

        }else{
            echo "Błędne zapytnaie";
        }
        }
        $polaczenie->close();
    ?>
    </div>
    <div id="stopka"></div>
</body>
</html>
