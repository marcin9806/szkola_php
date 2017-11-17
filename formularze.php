<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FORMULARZE</title>
</head>
<body>
<!--    <form method="get" action="dane.php">
        <input type="text" name="imie"> Imię <br>
        <input type="text" name="nazwisko"> Nazwisko <br>
        <input type="submit">
    </form>-->
<!--    <form method="post" action="dane.php">
        <input type="text" name="login"> Login<br>
        <input type="password" name="password"> Password<br>
        <input type="submit">
    </form>-->
    <form method="get">
        <input type="radio" name="kolor" value="biały">Biały <br>
        <input type="radio" name="kolor" value="czarny">czarny <br>
        <input type="radio" name="kolor" value="czerwony">czerwony <br>
        <input type="radio" name="kolor" value="zielony">zielony <br>
        <input type="submit" value="Wyślij" name="przycisk">
    </form>

    <?php
        if(isset($_GET['przycisk'])){
            if(isset($_GET['kolor'])){
                $kolor = $_GET['kolor'];
                echo "Wybrałeś kolor: ".$kolor;
            } else{
                echo "Nie zaznaczyłeś koloru";
            }
        }
    ?>
</body>
</html>
