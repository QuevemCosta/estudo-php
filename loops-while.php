<!DOCTYPE html>
<html>
<head>
	<title>While</title>
	<meta charset="utf-8">
</head>
<body>

	<?php 

		$num1 = 1;
		while ( $num1 <10) {
			
			$num1 ++;

			if ($num1 == 2 || $num1 == 6) {
				continue;
			}
			/*
			$num += 5;
			if ($num1 =7){
				breack;
			}*/

			echo "$num1 <br>";
		}

	 ?>

</body>
</html>