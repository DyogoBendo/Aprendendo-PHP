<!DOCTYPE html>
<html>
<head>
	<title>massa</title>
</head>
<body>
	<?php
	function teste($x){ //Passagem por valor 
		$x += 2;
		echo "<p> $x </p>";
	}
	function teste2(&$x){ //Passagem por referencia
		$x += 2;
		echo "<p> $x </p>";
	}

	$a = 5;
	$b = 5;

	teste($a);
	echo $a;
	teste2($b);
	echo "$b";
	?>

</body>
</html>