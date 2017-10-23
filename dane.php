<?php
/*$imie=$_GET["imie"];
$nazwisko=$_GET["nazwisko"];

if(empty($imie)) if(empty($nazwisko)) echo "Wpisz imię i nazwisko"; else echo "Wpisz imię";
else if(empty($nazwisko)) echo "Wpisz nazwisko";
else echo "<span style=\"color: red;\">".$imie." </span>".$nazwisko;*/

/*$login=$_POST["login"];
$pass=$_POST["pass"];

if(!empty($login)&&!empty($pass)) echo "Login: ".$login."<br>Hasło: ".$pass;
else echo "Nie wprowadziłeś wszystkich danych.";
*/
if(!isset($_GET["kolor"])) header("location: formularz.php");
else echo "Zaznaczyłeś kolor ".$_GET["kolor"];
?>
