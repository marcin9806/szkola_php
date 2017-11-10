<?php
if(!$polaczenie=mysqli_connect("localhost","root","","przychodniatd")){
    echo"Błędne połączenie";
}
else{
    mysqli_set_charset($polaczenie,'utf8');
    if(
        !empty($_POST['imie']) &&
        !empty($_POST['nazwisko']) &&
        !empty($_POST['choroby_przewlekle']) &&
        !empty($_POST['uczulenia']) &&
        !empty($_POST['choroba']) &&
        !empty($_POST['leki_przepisane']) &&
        !empty($_POST['opis']) )
    {
 /*       $imie=$_POST['imie'];
        $nazwisko=$_POST['nazwisko'];
        $choroby_przewlekle=$_POST['choroby_przewlekle'];
        $uczulenia=$_POST['uczulenia'];
        $choroba=$_POST['choroba'];
        $leki_przepisane=$_POST['leki_przepisane'];
        $opis=$_POST['opis'];*/
        $imie=$polaczenie->real_escape_string(htmlentities($_POST['imie']));
        $nazwisko=$polaczenie->real_escape_string(htmlentities($_POST['nazwisko']));
        $choroby_przewlekle=$polaczenie->real_escape_string(htmlentities($_POST['choroby_przewlekle']));
        $uczulenia=$polaczenie->real_escape_string(htmlentities($_POST['uczulenia']));
        $choroba=$polaczenie->real_escape_string(htmlentities($_POST['choroba']));
        $leki_przepisane=$polaczenie->real_escape_string(htmlentities($_POST['leki_przepisane']));
        $opis=$polaczenie->real_escape_string(htmlentities($_POST['opis']));
        $sql="INSERT INTO `pacjenci` (`imie`, `nazwisko`, `choroby_przewlekle`, `uczulenia`, `choroba`, `leki_przepisane`, `opis`) VALUES ('$imie', '$nazwisko', '$choroby_przewlekle', '$uczulenia', '$choroba', '$leki_przepisane', '$opis')";
        mysqli_query($polaczenie,$sql);
        mysqli_close($polaczenie);
        header('location:przychodnia.php');
    }
    else{
        header('location:przychodnia.php');
    }
}
?>
