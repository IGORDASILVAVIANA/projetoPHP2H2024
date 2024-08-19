<?php 
	
	$salario = 1501;
	$desc_Inss = 0;
		

	if ($salario <= 1500) {
		$desc_Inss = $salario - ($salario * 10 / 100);
		echo "Salário Bruto: $salario <br/>";
		echo "Porcentagem de desconto: 10% <br/>";
		echo "O salário final é de: $desc_Inss <br/>";
	} 
	elseif ($salario <= 1600) {
		$desc_Inss = $salario - ($salario * 15 / 100);
		echo "Salário Bruto: $salario <br/>";
		echo "Porcentagem de desconto: 15% <br/>";
		echo "O salario final é de: $desc_Inss <br/>";
	}
	elseif ($salario <= 1800) {
		$desc_Inss = $salario - ($salario * 20 / 100);
		echo "Salário Bruto: $salario <br/> ";
		echo "Porcentagem de desconto: 20% <br/>";
		echo "O salário final é de: $desc_Inss <br/>";
	}
	elseif ($salario <= 2500){
		$desc_Inss = $salario - ($salario * 27.5 / 100);
		echo "Salário Bruto: $salario  <br/>";
		echo "Porcentagem de desconto: 27.5% <br/>";
		echo "O salario final é de: $desc_Inss <br/>";
	}
	else{
		echo "Você informou o salário errado";
	}

 ?>