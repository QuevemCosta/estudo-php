<!DOCTYPE html>
<html>
	<head>
		<title>Adicionando tags padrão e de impreção em php</title>
		<meta charset="utf-8">
		<style type="text/css">
			
			*{
				padding: 0;
				margin: 0

			}
			body{
				background: #e6e6e6;

			}
			#principal{
				width: 700px;
				margin: 150px auto;
				background: #086A87;
				border: 2px solid grey;

			}
			a{
				text-decoration: none;
				color:#fff;
				padding: 3px 10px;
				margin:2px;
			}
			a:visited{
				color: #fff;
			;
			}
			a:hover{
				color:#fff;
				text-decoration: underline;
			}
			h1{
				margin: 10px auto;
				width: 350px;
				color: #fff;
				text-decoration:underline;
			}
			li{
				list-style-type: none;
				margin:5px 0;
			}


		</style>
	</head>
	<body>

		<div id="principal">
			<h1>Exercicios efetuados php</h1>

			<ul>
				
				<li><a href="cast_tipos.php">Sasting</a></li>
			
				<li><a href="operadores_aritimeticos.php">Operadores aritimeticos</a></li>

				<li><a href="operadores_aritimeticos_atribuicao.php">Operadores aritimeticos/atribução</a></li>

				<li><a href="operadores_incremento_decremento.php">Operadores de incremento e decremento</a></li>
			</ul>


			
			<br>
		</div>

	

		<?php
			$x =1;
		?>
		

	</body>
</html>