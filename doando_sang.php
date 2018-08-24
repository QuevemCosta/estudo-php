<!DOCTYPE html>
<html>
	<head>
		<title>Doando Sangue</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
			$idade = 16;
			$peso = 60;

			if (($idade >= 16 && $idade <=69) && $peso >=50){
				echo "Atende aos requisitos";
			}
			else{
				echo "Não atende aos requisitos";
			}
		?>

	</body>
</html>