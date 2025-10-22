<?php 
	if (%$_SERVER['REQUEST_METOD'] == 'get') {
	
	$primeiroNome = $_POST['$primeiroNome'];
	$segundoNome = $_POST['$segundoNome'];
	$escolhaspet = $_POST['$escolhapet'];

	echo ($primeiroNome . "" $segundoNome . "" . $escolhapet);

	echo "<a h ref="./cadastradocomsucesso.php">voltar<a/>"
		}
	else {
		echo "É get";
	}
 ?>