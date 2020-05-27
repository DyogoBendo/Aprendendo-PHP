<!DOCTYPE html>
<html>
<head>
	<title>maskasjak</title>
</head>
<body>
	<pre>
<?php
	$n = array("Nome" => array("Dyogo", "Pedro", "Paulo"), 
		       "Idade" => array(12, 14, 20));
	foreach ($n as $campo => $valor) {
		echo "Informacoes sobre $campo: ";
		foreach ($valor as $vale) {
			echo "$vale ";
		}
		echo "<br>";
	}
	////////////////////////////////////////////////////

	$v = array(5, 7, 9, 12, 17);
	$v[] = 19; // Elemento ao final do vetor
	array_push($v, 7); // Final tambem
	array_pop($v); // Elimina o ultimo elemento
	// Lifo => Last In First Out
	var_dump($v);
	echo count($v). ": Numero de elemento do vetor";

	///////////////////////////////////////
	$s = array('B', 'C', 'E');
	print_r($s);
	array_unshift($s, 'A', 'D'); // Coloca um elemento no inicio do vetor
	print_r($s);
	array_shift($s); // Elimina o primeiro elemento do vetor
	print_r($s);

	/////////////////////////////////////

	$o = array(3, 8, 1, 7, 12, 4);
	print_r($o);
	sort($o); // organiza	
	print_r($o);
	rsort($o); // organiza ao Reverso 
	print_r($o);
	asort($o); // Organiza e cada um mantem o indice original
	print_r($o);
	$o[] = 5;
	arsort($o); //Organiza ao contrario e associoativamente
	print_r($o);
	ksort($o); // organiza as chaves ou indices do vetor
	print_r($o);
	krsort($o); // organiza pelo inverso dos indices
	print_r($o);
?>
</pre>
</body>
</html>