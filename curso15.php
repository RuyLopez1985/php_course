<?php 
	//Calculadora en PHP

	// Captura los valores de los campos
	$c1 = $_POST['c1'];
	$c2 = $_POST['c2'];
	$c3 = $_POST['c3'];
		
	if (!empty($c1) && !empty($c2) && !empty($c3)) {
		echo "El resultado es: ";
		//Realiza la operación de acuerdo a la escogida
		$operacion = $_POST['lista'];
		switch ($operacion) {
			case 'sumar':
				echo $c1 + $c2 + $c3;
				break;
			case 'restar':
				echo $c1 - $c2 - $c3;
				break;
			case 'multiplicar':
				echo $c1 * $c2 * $c3;
				break;
			case 'dividir':
				echo $c1/$c2/$c3;
				break;
			default:
				echo "No se escogio una operación aritmética";
				break;
		}
	}
	else{
		echo "Debes insertar todos los campos";
	}
	
?>