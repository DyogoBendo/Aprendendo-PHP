<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo12.css">
	<title>legal</title>
</head>
<body>
	<div>
		<form method="post" action="while3.php">
			Inicio: <input type="number" name="num1"> <br>
			Final: <input type="number" name="num2"> <br>
			<label for="opcao">Incremento: </label> <select id="opcao" name="escolha">
				<?php
				for ($i=1; $i <= 5 ; $i++) { 
					echo "<option> $i </option <br>";
				}
				?>
			</select>
			<input type="submit" value="Enviar">
		</form>
	</div>

</body>
</html>