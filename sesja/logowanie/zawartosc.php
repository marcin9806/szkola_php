<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Zaloguj</title>
</head>
<body>

    <?php
    if(isset($_GET['logout'])) {session_destroy(); header("location: logowanie.php");}
    if(!isset($_SESSION['zalogowany_login'])) header("location: logowanie.php?msg=najpierwZaloguj");
    else $login=$_SESSION['zalogowany_login'];
    echo "Witaj $login!<br>";
    ?>
    <form><input type="submit" value="Wyloguj" name="logout">
    </form>
</body>
</html>
