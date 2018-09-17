<!DOCTYPE html>
<html>
<head>
	<title>Atividade-foreach</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

		$n_sorteado  = array();
		while(count($n_sorteado)<= 5){
			$num = rand(1,60);

			if (!in_array($num, $n_sorteado)) {
					$n_sorteado []= $num;
				}	
			echo "<pre>";
			print_r($n_sorteado);
		}

	  ?>

</body>
</html>