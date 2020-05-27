<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
		
	<?php
	$n = array('7' => 5 , '12' => 4, 6, 9); // chaves personalisaveis
	unset($n[7]);
	$n[] = rand() % 100;
	print_r($n);
	//////////////////////////////

	$v = range(5, 30, 5); // Comeco || Fim || Contagem para chegar no fim
	print_r($v);
	foreach ($v as $valor) {
		echo "$valor <br>";
	}

	///////////////////////////////////////

	$loucura = array("nome"=> "Ana", "Peso" => 79, "Idade" => 15); // chaves associativas
	$loucura["fuma"] = true;
	foreach($loucura as $campo => $valor){
		echo "Para o $campo esse eh o valor: $valor <br>";
	}
	print_r($loucura);

	////////////////////////////////////////

	$m = array("Nome" => array("Massa" => 6, 4),
			   array(5,7),
			   array(8,9));
	$m[0][1] = 15;
	print_r($m);

	?>
	
	</pre>

</body>
</html>