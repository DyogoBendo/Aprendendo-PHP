<!DOCTYPE html>
<html>
<head>
	<title>Legar</title>
</head>
<body>
<?php
	$nome = isset($_POST["nome"])? $_POST["nome"]:"nao informado";
	$ano = isset($_POST["ano"])? $_POST["ano"]: 0;
	$sexo = isset($_POST["sexo"])? $_POST["sexo"]:"sem sexo";
	$idade = date("Y") - $ano;
	echo "$nome, $sexo, tem $idade anos";
?>
<a href="formulario2.html">Voltar</a>
</body>
</html>