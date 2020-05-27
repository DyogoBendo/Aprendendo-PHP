<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo12.css">
	<?php
	$txt = isset($_POST["t"])? $_POST["t"]: "Sem texto";
	$tam = isset($_POST["tam"])? $_POST["tam"]: "12pt";
	$cor = isset($_POST["cor"])? $_POST["cor"]: "#000000"
	
?>
	<title>laksal</title>
	<style type="text/css">
		span.texto{
			color: <?php echo "$cor";?>;
			font-size: <?php echo "$tam"; ?>;
		}
	</style>
</head>
<body>
	<div>
<?php
	echo "<span class='texto'>$txt</span>"
?>

<a href="formulario3.html"> volte</a>
</div>
</body>
</html>