<?php
$id=$_GET['id'];
$polaczenie=mysqli_connect('localhost','root','','przychodniatd');
if(!$polaczenie->connect_error){
    $sql="DELETE FROM `pacjenci` WHERE `pacjenci`.`id` = '$id'";
    if(mysqli_query($polaczenie,$sql)){
         mysqli_close($polaczenie);
        header('location: przychodnia.php');
    }
    else echo "Nieprawidlowe zapytanie: ".$sql;
} else echo "Blad";
?>
