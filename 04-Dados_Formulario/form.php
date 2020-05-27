<!DOCTYPE html>
<html>
<head>
	<title>Legal</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
	<?php
		$valor = $_POST['v'];
		$rq = sqrt($valor);
		echo "A raiz quadrada de $valor eh ", number_format($rq, 2);
	?>
	<a href="formulario.html"> Voltar para o formulario </a>
</body>
</html>