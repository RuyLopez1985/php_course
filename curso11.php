<?php 
	// Bucle For Each
	// Nos permite traer todos los elementos o claves de un array

	// Array predefinido
	$predefinido = array("elemento1", "elemento2");
	foreach ($predefinido as $elementos) {
			echo $elementos."<br>";
		}

	// Array personalizado o asociativo
	$asoci = array("clave1" => "elemento1", "clave2" => "elemento2");
	foreach ($asoci as $key => $value) {
		echo $key." = ".$value."<br>";
	}
?>