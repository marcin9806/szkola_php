<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="przychodnia.css">
<meta charset="utf-8">
    <title>Przychodnia usuwanie danych</title>
    <style>
        table,th,tr,td {
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <?php
    $polaczenie = @new mysqli('localhost','root', '','przychodniatd');
    if(!$polaczenie->connect_errno){
        $polaczenie->set_charset('utf8');
        $sort="id";
        if(isset($_GET['sort'])) $sort=$_GET['sort'];
        $sql = "SELECT * FROM pacjenci ORDER BY $sort";
        echo <<<TABELA
        <table>
        <tr>
            <th><a href="przychodnia.php?sort=id">id</a></th>
            <th><a href="przychodnia.php?sort=imie">imie</a></th>
            <th><a href="przychodnia.php?sort=nazwisko">nazwisko</a></th>
            <th><a href="przychodnia.php?sort=choroby_przewlekle">choroby przewlekłe</a></th>
            <th><a href="przychodnia.php?sort=uczulenia">uczulenia</a></th>
            <th><a href="przychodnia.php?sort=choroba">choroba</a></th>
            <th><a href="przychodnia.php?sort=leki_przepisane">leki_przepisane</a></th>
        </tr>

TABELA;



        if($rezultat =$polaczenie->query($sql)){
            while($wiersz = $rezultat->fetch_assoc()){
                echo <<<WIERSZ
                <tr>
                <td>{$wiersz['id']}</td>
                <td>{$wiersz['imie']}</td>
                <td>{$wiersz['nazwisko']}</td>
                <td>{$wiersz['choroby_przewlekle']}</td>
                <td>{$wiersz['uczulenia']}</td>
                <td>{$wiersz['choroba']}</td>
                <td>{$wiersz['leki_przepisane']}</td>
                <td><a href='delete.php?id=$wiersz[id]'>usun</a></td>
                </tr>
WIERSZ;

            }


        }else{
            echo "Błędne zapytanie";
        }
        echo "</table>";
    }else{
        echo "Błąd: ".$polaczenie->connect.errno;
    }
    ?>
    <form action="insert.php" method="post">
        <input type="text" name="imie" placeholder="imie"><br>
        <input type="text" name="nazwisko" placeholder="nazwisko"><br>
        <input type="text" name="choroby_przewlekle" placeholder="choroby_przewlekle"><br>
        <input type="text" name="uczulenia" placeholder="uczulenia"><br>
        <input type="text" name="choroba" placeholder="choroba"><br>
        <input type="text" name="leki_przepisane" placeholder="leki_przepisane"><br>
        <textarea rows="6" name="opis" placeholder="opis"></textarea><br>
        <input type="submit" name="wyslij" value="Wyślij"><br>
    </form>

</body>
</html>
