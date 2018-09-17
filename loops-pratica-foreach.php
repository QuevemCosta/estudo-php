<!DOCTYPE html>
<html>
<head>
	<title>Loops | praticaforeach</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

		$funcionarios = array(
			array('nome' => 'João', 'salario'=> 2050, 'data de nascimento'=> '22/08/1950'),
			array('nome' => 'Maria', 'salario'=> 3000),
			array('nome' => 'Julia', 'salario'=> 2750),
			);

		echo'<pre>';
			print_r($funcionarios);
		echo'</pre>';

		foreach($funcionarios as $idx => $funcionario){
			foreach ($funcionario as $idx2 => $valores) {
				echo "$idx2-$valores <br>";
				
			}
			echo '<hr>';
		
		}

	  ?>

</body>
</html>