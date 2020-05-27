<!DOCTYPE html>
<html>
<head>
	<title>massa</title>
</head>
<body>
<?php
	function soma($a, $b = 4){
		$s = $a + $b;
		return $s;
	}
	$res = soma (3, 5);
	echo "<p>$res</p>";
	echo soma(8,20);
	$res = soma(7,9);
	echo "<p>$res</p>";
	$res = soma(7);
	echo "<p>$res</p>";
?>
</body>
</html>