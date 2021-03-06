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

        if(isset($_GET["usun"])){
            $usun=$_GET["usun"];
            if(file_exists("../test/$usun"))
                if(!@rmdir("../test/$usun")) //usuwanie folderu
            unlink("../test/$usun"); //usuwanie pliku
        }

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

        $dir="../test";
        if(!($folder=opendir($dir))){
            exit("Nie można otworzyć folderu");
        }else{
            $sortuj=0;
            $pliki=array();
            $foldery=array();
            $dane=scandir($dir, $sortuj);

            foreach($dane as $wartosc){
                if($wartosc !='.' && $wartosc!='..'){
                    if(is_file($dir."/".$wartosc)){
                        $pliki[]=$wartosc;
                    }else $foldery[]=$wartosc;
                }
            }
        }

        foreach($foldery as $wartosc){
            if($wartosc != "." && $wartosc != "..") echo "<li>".$wartosc."<a href=\"3_tworzenie_katalogow.php?usun=$wartosc\">Usuń</a><br>"."</li>";
        }
        foreach($pliki as $wartosc){
            if($wartosc != "." && $wartosc != "..") echo "<li>".$wartosc."<a href=\"3_tworzenie_katalogow.php?usun=$wartosc\">Usuń</a><br>"."</li>";
        }
    ?>
    </ul>
    <?php
        if(!isset($_GET['sort'])) echo "<a href=\"3_tworzenie_katalogow.php?sort=0\">Sortuj malejąco</a>";
        else if($_GET['sort']==0) echo "<a href=\"3_tworzenie_katalogow.php?sort=1\">Sortuj roznąco</a>";
    ?>
</body>
</html>
