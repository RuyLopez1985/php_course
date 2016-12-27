<?php 
	// Operadores

	// Existen 7 tipos de operadores en php:
	/*
		Aritmetica
		Asignación
		Cadena
		Comparación
		Errores
		Incremento
		Lógica
	*/

	/* Operadores de aritmética
		Adicion(+)
		Substracción(-)
		Multiplicación(*)
		División(/)
		Porcentaje(%)
	*/
	//Ejemplos:
		$adicion = 4 + 4;
		$multiplicacion = $adicion * 3;
		echo $adicion;
		echo "<br />";
		echo $multiplicacion;
		echo "<br>";

	/* Operadores de Asignación
		Asignación(=)			
	*/
	//Ejemplo:
		$valor1 = "hola";
		$valor2 = 20;
		echo $valor1;
		echo "<br>";
		echo $valor2;
		echo "<br>";

	/*Operador de Cadena
		Punto(.)
	*/
	//Ejemplo:
		$texto = "yo tengo ". 20 . " años";
		echo $texto;
		echo "<br>";
		// Otra manera de utilizar el operador de concatenación
		$tengo	= "yo ";
		$tengo .= "tengo ";
		$tengo .= "20 años";
		echo $tengo;
		echo "<br>";

	/* Operadores de comparación
		Igual(==)
		Idéntico(===)
		Diferente (!= o <>)
		No idénticos (!==)
		Menor que (<)
		Mayor que (>)
		Menor o igual que (<=)
		Mayor o igual que (>=)
	*/
	// Ejemplos:
		echo (6 >= 4);
		echo "<br>";
		echo (5 == 11);		

	/* Operador de control de errores
		Se define utilizando la Arroba(@)	
		Si sucede un error lo esconde al usuario
	*/
	// Ejemplos:
		echo "Hola";
		@ define(); //Esto debe producir un error ya que se declara una constante sin parámetros.
		echo "<br>";

	/*	Operadores de Incremento
		Incremento(++)
		Decremento(--)
	*/
	// Ejemplos:
		$variable = 3;
		echo $variable++; //Imprime la variable y luego incrementa
		echo "<br>";
		echo ++$variable; //Incrementa la variable y luego la imprime
		echo "<br>";

	/* Operadores de lógica 
		Y (&& o and) - Devuelve 1 si ambos operandos son 1
		O (|| o or) - Devuelve 1 si algún operando es 1
		O exclusivo (xor) - Devuelve 1 si solo 1 operando es 1
	*/
	// Ejemplos:
		echo ((2 == 2) && (2 != 1));
		echo "<br>";
		echo ((3 == 3) or (4 != 4));
?>