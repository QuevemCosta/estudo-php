<!DOCTYPE html>
<html>
	<head>
		<title>Adicionando tags padrão e de impreção em php</title>
		<meta charset="utf-8">
		
		</style>
	</head>
	<body>
		<h3>Funções</h3>
		<?php

			//Função do tipo void
			function exibrBoasVindas(){
				//Lógica da função
				echo 'BemVindo ao Curso de PHP!<br>';
			}
			exibrBoasVindas();	
		
			//função com return
			$largura = 5;
			$comprimento = 10;
			function caucularAreaTerreno($largura, $comprimento) {

				$area = $largura * $comprimento;
				return $area;
			}

			echo caucularAreaTerreno(30,50);
			

		?>
		

	</body>
</html>