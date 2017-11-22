<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sortowanie folderów i plików</title>
</head>
<body>
    <?php
        $dir="../test";
        if(!isset($_GET['sort'])) $pliki=scandir($dir,0);
        else $pliki=scandir($dir,$_GET['sort']);
        //$pliki=scandir($dir,0); //sprtpwanie rosnąco, domyślnie
        //$pliki=scandir($dir,1); //sprtpwanie malejąco
        echo "<ul>";
        foreach($pliki as $wartosc){
            if($wartosc != "." && $wartosc != "..") echo "<li>".$wartosc."</li>";
        }
    ?>
    </ul>
    <?php
        if(!isset($_GET['sort'])) echo "<a href=\"2_sortowanie.php?sort=1\">Sortuj malejąco</a>";
        else if($_GET['sort']==0) echo "<a href=\"2_sortowanie.php?sort=1\">Sortuj malejąco</a>";
        else echo "<a href=\"2_sortowanie.php?sort=0\">Sortuj rosnąco</a>";
    ?>
</body>
</html>
