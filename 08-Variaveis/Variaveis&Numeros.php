<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
	<div>
	<?php
		$n = 4;
		$no = (int)"10Gustavo";
		echo $no. $n;
		$no = "Gustavo";
		echo "Massa". $no. "Ota". $n. "<br>";
		echo "Eu acho o $no muito $n <br>";
		echo 'Eu acho o $no muito $n', "<br>";

		$n1 = 3;
		$n2 = 2;
		$s = $n1 + $n2;
		$n1 = $_GET["a"];
		$n2 = $_GET["b"]; // Pegar pela url ?a=4%b=5
		echo "A soma entre $n1 e $n2 é: ", ($n1+$n2), "<br>";
		echo "A subtração entre $n1 e $n2 é: ", ($n1-$n2), "<br>";
		echo "A multiplicação entre $n1 e $n2 é: ", ($n1*$n2), "<br>";
		echo "A divisão entre $n1 e $n2 é: ", ($n1/$n2), "<br>";
		echo "O modulo entre $n1 e $n2 é: ", ($n1%$n2), "<br>";
		echo "Valor absoluto de $n1: ", abs($n1) ;
		echo "<br>O valor de $n1 <sup> $n2 </sup> é: ", pow($n1, $n2);
		echo "<br>A raiz quadrada de $n1 é: ", sqrt($n1);
		echo "<br>$n1 arredondado é: ", round($n1); // ceil e floor = ceil arredondando pra cima e o floor pra baixo
		echo "<br> A parte inteira de $n1 é: ", intval($n1);
		echo "<br> O valor de $n2 em reais é: R$", number_format($n2, 2, ",", "."); // numero de casas decimais

	?>
	</div>
</body>
</html>