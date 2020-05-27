<!DOCTYPE html>
<html>
<head>
	<title>lakslas</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo12.css">
</head>
<body>
	<div>
		<?php
		$i = 1;
		while ($i <= 5) {
			$v = "num".$i;
			$url = "v".$i;
			$$v = isset($_GET[$url])?$_GET[$url]:0;
			$i++;
		}

		$i = 1; 
		while ( $i <= 5) {
			$v = "num".$i;
			echo "Valor $i : ".$$v. "<br>";
			$i ++;
		}

		?>
	</div>

</body>
</html>