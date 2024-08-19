<?php 
	
	echo "Escolha:";
	echo "<br/> 1 - Banana ";
	echo "<br/> 2 - laranja " ;
	echo "<br/> 3 - Abacaxi ";
	echo "<br/> 4 - sair <br/><br/>";


	$menu = 2;

	switch ($menu) {
		case 1:
			echo "você escolheu Banana";
			break;
		case 2:
			echo "você escolheu Laranja";
			break;
		case 3: 
			echo "você escolheu Abacaxi";
			break;
		case 4: 
			echo "Você escolheu sair";
			break;
		default:
			echo "Opção inválida";
			break;
	}


 ?>