<?php 
$resp = 4;
function titulo(){
	echo("calculadora selecione uma das opções disponiveis:<br/>");
	echo ("1- Adição, 2- Subtração, 3- Multiplicação, 4- Divisão <br/>");
	
}
 if ($resp == 1) {
 	function somarValor($num1, $num2){
 		$resp1 = $num1 + $num2;
 		echo("Os numeros digitados foram $num1 e $num2 <br/>");
 		echo("A operção selecionada foi de Adição <br/>");
		echo("O valor de $num1 e $num2 é $resp1 <br/>");

 	}
 	
 }
 else if($resp == 2) {
 	function subtrairValor($num1, $num2){
 			$resp1 = $num1 - $num2;
 		echo("Os numeros digitados foram $num1 e $num2 <br/>");
 		echo("A operção selecionada foi Subtração <br/>");
		echo("O valor de $num1 e $num2 é $resp1 <br/>");
 	}

 }

 else if($resp == 3) {
 	function multiplicarValor($num1, $num2){
 			$resp1 = $num1 * $num2;
 		echo("Os numeros digitados foram $num1 e $num2 <br/>");
 		echo("A operção selecionada foi Multiplicação <br/>");
		echo("O valor de $num1 e $num2 é $resp1 <br/>");

 }
}

else if($resp == 4) {
	function divisaoValor($num1,$num2){
		$resp1 = $num1 / $Num2;
		echo("Os numeros digitados foram $num1 e $num2 <br/>");
		echo("A operção selecionada foi Divisão <br/>");
		echo("O valor de $num1 e $num2 é $resp1 <br/>");

	}
}
titulo();
multiplicarValor(10,10);

 ?>