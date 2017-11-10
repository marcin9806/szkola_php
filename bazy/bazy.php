<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styl.css">
<meta charset="utf-8">
    <title>Połączenie z bazą danych</title>
</head>
<body>
    <?php
    //połączenie z serwerem - proceduralne
    if($polaczenie = mysqli_connect("localhost",'root','')){
        echo "Połączyłeś się z serwerem <br>";
        }else{
        echo "Nie połączyłeś się z serwerem <br>";
    }

    if(mysqli_select_db($polaczenie, 'weterynarz4tb')){
        echo 'Prawidłowe połączenie <br>';
    }else{
        echo 'Nieprawidłowo połączyłeś się z bazą <br>';
    }

    $sql = "SELECT * FROM `uslugi`";

    $rezultat = mysqli_query($polaczenie,$sql);
    if($rezultat = mysqli_query($polaczenie,$sql)){
        echo "Prawidłowe zapytanie <br>";
    }else {
        echo "nieprawidłowe zapytanie <br>";
    }

    //wyświetlenie tabeli z bazy danych weterynarz4tb

    echo <<<TABELA
    <table>
    <tr>
    <th>ID</th>
    <th>Nazwa</th>
    <th>Cena</th>
    </tr>
TABELA;

    while($wiersz = mysqli_fetch_row($rezultat)){
        echo <<<WIERSZ
        <tr>
        <td>$wiersz[0]</td>
        <td>$wiersz[1]</td>
        <td>$wiersz[2]</td>
        </tr>
WIERSZ;
    mysqli_close($polaczenie);
    }

    echo "</table>";





    ?>
</body>
</html>
