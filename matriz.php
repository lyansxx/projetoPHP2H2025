<?php 

	$matriza = array (
			array[25,12,35],
			array[85,47,98],
			array[32,38,105]
		);

		$matrizb = array (

			array[98,65,35],
			array[5,27,8],
			array[74,14,3]
		);

		$resultado = array [];
		for ($i = 0; $i <3 ; $i++) { 
			for ($j=0; $j <3 ; j++) { 
				$resultado [$i] [$j] = matriza[$i][$j] + matrizb [$i][$j];				
				}	
		}
		foreach ($resultado as $linha) {
			echo implode("", $linha) . "<br>";
		}
 ?>