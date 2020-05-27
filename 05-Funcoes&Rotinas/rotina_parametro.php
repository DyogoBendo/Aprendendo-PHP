<!DOCTYPE html>
<html>
<head>
	<title>massa</title>
</head>
<body>
<?php
	function soma(){
		$p = func_get_args();
		$num = func_num_args();
		$resul = 0;
		for ($i=0; $i < $num ; $i++) { 
			$resul += $p[$i];
		}
		return $resul;
	}
	echo soma(1,2,3,4,5,6,7, 20);
?>
</body>
</html>