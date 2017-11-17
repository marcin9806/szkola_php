<?php
session_start();
unset($_SESSION['imie']); //usunięcie zmiennej sesyjnej
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sesja</title>
</head>
<body>
    Witamy <?php echo $_SESSION['imie'];?> na trzeciej stronie!<br>
    Identyfikator sesji: <?php echo session_id();?><br>
    <a href="sesja1_2.php">Początkowa strona</a>
</body>
</html>
