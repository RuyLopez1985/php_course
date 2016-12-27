<?php 
	// Eliminar registro de la BD desde PHP
	include("curso19_bd.php");
	$con = mysql_connect($host, $user, $pw) or die("Problemas en el servidor");
	mysql_select_db($db, $con) or die("Problemas en la BD");
	$req = mysql_query("SELECT ID FROM codigo_f WHERE NOMBRE = '$_POST[nombre]'", $con);
	if ($re=mysql_fetch_array($req)) {
		mysql_query("DELETE FROM codigo_f WHERE NOMBRE = '$_POST[nombre]'", $con);
		echo("Datos eliminados");		
	}
	else
	{
		echo "Datos no eliminados";
	}
?>