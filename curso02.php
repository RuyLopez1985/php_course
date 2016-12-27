<!DOCTYPE html>
<html>
	<head>
		<title>Incrustando PHP en HTML y Viceversa</title>
	</head>
	<body>
		Hola en HTML
		<?php 
			//El código HTML se puede incrustar dentro del código PHP como demuestra los siguientes ejemplos:
			echo "<br/> Hola en PHP,"; // La sentencia br causa un brinco de línea.
			echo "&nbsp; mi nombre es Marlon"; // La sentencia &nbsp; sirve para añadir espacios en blancos entre carácteres.	
		?>
	</body>
</html>