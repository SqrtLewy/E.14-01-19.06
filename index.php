<!doctype html>

<head>
	<meta charset="UTF-8" />
	<title>Sklep papierniczny</title>
	<link rel="stylesheet" href="styl.css" type="text/css">
</head>

<body>

<?php
$connection = @mysqli_connect('localhost', 'root', '');
$db = @mysqli_select_db('sklep', $connection);
mysqli_close($connection); 

?>

<div id="strona">
	
	<div id="baner">
		<h1>W naszym sklepie internetowym kupisz najtaniej</h1>
	</div>
	
	<div id="blok_lewy">
	<h3>Promocja 15% obejmuje artykuły:</h3>
		<ul>
			<li>Gumka do mazania</li>
			<li>Cienkopis</li>
			<li>Pisaki 60 szt.</li>
			<li>Markery 4 szt.</li>
		</ul>
	</div>
	
	<div id="blok_srodkowy">
	<h3>Cena wybranego artykuły w promocji"</h3>
	<form action="index.php" method="POST">
	<select name="listarozwijana">
		<option value="gumka">Gumka do mazania</option>
		<option>Cienkopis</option>
		<option>Pisaki 60 szt.</option>
		<option>Markery 4 szt.</option>
	</select>
		<button type="button">WYBIERZ</button>
	</form>
	</div>
	
	<div id="blok_prawy">
	<h3>Kontakt</h3>
	<p>telefon: 123123123 <br> e-mail:<a href ="bok@sklep.pl">bok@sklep.pl</a></p>
	
	<img src="promocja2.png" alt="promocja" />
	
	</div>
	
	<div id="stopka">
	
	
	<h4>Autor strony Arkadiusz Lewicki</h4>
	</div>
</div>
</body>

</html>