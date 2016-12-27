<?php 
	//Guardar datos en un archivo de texto en PHP

	//La opción a escribe en el archivo si existe y sino lo crea
	$file = fopen("curso16.txt", "a")
	or die("Problemas al crear archivo");

	//Para escribir en el archivo
	fwrite($file, "Datos:");
	fwrite($file, "\n");
	fwrite($file, $_POST['nombre']);
	fwrite($file, "\n");
	fwrite($file, $_POST['comentario']);
	fwrite($file, "\n");
	fwrite($file, "------------------ \n\n");

	//Cierra el archivo
	fclose($file);

	echo "Datos Guardados";
?>