<!DOCTYPE html>
<html>
<head>
	<title>massa</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo12.css">
</head>
<body>
	<div>
		<form method="get" action="while2.php">
			<?php
			$c = 1;
			while ($c <= 5) {
				echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'> <br>";
				$c++;
			}
		?>
			<input type="submit" value="Enviar">
		</form>
	</div>

</body>
</html>