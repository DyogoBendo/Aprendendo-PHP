<!DOCTYPE html>
<html>
<head>
	<title>massa</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo12.css">
</head>
<body>
	<div>
	<?php
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$incremento = $_POST["escolha"];

	if ($num1 > $num2) {
		while ($num1 >= $num2) {
			echo "$num1 ";
			$num1 -= $incremento;
		}
	}
	else{
		while ($num1 <= $num2) {
			echo "$num1 ";
			$num1 += $incremento;
		}
	}

	?>
	</div>
</body>
</html>