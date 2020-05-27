<!DOCTYPE html>
<html>
<head>
	<title>massa</title>
</head>
<body>
<?php
	$p = "leite";
	$pr = 4.5;
	printf("O %s custa R$ %.2f", $p, $pr); //%d, $u, %f e %s
	echo "<br> <br>";
	//////////////////////////
	$v[0] = 4;
	$v[1] = 2;
	$v[2] = 3;
	$v[3] = 5;
	print_r($v);
	echo "<br> <br>";
	$v2 = array(3, 4, 8, 9);
	var_dump($v2);
	echo "<br> <br>";
	///////////////////////////
	$texto = "Eu acho extremamente cansativo ter que escrever um texto gigante apenas para provar o ponro e a perspectiva triste solene so ser humano de se mostrar esoecial";
	$resumo = wordwrap($texto, 10, "<br>\n", true);
	echo "$resumo";
	echo "<br> <br>";
	////////////////////////////////////////////
	$palavra = "Astrolopitecus";
	$tam = strlen($palavra);
	echo "O tamanho da palavra $palavra eh: $tam";
	echo "<br> <br>";
	//////////////////////////////////////

	$nome = "   Jose da Silva   ";
	$novo = trim($nome); //Apaga os espacos sobrando. Ha tambem o ltrim, que apaga so do inicio e o Rtrim eh o oposto

	////////////////

	$frase = "Eu vou estudar PHP";
	$conta = str_word_count($frase, 0); // 0 conta, 1 cria um vetor com as palavras e 2 cria um vetor com as letras 
	echo "Numero de palavras na frase $frase: $conta";
	echo "<br> <br>";
	////////////////////////////////////////////
	$site = "Curso em video";
	$vetor2 = explode(" ", $site); //procura por cada espaco, da string $site, e separa, guardando no $vetor
	print_r($vetor2);
	echo "<br> <br>";
	//////////////////////////////////////
	$nome = "Maria";
	$vetor3 = str_split($nome); //separa cada letra
	print_r($vetor3);
	echo "<br> <br>";
	//////////////////////////////////////
	$vetor[0] = "Dyogo";
	$vetor[1] = "Romagna";
	$vetor[2] = "Bendo";
	$texto = implode("#", $vetor); // join()
	printf($texto);

	echo "<br> <br>";
	//////////////////////////////////////

	$letra = chr(67);
	echo "A letra de codigo ascii 67 eh: $letra";
	echo "<br> <br>";
	//////////////////////////////////////

	$letra = "D";
	$cod=ord($letra);
	echo "O codigo da letra $letra eh $cod";

?>
</body>
</html>