<?php
$id = $_GET['id'];
echo $id;

$polaczenie = new mysqli('localhost','root','','przychodnia4tb');

if(!$polaczenie ->connect_error){
$sql="DELETE FROM `pacjenci` WHERE `pacjenci`.`id` = '$id'";
if($sql= $polaczenie->query($sql)){

    $polaczenie ->close();
    header('location: przychodnia.php');

}else{
    echo "Źle pytasz";
}


}else{
    echo "Błąd połączenia";
}

?>
