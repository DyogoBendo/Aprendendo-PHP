<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo12.css">
	<title>legal</title>
</head>
<body>
	<div>
		<?php
		$valor = 1;
		$c = $_POST["num"];
		do {
			$valor *= $c;
			$c--;
		} while ($c > 0);
		echo "O valor em fatorial eh: $valor";
		?>
	</div>

</body>
</html>