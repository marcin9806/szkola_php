<?php
session_start();
$_SESSION['imie'] = "Oliwia";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sesja</title>
</head>
<body>
    Witamy <?php echo $_SESSION['imie'];?> na stronie!<br>
    Identyfikator sesji: <?php echo session_id();?><br>
    <a href="sesja1.php">Następna strona</a>
</body>
</html>
