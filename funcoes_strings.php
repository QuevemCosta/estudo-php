<!DOCTYPE html>
	<html>
	<head>
		<title>funcoes_strings</title>
		<meta charset="utf-8">
	</head>
	<body>

		<h3>Funções para manipulação de strings </h3>
		<?php 

			$texto = 'Curso Completo de PHP <br>';
			$texto2 = 'aqui todas as palavras estã em minusculo';

			// string to lower-> todos cartacteres em minusculas
			echo "Original:<br> $texto";
			echo '<br>Deixando todos caracteres em minusculos?: '.strtolower($texto);
			echo "<hr>";
			//string to upper -> deixa todos 
			echo "Original:<br> $texto";
			echo '<br>Deixando todas as strings em Maiúsculo: '.strtoupper($texto);
			echo "<hr>";
			// upper case forst ->aprimeira string em maiusculo(atua somente sobre o primeiro caractere)
			echo "Original:<br> $texto2";
			echo '<br>A pimeira string em maiusculo: '.ucfirst($texto2);
			echo "<hr>";
			// streng lenght _> tamanho da string(contar a quintidade de caracters existentes de dentro da string) os espaços são contados
			echo "Original:<br> $texto";
			echo '<br>Tamaho da string: '.strlen($texto);
			echo "<hr>";
			//string replase->Substitui uma determinada cadeia de caracters
			// espera 3 parametros. O primeiro é qual cadeia de caracters quermos substituir dentro da string. O segundo parametro é a cadeia de caractes que queremos colocar no lugar da anterior caso esta seja encontrada e como Tercero parametro a string que sera a base desa lógica.
			// upper case forst ->aprimeira string em maiusculo(atua somente sobre o primeiro caractere)
			echo "<br><br>Original:<br> $texto";
			echo 'Substituido cadeia de caracters: <br>';
			echo str_replace('PHP', 'JavaScript', $texto);
			echo "<hr>";

			
			//substr
			echo "<br><br>Original:<br> $texto";
			echo 'Copiar string: <br>';
			echo substr($texto, 1 , 4 );
			//                pivo     posição inicial    quintidade de char   
			echo "<hr>";



		?>
		</p>
	</body>
</html>