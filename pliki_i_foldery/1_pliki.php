<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Foldery i pliki</title>
</head>
<body>
    <ul>
    <?php
        $dir ="../test";
        if($fd= opendir($dir)){
            while(($plik = readdir($fd)) !== false){
            if($plik !="." && $plik !="..")
            echo "<li>$plik</br>";
        }
        } else {
            exit("nie mogę otworzyć katalogu \$dir");
        }

        closedir($fd);
    ?>
    </ul>
</body>
</html>
