<?php 
	// Leer archivos de texto mediante PHP
	
	//La opción r es para leer un archivo
	$archivo = fopen("curso16.txt", "r")
	or die("Problemas al leer archivo");

	//Bucle para leer el archivo
	while (!feof($archivo)) {
		$traer = fgets($archivo);
		$salto_linea = nl2br($traer); //Permite leer saltos de linea en el navegador
		echo $salto_linea;
	}

?>