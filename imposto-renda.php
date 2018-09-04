<!DOCTYPE html>
<html>
	<head>
		<title>Imposto de renda</title>
		<meta charset="utf-8">
		
		</style>
	</head>
	<body>
		<h3>Exercicos imposto de renda</h3>
		<?php 
			function calcularImpostoRenda($salario){
				if( $salario <= 1903.98 ){
					$imposto = 0;

				}
				elseif ($salario >= 1903.99 && $salario <= 2826.65) {
					
					$imposto = ($salario * 7.5)/100;
					
				}
				elseif ($salario >= 2826.66 && $salario <= 3751.05) {
					
					$imposto = ($salario * 15)/100;

				}elseif ($salario >= 3751.06 && $salario <= 4664.68) {
					
					$imposto = ($salario * 22.5)/100;
				}
				elseif ($salario > 4664.68) {

					$imposto = ($salario * 27.5)/100;
				}

				return $imposto;
			}

		 ?>
		 <h2>Valor do imposto de renda</h2>
		 <?php
		 	echo "Imposto de renda: ".calcularImpostoRenda(4664.69);
		 ?>

	</body>
</html>