<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo12.css">
	<title>Massa</title>
</head>
<body>
	<div>
	<?php
	$a = 5;
	$b = &$a; // estou referenciado b em relação à a, então o que eu mudo em uma muda na outra
	$a = 9;
	echo "$a e $b <br>";

	$x = "abc";
	$$x = "def"; //variavel de variavel
	echo "$x e $abc"; 

	//Operador Unário
	$c = $_GET["z"];
	$maior = $c > $b ? $c:$b;
	echo "<br> <br> $maior";

	$n1 = $_GET["a"];
	$n2 = $_GET["b"];
	$p = $_GET["m"];

	$r = $p == "s"?$n1+$n2:$n1*$n2;
	echo "<br>$r";

	$d = 3; 
	$e = "3";
	$r = $d == $e?5:4;
	echo "<br>valor de $r";
	$r =  $d === $e?5:4;
	echo "<br>valor de $r";

	$ano = $_GET["aa"];
	$idade = 2020 - $ano;
	echo "<br>Sua idade é $idade, então votar é: ", ($idade >= 16 && $idade <=18 || $idade >= 65 ? "Opcional":"Obrigatorio");

	?>
	</div>
</body>
</html>