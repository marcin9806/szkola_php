<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>PHP</title>
</head>
<body>
<?php
    echo "<h2 style='text-align:center'>";
        echo "Witamy na stronie!";
    echo "</h2>";
    //include "../imie.php";
    //include "../imie.php";
    //@include "../imie.php"; i po błędzie przez @.

    require "../imie.php";
    echo "Tekst po błędzie";
?>

</body>
</html>
