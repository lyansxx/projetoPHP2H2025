<?php 
//ex01
/*$resp = 1;
$resp1 = 0;

function titulo(){
	echo("calculadora selecione uma das opções disponiveis:<br/>");
	echo ("1- Adição, 2- Subtração, 3- Multiplicação, 4- Divisão <br/>");
	
}
titulo();
function somarValor($num1, $num2){
 		$resp1 = $num1 + $num2;
 		echo("Os numeros digitados foram $num1 e $num2 <br/>");
 		echo("A operção selecionada foi de Adição <br/>");
		echo("O valor de $num1 e $num2 é $resp1 <br/>");

 	}
 	function subtrairValor($num1, $num2){
 			$resp1 = $num1 - $num2;
 		echo("Os numeros digitados foram $num1 e $num2 <br/>");
 		echo("A operção selecionada foi Subtração <br/>");
		echo("O valor de $num1 e $num2 é $resp1 <br/>");
 	}
 	function multiplicarValor($num1, $num2){
 			$resp1 = $num1 * $num2;
 		echo("Os numeros digitados foram $num1 e $num2 <br/>");
 		echo("A operção selecionada foi Multiplicação <br/>");
		echo("O valor de $num1 e $num2 é $resp1 <br/>");

 }
 function divisaoValor($num1,$num2){
		$resp1 = $num1 / $num2;
		echo("Os numeros digitados foram $num1 e $num2 <br/>");
		echo("A operção selecionada foi Divisão <br/>");
		echo("O valor de $num1 e $num2 é $resp1 <br/>");

	}

 if ($resp == 1) {
 	somarValor(50,2);
 	
 }
 else if($resp == 2) {
 	subtrairValor(50,2);

 }

 else if($resp == 3) {
 	multiplicarValor(50,2);
}

else if($resp == 4) {
	divisaoValor(50,2);

}*/
//ex02

$valorBruto = 3000;
$descontoIr = 0;
$descontoIns = 0;
$valorRecebido = 0;
$valorR = 0;

function DescontarInss($descontoIns){
	$descontoIns = $valorBruto - ($valorBruto * 86/100); 
	return($descontoIns);


}

function DescontarIr0($descontoIr){
	$descontoIr = $valorBruto - ($valorBruto * 92.5/100);
	return($descontoIr0);

}


function DescontarIr1($descontoIr) {
	$descontoIr = $valorBruto - ($valorBruto * 85/100);
	return($descontoIr);

}


function DescontarIr2($descontoIr){
	$descontoIr = $valorBruto - ($valorBruto * 77.5/100);
	return($descontoIr2);

}

function DescontarIr3($descontoIr){
	$descontoIr = $valorBruto - ($valorBruto * 72.5/100);
	return($descontoIr3);


}




if ($valorBruto > 2259 && $valorBruto <=2826.20) {
	DescontarInss($descontoIns);
	DescontarIr0($descontoIr0);
	$valorRecebido = $valorRecebido - $descontoIns - $descontoIr; 
	echo("O salário bruto foi de  $valorBruto <br/> o desconto do INSS foi de $descontoIns <br/> o desconto do IR foi de $descontoIr0 e o salário final foi de $valorRecebido");
}


elseif ($valorBruto > 2826.20 &&  $valorBruto <= 3751.05) {
	DescontarInss($descontoIns);
	DescontarIr($descontoIr);
	$valorRecebido = $valorRecebido - $descontoIns - $descontoIr; 
	echo("O salário bruto foi de  $valorBruto <br/> o desconto do INSS foi de $descontoIns <br/> o desconto do IR foi de $descontoIr e o salário final foi de $valorRecebido");

	
}

elseif ($valorBruto > 3751.05 && $valorBruto <= 4664.69){
	DescontarInss($descontoIns);
	DescontarIr2($descontoIr2);
	$valorRecebido = $valorRecebido - $descontoIns - $descontoIr; 
	echo("O salário bruto foi de  $valorBruto <br/> o desconto do INSS foi de $descontoIns <br/> o desconto do IR foi de $descontoIr2 e o salário final foi de $valorRecebido");

}

elseif ($valorBruto > 4664.69) {
	DescontarInss($descontoIns);
	DescontarIr3($descontoIr3);
	$valorRecebido = $valorRecebido - $descontoIns - $descontoIr; 
	echo("O salário bruto foi de  $valorBruto <br/> o desconto do INSS foi de $descontoIns <br/> o desconto do IR foi de $descontoIr3 e o salário final foi de $valorRecebido");
	
}


 ?>


 
