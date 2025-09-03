<?php 

$salario = 2500;
$inss = 86;
$ir = 0;


function DescontarIr($ir, $salario, $inss) {
	if ($salario <= 2259) {
		$salario = $salario - ($salario * $inss / 100);
		echo("Não é necessário realizar o desconto de IR");
		
	}

	elseif($salario > 2259 && $salario <=2826) {
		
		$salario = $salario * 0.86;
		$salario = $salario * 0.925;
		echo("O valor descontado de INSS foi de $inss, o valor descontado de IR foi de $ir e o valor liquido foi de $salario");

	}




}

DescontarIr($ir, $salario);

 ?>