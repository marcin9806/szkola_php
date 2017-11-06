<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Połączenie z bazą danych</title>
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <?php
        //https://egzamin-e14.blogspot.com/2017/10/arkusz-e14-03-1706.html
        //Połączenie z serwerem - proceduralne, nieobiektowe
            if($polaczenie = mysqli_connect('localhost','root','')){
                echo "Połączyłeś się z serwerem<br>";
            }
            else{
                echo "Nie połączyłeś się z serwerem<br>";
            }

        //Połączenie z bazą danych
            if(mysqli_select_db($polaczenie, 'weterynarz4tb')){
                echo "Połączyłeś się z bazą danych weterynarz4tb<br>";
            }
            else{
                echo "Nie połączyłeś się z bazą danych<br>";
            }
        //Polskie znaki w połączeniu
            mysqli_set_charset($polaczenie,'utf8');

        //Kwerenda
            $kwerenda = "SELECT * FROM `uslugi`";
            if($rezultat = mysqli_query($polaczenie, $kwerenda)){
                echo "Prawidłowe zapytanie<br>";
            }
            else{
                echo "Błędne zapytanie<br>";
            }

        //Wyświetlenie tabeli z bazy danych weterynarz4tb
            echo <<< TABELA
            <table>
                <tr>
                    <th>id</th>
                    <th>nazwa</th>
                    <th>cena</th>
                </tr>
TABELA;
            while($wiersz = mysqli_fetch_row($rezultat)){
                echo<<<WIERSZ
                <tr>
                    <td>$wiersz[0]</td>
                    <td>$wiersz[1]</td>
                    <td>$wiersz[2]</td>
                </tr>
WIERSZ;
            }
            mysqli_close($polaczenie);
            echo "</table>";
        ?>
    </body>
</html>
