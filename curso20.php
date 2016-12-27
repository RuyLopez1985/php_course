<?php 
	//Seleccionar registro de una BD
	
	// Parámetros de conexión
	include("curso19_bd.php");

	// Conexión al servidor
	$con = mysql_connect($host, $user, $pw) or die("Problemas al conectar server");

	// Conexión a la base de datos
	mysql_select_db($db, $con) or die("Problemas al conectar a la base de datos");

	// Query a la BD
	$registro = mysql_query("SELECT * FROM codigo_f WHERE NOMBRE = '$_POST[nombre]'") or die("Problemas en consulta:".mysql_error());

	//Recorre el resultado de la consulta e imprime en pantalla	
	while ($req = mysql_fetch_array($registro)) {
		echo $req['NOMBRE']."<br>";
		echo $req['PW']."<br>";
	}
?>