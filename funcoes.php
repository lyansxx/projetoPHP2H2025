<?php 
$resp = 1;
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

}



 ?>