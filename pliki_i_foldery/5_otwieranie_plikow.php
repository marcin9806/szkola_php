<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Otwieranie plików</title>
</head>
<body>
    <?php

        $wolneMiejsce=disk_free_space("/"); //bajty
        $wolneMiejsce=round($wolneMiejsce/(1024**3),2); //gigabajty

        echo "Wolne miejsce na partycji: $wolneMiejsce GiB<br>";

        $partycja=disk_total_space("/");
        $partycja=round($partycja/(1024**3),2); //gigabajty
        echo "Wielkość partycji: $partycja GiB";








        $plik="matura.txt";
        if(!$fd=@fopen("../test/$plik","rb")) echo "Nie można otworzyć pliku";
        else {
            $rozmiar=filesize("../test/$plik");
            $tekst=fread($fd,$rozmiar);
            fclose($fd);
        }
    ?>
    <form>
        <textarea name="area" rows="10" cols="50"><?php echo $tekst;?></textarea><br>
        <input type="submit" name="przycisk" value="Zapisz">
    </form>
    <?php
        if(isset($_GET["przycisk"])){
            $nowyTekst = $_GET["area"];
            if(!$fd=@fopen("../test/$plik","wb")) echo "Nie można otworzyć pliku";
            else {
                if(!fwrite($fd,$nowyTekst)) echo "Błąd zapisu";
                else header("location: 5_otwieranie_plikow.php");
            }
        }
    ?>
</body>
</html>
