<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo12.css">
	<title>massa</title>
</head>
<body>
	<div>
	<?php
	$a = isset($_GET["ano"])?$_GET["ano"]:1900;
	$i = date("Y") - $a;
	echo "Voce nasceu em $a e sua idade eh $i";
	if ($i < 16) {
		$v = "Nao vota";
	}
	elseif ($i >= 16 && $i < 18 || $i > 65) {
		$v = "Voto opcional";
	}
	else{
		$v = "Deve votar";
	}

	echo "<br> Com essa idade voce: $v";

	?>
	<br><a href="condition.html">volta</a>
	</div>

</body>
</html>