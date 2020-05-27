<!DOCTYPE html>
<html>
<head>
	<title>legar</title>
</head>
<body>
<?php
	$nome = "gustavo guAnabara";
	echo "Seu nome eh ", strtolower($nome);
	echo "<br> <br>";
	echo "Seu nome eh ", strtoupper($nome);
	echo "<br> <br>";
	echo "Seu nome eh ", ucfirst($nome);
	echo "<br> <br>";
	echo "Seu nome eh ", ucwords($nome);
	echo "<br> <br>";
	echo "Seu nome ao contrario eh ", strrev($nome);
	echo "<br> <br>";
	//////////////////
	$frase = "Estou aprendendo PHP";
	$pos = strpos($frase, "PHP");
	echo "PHP encontrada na posicao $pos";
	echo "<br> <br>";
	$pos = stripos($frase, "php");
	echo "PHP encontrada na posicao $pos";
	echo "<br> <br>";
	//////////////////
	$frase = "Estou aprendendo PHP no curso de PHP";
	$conta = substr_count($frase, "PHP");
	echo "PHP encontrado $conta vezes";
	echo "<br> <br>";
	//////////////////
	$site = "Curso em video";
	$sub = substr($site, -5, 3); // pode ter valores negativos, dai comeca de frente pra traz
	echo "$sub";
	echo "<br> <br>";
	//////////////////
	$nome = "Dyogo";
	$novo = str_pad($nome, 30, "#", STR_PAD_BOTH);
	echo "O $novo eh lindo";
	echo "<br> <br>";
	//////////////////
	$txt = str_repeat("PHP", 5);
	echo "$txt";
	echo "<br> <br>";
	//////////////////
	$frase = "Gosto de estudar matematica! Matematica e legal";
	$novo = str_ireplace("Matematica", "PHP", $frase);
	echo "$novo";



?>
</body>
</html>