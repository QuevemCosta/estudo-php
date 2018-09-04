<!DOCTYPE html>
<html>
	<head>
		<title>Arrey básico</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

			/*//$lista_de_frutas = array('Banana', 'Maçã', 'Morango', 'Uvá','Abacate');
			$lista_de_frutas = ['Banana', 'Maçã', 'Morango', 'Uvá','Abacate'];
			$lista_de_frutas[] = 'Abacaxi';//adicionando novo valor a lista//novo indice

			echo '<pre>';
				print_r($lista_de_frutas);

			echo '<hr>';
			echo '<pre>';
			 	var_dump($lista_de_frutas);*/
			$lista_de_frutas = array(
				'a'=>'Banana',
				'v' =>'Maçã',
				'd' => 'Morango',
				'5'=>'Uvá',
				'r'=>'Abacate');
			$lista_de_frutas['t'] = 'Pera';
			echo'<pre>';
				print_r($lista_de_frutas);
			echo '<br>';
			echo $lista_de_frutas['t'];

		 ?>
	</body>
</html>