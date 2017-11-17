<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sesja</title>
</head>
<body>
    <?php if(isset($_GET['usunSesje'])) session_destroy(); ?>
    <?php echo $_SESSION['imie'];?><br>
    Identyfikator sesji: <?php echo session_id();?><br>
    <a href="sesja1.php">Następna strona</a>
    <a href="sesja1.php?usunSesje=">Usuń sesję</a>

</body>
</html>
