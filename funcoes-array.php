<!DOCTYPE html>
<html>
	<head>
		<title>Funções para tratamentos de arrays</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php 
			/*
			$array  = array();
			$retorno = is_array($array);//saida true ou false
			if ($retorno) {
				echo "Sim é um array!";
			}else{
				echo 'Não, não é um array!';
			}*/

			/*$array = array(1 => 'a', 7=>'b',18=>'c');
			echo "<pre>";
			print_r($array);			
			echo "</pre>";

			$chaves_arrays = array_keys($array);
			echo "<pre>";
			print_r($chaves_arrays);			
			echo "</pre>";*/

			/*$array  = array('teclado', 'mouse', 'cabo hdmi','fonte atx','notbook','gabinete','monitor');
			echo "<pre>";
			print_r($array);			
			echo "</pre>";
			sort($array);//retorna true or false para tentativa de ordenação
			echo "<pre>";
			print_r($array);			
			echo "</pre>";*/

			/*$array  = array('teclado', 'mouse', 'cabo hdmi','fonte atx','notbook','gabinete','monitor');
			echo "<pre>";
			print_r($array);			
			echo "</pre>";
			asort($array);//retorna true or false para tentativa de ordenação
			echo "<pre>";
			print_r($array);			
			echo "</pre>";*/

			$array  = array('teclado', 'mouse', 'cabo hdmi','fonte atx','notbook','gabinete','monitor');
			echo count($array);//retorna um inteiro com a qunatidade de elemto			
			echo "<pre>";
			print_r($array);			
			echo "</pre>";


		 ?>
	</body>
</html>