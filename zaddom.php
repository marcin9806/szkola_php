<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
	<style>
		html,body{
		margin: 0px;
		padding: 0px;
		height: 100%;
		width: 100%;
		background-color: #eee;
		}
		#b{
			color: green;
		}
		#a{
			color: red;
		}
		#c{
			width: 10%;
		}
		[type=text]{
			width: 25%;
		}
		form{
		margin-left: 10px;
		}
		.ugly{
			text-decoration: underline;
			font-weight: bold;
		}
	</style>
    <body>
        <form method="post">
            <h1>Cenzura tak o</h1>
            Podaj zdanie do ocenzurowania: <input type="text" name="text">
            <input type="submit" name="confirm" value="Prześlij :)">

<?php


$badWords = ["kurka","kaczuszka","hak","piernik","costam","ryk","pyssa"];
$goodWords = ["k****","k********","h**","p******","c*****","r**","p****"];

if(isset($_POST["text"])){
	$text = $_POST["text"];
	$text2 = str_replace($badWords, $goodWords, $text);

	$com = <<<COM
<p>Tak wyglądało Twoje zdanie: <span id="a">$text</span>.</p>
<p>A tak powinno wyglądać to zdanie: <span id="b">$text2<span>.</p>
COM;

echo $com;
}
function funkcja($a, $b){
	$c = 0;
	$d = strlen($b);
	while(strstr($a,$b) !== false){
		$c++;
		$a = substr($a,strpos($a,$b)+$d);
	}
	return $c;
}
?>
		</form>
		<form method="post">
			<h1>A może chcesz wyszukać jakiś znaków w zdaniu?</h1>
			Czego szukasz? <input id="c" name="sirczu" type="text"><br>
			W czym tego szukasz? <input name="wat" type="text">
			<input type="submit" value="szukaj">
			<h3>
<?php
if(isset($_POST["sirczu"])){
	$ss = $_POST["sirczu"];
	$wat = $_POST["wat"];
	if(funkcja($wat,$ss) != 0){
		echo "Znalezionio ".funkcja($wat,$ss)." wystąpień";
}else{
	echo "Nie ma wystąpień";
}}
?>
		</h3>
		</form>
    </body>
</html>
