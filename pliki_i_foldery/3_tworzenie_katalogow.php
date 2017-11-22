<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sortowanie folderów i plików</title>
</head>
<body>
    <form>
        Dodaj folder: <input type="text" name="folder">
        <input type="submit" name="przycisk" value="Dodaj folder"><hr>
    </form>
    <?php

        $dir="../test";
        if(!isset($_GET['sort'])) $pliki=scandir($dir,0);
        else $pliki=scandir($dir,$_GET['sort']);

        if(isset($_GET["przycisk"]) && !empty($_GET["folder"])){
        $folder=$_GET["folder"];
        if(file_exists("../test/".$folder)===false) mkdir("../test/".$folder);
        else echo "Folder istnieje";
        }

        echo "<ul>";
        //$pliki=scandir($dir,0); //sprtowanie rosnąco, domyślnie
        //$pliki=scandir($dir,1); //sprtowanie malejąco
        echo "<ul>";
        foreach($pliki as $wartosc){
            if($wartosc != "." && $wartosc != "..") echo "<li>".$wartosc."</li>";
        }
    ?>
    </ul>
    <?php
        if(!isset($_GET['sort'])) echo "<a href=\"3_tworzenie_katalogow.php?sort=1\">Sortuj malejąco</a>";
        else if($_GET['sort']==0) echo "<a href=\"3_tworzenie_katalogow.php?sort=1\">Sortuj malejąco</a>";
        else echo "<a href=\"3_tworzenie_katalogow.php?sort=0\">Sortuj rosnąco</a>";
    ?>
</body>
</html>
