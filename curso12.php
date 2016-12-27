<?php 
	// Sentencia switch
	$variable = 10;
	switch ($variable) {
		case 1:
			echo "Vale uno";
			break;
		case 10:
			echo "Vale 10";
			break;
		case 'hola':
			echo "es hola";
			break;
		default:
			echo "Valor por defecto";
			break;
	}
?>