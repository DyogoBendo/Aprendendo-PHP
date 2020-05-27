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
	if ($i >= 18) {
		$v = "ja pode votar";
		$d = "ja pode dirigir";
	}
	else{
		$v = "Nao pode votar";
		$d = "Nao pode dirigir";
	}
	echo "<br> Com essa idade voce: $v e $d";

	?>
	<br><a href="condition.html">volta</a>
	</div>

</body>
</html>