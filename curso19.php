<?php 
	//Insertar datos en MySQL mediante PHP
	
	//Incluye script con los parámetros de conexión
	include("curso19_bd.php");

	// Valores entrados por el formulario
	$name = $_POST['nombre'];
	$pass = $_POST['pw'];

	// Chequea si los campos tiene valores correctos
	if ((isset($name) && !empty($name)) && (isset($name) && !empty($name))) {
		// Conecta con el servidor
		$con = mysql_connect($host, $user, $pw) or die("Problemas al conectar");
		// Conecta con la base de datos
		mysql_select_db($db, $con) or die("Problemas al conectar a la BD");
		// Realiza la consulta a la BD
		mysql_query("INSERT INTO codigo_f (NOMBRE, PW) VALUES ('$name', '$pass')", $con);
		echo "Datos Insertados";
	}else{
		echo "Problemas al insertar los datos";
	}
?>