<?php 
$resp = 1;
function titulo(){
	echo("calculadora selecione uma das opções disponiveis:<br/>");
	echo ("1- Adição, 2- Subtração, 3- Multiplicação, 4- Divisão <br/>");
	
}
 if ($resp == 1) {
 	function somarValor($num1, $num2){
 		return($num1 + $num2);
 		

 	}
 	
 }
 else if($resp == 2) {
 	function subtrairValor($num1, $num2){
 		return($num1 - $num2);

 	}

 }
titulo();
$resp1 = somarValor(30,60);
echo("O valor de $num1 e $num2 é $resp1");
 ?>


