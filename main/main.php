<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Zajęcia2</title>
    </head>
    <body>
        <?php //znacznik kanoniczny
            echo '<h2 style="text-align: center;">';
            echo 'Chadzia? Chadzia';
            echo '</h2>';
            include "../imie.php"; //przy bledzie dalsza czesc kodu bedzie realizowana
            @include "../imie2.php"; //przy bledzie dalsza czesc kodu bedzie realizowana, nie wyswietli komunikatu o bledzie
            echo "<br>tekst po błędzie<br>";
            require "../imie.php"; //przy bledzie dalsza czesc kodu NIE bedzie realizowana, FATAL ERROR
            echo "<br>tekst po błędzie<br>";
        ?>
    </body>
</html>
