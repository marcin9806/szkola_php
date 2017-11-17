<?php
if(!isset($_COOKIE['wiek']) && empty($_GET['wiek'])){
    include("header.html");
    include("form.html");
    include("footer.html");
}else if(isset($_GET['wiek'])){
    setcookie('wiek',$_GET['wiek'],time()+60*60*24*365);
    include("header.html");
    echo "<p>Dziękujemy za sprzedanie nam swoich danych</p>";
    echo"<p><a href=\"http://wp.pl\">Powrót do wp.pl</a></p>";
    include("footer.html");
}else{
    include("header.html");
    echo "Twój wiek to: ".$_COOKIE['wiek'];
    include("footer.html");
}
?>
