<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>PHP</title>
</head>
<body>
<?php //znacznik kanoniczny
    echo('4tb');
?>

<? //znacznik typu SGML
    echo('<br>hello');
?>
<!--<%  -- znacznik ASP nie wykorzystywany w php 7
    %>-->

<!--
    <script language="php"></script> - nie dziala w php7
-->
    <?php
    //komentarz jedno wierszowy

    /*
     komentarz wielu linijek
    */

    #komentarz jedno wierszowy
    //wyswietlanie inforamcji
    echo("cudzysłów");
    echo('apostrofy<br>');
    echo "jakistamtekst";
    echo 'jakistamtekst2';

    echo 18;
    echo '<br>Masz 18 lat';
    echo "<br>Masz ", 18, " lat";

    echo "<h2>Nagłówek 2</h2>";
    echo "<h2 style='color:blue;font-size: 100px;'>Witrynki</h2>";
    print "egzamin",18; //Parse error: syntax error







    ?>

</body>
</html>
