<?php

    $dni = 30;
    if(!isset($_COOKIE['licznik'])){
        $licznik = 1;
    }else{
        $licznik = intval($_COOKIE['licznik']);
        $licznik++;
    }

    setcookie('licznik',"$licznik",time()+60*60*24*$dni);




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cookie</title>
</head>
<body>
    <?php
        if($licznik == 1){
            echo "LIczba odwiedzin w ciagu ostatnich $dni dni:
            <span style=\"color:lime\">$licznik</span> raz";
        }else{
            echo "LIczba odwiedzin w ciagu ostatnich $dni dni:
            <span style=\"color:lime;background-color:hotpink;\">$licznik</span> raz";
        }
    ?>
</body>
</html>
