<!DOCTYPE html>
	<html>
	<head>
		<title>Arrays e loops</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php  

			$registro = array(
				array('titulo' => 'Titulo Noticia 1', 'conteudo' => 'Conteudo Noticia 1'),
				array('titulo' => 'Titulo Noticia 2', 'conteudo' => 'Conteudo Noticia 2'),
				array('titulo' => 'Titulo Noticia 3', 'conteudo' => 'Conteudo Noticia 3'),
				array('titulo' => 'Titulo Noticia 4', 'conteudo' => 'Conteudo Noticia 4'),
				array('titulo' => 'Titulo Noticia 5', 'conteudo' => 'Conteudo Noticia 5')


				
				);
			echo'<pre>';
				print_r( $registro);
			echo'</pre>';
			echo'<br><br><hr><br><br>'.count($registro);

			//O php tem um a função chamada count que counta a quantidade de elementos em arrays
			//$idx = 0;
			/*while ($idx < count($registro)) {//ao invez de criar uma condição de valor fixo podemos fazer baseada no valor da função count nativa do php

				//$registro[$idx]['titulo']['conteudo'];//Usamo a variavel $ix como identificador para chamar os elementos do array uma vez que ela inicia em zero e tem o seu valor incrementado dinamicamente a baixo.
				echo'<h2>'.$registro[$idx]['titulo'].'</h2>';
				echo'<p>'.$registro[$idx]['conteudo'].'<p>';
				echo "<hr>";

				$idx++;
			}

			do {

				echo'<h2>'.$registro[$idx]['titulo'].'</h2>';
				echo'<p>'.$registro[$idx]['conteudo'].'<p>';
				echo "<hr>";

				$idx++;
			}while($idx < count($registro));*/

			for($idx = 0;$idx < count($registro);$idx++){
				echo'<h2>'.$registro[$idx]['titulo'].'</h2>';
				echo'<p>'.$registro[$idx]['conteudo'].'<p>';
				echo "<hr>";
			}

		 ?>
	</body>
</html>