<!DOCTYPE html>
<html>
	<head>
		<title>Um pouco mais sobre if e else</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$usuario_poussue_cartao_loja= false;
			$valor_compra= 859;

			$valor_frete = 50;
			$desconto_frete=true; //inicia valendo true e so sera false se nenhum desconto for aplicado.

			if($usuario_poussue_cartao_loja && $valor_compra >= 400){
				
				$valor_frete = ($valor_frete * 50)/100;
				$usuario_poussue_cartao_loja = true;
			}
			else if ($usuario_poussue_cartao_loja && $valor_compra >= 300) {
				$valor_frete = ($valor_frete * 20)/100;
			}
			elseif ($usuario_poussue_cartao_loja && $valor_compra >= 100) {
				$valor_frete = ($valor_frete * 35)/100;
			}
			else{
				$desconto_frete = false;
			}
		?>
		<h1>Detales do Pedido</h1>
		<p>
			Possue cartão da loja? <?= $usuario_poussue_cartao_loja ? 'Sim':'Não';

				//<?php 			
				/*
				if ($usuario_poussue_cartao_loja == true) {
					echo 'Sim';
				}
				else{
					echo 'Não';
				}
			*/	

			?>
		</p>

		<p>Valor da compra: <?= $valor_compra?></p>

		<p>
			Descontos no frete :<?= $desconto_frete ? 'Sim':'Não'?>
			
		</p>
		<p>	Valor do frete: <strong> R$ <?php echo $valor_frete; ?></strong></p>
			
	</body>
</html>