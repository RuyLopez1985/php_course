<?php 
	//Constantes y concatenación

	/*
	Una constante se define utilizando la función define con el nombre
	como su primer argumento y su valor como el segundo
	*/
	define(saludo, "Hola, como estas?");
	define(numero, 20);

	//Imprime las constantes
	echo saludo;
	echo numero."<br>";

	//Imprime utilizando la concatenación para ello se utiliza el operador .
	echo saludo." tengo ".numero." años";
 ?>