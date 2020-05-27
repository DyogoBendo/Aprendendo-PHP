<!DOCTYPE html>
<html>
<head>
	<title>lko</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo12.css">
</head>
<body>
	<div>
		<?php
			$n = isset($_GET["num"])?$_GET["num"]:0;
			$op = isset($_GET["escolha"])?$_GET["escolha"]:1;
			switch ($op) {
				case '1':
					$valor = 2*$n;
					$texto = "O dobro";
					break;
				case '2':
					$valor = sqrt($n);
					$texto = "A raiz quadrada";
					break;
				case '3':
					$valor = pow($n, 3);
					$texto = "elevado ao cubo";
					break;
				default:
					echo "Erro";
					break;
			}
			echo "$texto de $n eh igual a: $valor";
		?>
		<br><br>
		<a href="sweet1.html"> vorta </a>
	</div>

</body>
</html>