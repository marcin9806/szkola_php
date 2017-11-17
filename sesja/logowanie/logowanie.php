<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Zaloguj</title>
</head>
<body>
    <?php if(isset($_SESSION['zalogowany_login'])) header("location: zawartosc.php");?>
    <?php if(isset($_GET['msg'])) if($_GET['msg']=="najpierwZaloguj") echo "Najpierw musisz się zalogować!<br>";?>
    <form method="POST">
        <input type="text" name="login" placeholder="login"><br>
        <input type="password" name="pass" placeholder="hasło"><br>
        <input type="submit"><br>
    </form>
    <?php if(isset($_POST['login'])&&isset($_POST['pass'])){
        $polaczenie = mysqli_connect('localhost','root','','logowanie4tb');
        $login_post=mysqli_real_escape_string($polaczenie,htmlentities($_POST['login']));
        $pass_post=mysqli_real_escape_string($polaczenie,htmlentities($_POST['pass']));
        if(!mysqli_connect_error($polaczenie)){
            $sql="SELECT `pass` FROM `users` WHERE `user` = '$login_post'";
            if($wyniki=mysqli_query($polaczenie,$sql)){
                if($wynik=mysqli_fetch_array($wyniki)){
                    $pass=$wynik[0];
                    if($pass==$pass_post){
                        $_SESSION['zalogowany_login']=$login_post;
                        header("location: zawartosc.php");
                    }
                    else echo "Złe hasło!";
                }
                else echo"Nie ma takiego loginu";
            }
            else
            {
                echo "Złe zapytanie";
            }
            mysqli_close($polaczenie);
        }
        else echo "Błąd połączenia";
    }?>
</body>
</html>
