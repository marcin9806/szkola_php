<?php
/*$imie = $_GET['imie'];
$nazwisko = $_GET['nazwisko'];
//echo $imie. " ". $nazwisko;

if(empty($imie) || empty($nazwisko)){
    echo "Nie wprowadziles danych";
}else{
    echo "Twoje imie i nazwisko: "."<span style='color:red'>".$imie."</span>". " "."<span style='color:blue'>".$nazwisko."</span>";
}*/

/*$login = $_POST['login'];
$password = $_POST['password'];

if(!empty($login) && !empty($password)){
    echo "Login: ".$login.'<br>';
    echo "Password: ".$password.'<br>';
}else{
    echo 'Nie wprowadziles wszystkich danych';
}*/
$radio = $_GET['kolor'];
if(isset($radio)){
    echo 'Zaznaczyłeś: '.$radio;
}else{
    //echo 'Nie zaznaczyłeś';
    header('location:formularze.php');
}
?>
