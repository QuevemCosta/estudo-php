<!DOCTYPE html>
<html>
	<head>
		<title>Funções para manipular datas</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php 

			echo date('d/m/Y  H:i:s');//recupera a data corrente. Para ver todos os parametros va até php.net
			//

			echo date_default_timezone_get();
			echo '<br>'.date_default_timezone_set('America/Sao_Paulo');

			echo "<br>";
			echo date('d/m/Y H:i');

		?>
	</body>
</html>