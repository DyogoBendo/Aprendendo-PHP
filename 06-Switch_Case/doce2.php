<!DOCTYPE html>
<html>
<head>
	<title>massa</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo12.css">
</head>
<body>
	<div>
		<?php
		$dia = $_GET["ds"]?$_GET["ds"]:0;
		switch ($dia) {
			case '1':
			case '2':
			case '3':
			case '4':
			case '5':
				echo "Tem aula meu companheiro";
				break;
			case '6':
			case '7': 
				echo "Pode ficar tranquilo";
				break;
			default:
				echo "erro";
				break;
		}

		?>
	</div>
</body>
</html>