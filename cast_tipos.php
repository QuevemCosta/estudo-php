<!DOCTYPE html>
<html>
	<head>
		<title>Casting de tipos</title>
	</head>
	<body>
		<?php
			$valor= (false );


			//gettype() retor na o tipo da variavel
			echo $valor .' '.gettype ($valor);
			//fazendo o casting de inteiro para float

			$valor = (int) $valor;
			echo '<br>';
			echo $valor.' '.gettype($valor);
		?>

	</body>
</html>