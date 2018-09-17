<!DOCTYPE html>
<html>
	<head>
		<title>Loops | Foreach</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php  

			$itens = ['Sofá','Mesa','Cadeira','Armario','Cuia'];
			echo "<pre>";
				print_r($itens);
			echo"</pre>";

			foreach($itens as $item){
				echo "$item";
				if ($item == 'Mesa') {
					echo " (* Compre uma mesa e ganhe 25% de desconto)";

				}
				echo "<br>";

			}

		 ?>


	</body>
</html>