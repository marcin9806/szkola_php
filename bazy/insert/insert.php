<?php
    $polaczenie = new mysqli('localhost','root','','przychodnia4tb');

    if(!$polaczenie->connect_error){
    if(!empty($_POST['imie']) &&
       !empty($_POST['nazwisko']) &&
       !empty($_POST['choroby_przewlekle']) &&
       !empty($_POST['uczulenia']) &&
       !empty($_POST['choroba']) &&
       !empty($_POST['leki_przepisane']) &&
       !empty($_POST['opis'])){
/*           $imie = $_POST['imie'];
           $nazwisko = $_POST['nazwisko'];
           $choroby_przewlekle = $_POST['choroby_przewlekle'];
           $uczulenia = $_POST['uczulenia'];
           $choroba = $_POST['choroba'];
           $leki_przepisane = $_POST['leki_przepisane'];
           $opis = $_POST['opis'];*/
        $imie = $polaczenie->real_escape_string(htmlentities($_POST['imie']));
        $nazwisko = $polaczenie->real_escape_string(htmlentities($_POST['nazwisko']));
        $choroby_przewlekle = $polaczenie->real_escape_string(htmlentities($_POST['choroby_przewlekle']));
        $uczulenia = $polaczenie->real_escape_string(htmlentities($_POST['uczulenia']));
        $choroba = $polaczenie->real_escape_string(htmlentities($_POST['choroba']));
        $leki_przepisane = $polaczenie->real_escape_string(htmlentities($_POST['leki_przepisane']));
        $opis = $polaczenie->real_escape_string(htmlentities($_POST['opis']));
    }else{
        header('location:przychodnia.php');
    }
        $sql = "INSERT INTO `pacjenci`(`imie`, `nazwisko`, `choroby_przewlekle`, `uczulenia`, `choroba`, `leki_przepisane`, `opis`) VALUES ('$imie','$nazwisko','$choroby_przewlekle','$uczulenia','$choroba','$leki_przepisane','$opis')";

        if($rezultat=$polaczenie->query($sql)){
            header('location:przychodnia.php');
        }else{
            echo "błędne zapytanie";
        }

    }else{
        echo "Błędne połączenie";
    }
?>
