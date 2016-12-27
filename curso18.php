<?php 
	//Eliminar ficheros desde PHP	
	$file = $_POST['archivo'];

	//Elimina archivos de texto
	unlink($file);
	echo "El archivo ha sido eliminado con éxito.";

?>