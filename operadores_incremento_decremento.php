<!DOCTYPE html>
<html>
	<head>
		<title>Operadores de incremento e decremento</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h3>Pos-incremento</h3>
		<?php
			$a= 7;

			#Poz incremento
			echo "O valor contido em $a é $a <br>";
			echo'O valor contido em $a apos o incremento é '.$a++.'<br>';
			echo "O valor atualizado é $a ";

		?>
		<h3>Pré-incremento</h3>
		<?php
			$a= 7;

			#Poz incremento
			echo "O valor contido em $a é $a <br>";
			echo'O valor contido em $a pré incremento é '.++$a.'<br>';
			echo "O valor atualizado é $a ";
			
		?>
		<h3>Pos-decremento</h3>
		<?php
			$a= 7;

			#Poz incremento
			echo "O valor contido em $a é $a <br>";
			echo'O valor contido em $a apos o decremento é '.$a--.'<br>';
			echo "O valor atualizado é $a ";
			
		?>
		<h3>Ṕré-decremento</h3>
		<?php
			$a= 7;

			#Poz incremento
			echo "O valor contido em $a é $a <br>";
			echo'O valor contido em $a durandte o decremento é '.--$a.'<br>';
			echo "O valor atualizado é $a ";
			
		?>
	</body>
</html>