<!DOCTYPE html>
<html>
	<head>
		<title>Arrey Bidimencional</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

			$lista_coisas = [];
			$lista_coisas ['frutas'] = array(1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva');
			$lista_coisas ['pessoas']  = array( 1 => 'Maria', 2=> 'José', 3 => 'João');
			$lista_coisas ['construtora'] = [1 => 'Cimento',2=> 'Tijolo',3 => 'PVC'];

			echo "<pre>"; 
			print_r($lista_coisas);
			echo "</pre>"; 
			echo '<hr>';
			echo $lista_coisas['frutas'][3];
			echo '<hr>';
			echo $lista_coisas['pessoas'][2];
			echo '<hr>';
			echo $lista_coisas['construtora'][1];



			?>
	</body>
</html>