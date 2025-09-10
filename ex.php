<?php 
/*ex001
$valor1=10;
$valor2=8;
$resul=0;

 $resul = $valor1 + $valor2;
if ($resul >= 20) {
  $resul +=8;
  echo("O valor da conta é $resul <br/>");

}

else{
	$resul -=5;
	echo("o avlor da conta é $resul <br/>");
}*/

//ex02

/*$numero = 55;


if($numero % 2 == 0 ){
	echo("Numero divisivel por  2");

}

else if($numero % 5 == 0){
	echo("Numero divisivel por 5");

}

else if ($numero % 10 == 0) {
	echo("Numero divisivel por 10");
}

else{
	echo("Numero não divisivel por 10, 5 e 2");
}*/


//ex003


// $idade=24;
// $nome= "Camila";
// $sexo= "feminino";

// if ($idade <=25 && $sexo == "feminino") {
// 	echo("$nome <br/> Aceita");
// }

// else{
// 	echo("$nome <br/> Não aceito");
// }

// 

// ex004

$num1 = 1;
$num2 = 2;
$num3 = 3;
$cont = 0; 
$temp = 0;

while ($cont < 3) {
	if($num1 < $num2){
		$temp = $num2;
		$num2 = $num1;
		$num1 =  $temp;
		
		
	}
	else if($num2 < $num3){
		$temp = $num3;
		$num3 = $num2;
		$num3 = $temp;
		echo("$num1 $num2 $num3");
	}
	
	



	
	$cont++;
}

 ?>