<!DOCTYPE html>
<html>
<head>
	<title>Array-Método de pesquisa</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

		$frutas = ['Banana', 'Morango', 'Uva', 'Maçã'];
		/*echo '<pre>';
		print_r ($frutas);
		echo '</pre>';
		echo "<hr>";
		//echo in_array('Uva',$frutas);
		echo "<hr>";
		echo array_search('Uva', $frutas)
		*/

		$lista_coisas = [
			'frutas'=> $frutas,
			'pessoas'=> ['Maria', 'João']

			];

		echo '<pre>';
		print_r ($lista_coisas);
		echo '</pre>';
		echo '<br>';

		echo in_array('Uva',$lista_coisas['frutas']);



	?>
</body>
</html>