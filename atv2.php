 <?php /*
 		$i = 0;
 		$s = 0;
 		$arrayA = array (
 					array(25,12,35),
 					array(85,47,99),
 					array(32,35,8)
 								);


 		$arrayB = array (
 					   array(98,65,35),
 					   array(5,27,9,),
 					   array(74,14,3)
 									);

 		$resultado = array();

 		for ($i=0; $i < 3 ; $i++) { 
 			for ($s = 0; $s < 3 ; $s++) {
 			$resultado[$i] [$s] = $arrayA [$i] [$s] + $arrayB[$i] [$s];
 				}
			}

	echo "<pre>";
    print_r($resultado);
    echo "</pre>";*/

    // ex 02
    // $i = 0;
 	// 	$s = 0;
 	// 	$arrayA = array (
 	// 				array(25,12,35),
 	// 				array(85,47,99),
 	// 				array(32,35,8)
 	// 							);

    //     $arrayB = array (
    //                 array(25,12,35),
    //                 array(85,47,99),
    //                 array(32,35,8)
    //                             );

 	// 	$resultado =  array();

 	// 	for ($i=0; $i <3 ; $i++) { 
 	// 		for ($v=0; $v <3; $v++) { 
 	// 		$resultado[$i] [$v]  = $arrayA [$i] [$v] + $arrayB[$i] [$v];
 	// 		}
 		
 	// 		}
 		

 	// 	 echo "<pre>";
    //     print_r($resultado);
    //     echo "</pre>";


    // ex 03

    $Alunos = array[ 
                    ["nome" => "Felipe", "nota"=> 9],
                    ["nome" => "João","nota" => 9],
                    ["nome" => "Bianca","nota" => 10],
                    ["nome" => "Any","nota" => 9], 
                    ["nome" => "José","nota" => 3]
                    ];

            $notastotal= 0;
            $media = 0;
            $nome = ''; 

            foreach ($Alunos as $Alunos) {
                $notastotal += $Alunos [""nota"];
                
            }

 		
  ?>