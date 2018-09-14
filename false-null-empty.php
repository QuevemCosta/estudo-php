<!DOCTYPE html>
<html>
<head>
	<title>False null  empty</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

		$funcionario1 = null;
		$funcionario2 = '';
		$funcionario3 = false;
		if (is_null($funcionario1)) {
			echo "A variavel possue o valor null";
		}else{
			echo "Não a variavel não possue o valor null";

		}
		echo '<br>';

		if (is_null($funcionario2)) {
			echo "A variavel possue o valor null";
		}else{
			echo "Não a variavel não possue o valor null";

		}
		echo "<hr>";
		if (empty($funcionario1)) {
			echo "Sim a variavel está vasia";
		}else{
			echo "Não a variavel não está vasia";

		}
		echo '<br>';

		if (empty($funcionario2)) {
			echo "Sim a variavel está vasia";
			
		}else{
			echo "Não a variavel não está vasia";


		}
		echo '<hr>';
		if (is_null($funcionario3)) {
			echo "A variavel possue o valor null";
		}else{
			echo "Não a variavel não possue o valor null";

		}
		
		echo "<br>";

		if (empty($funcionario3)) {
			echo "Sim a variavel está vasia";
			
		}else{
			echo "Não a variavel não está vasia";


		}


	?>

</body>
</html>