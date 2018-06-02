<?php
						 //servidor ,usuario ,contraseña,base de datos
	$mysqli = new MySQLi("localhost", "admin","admin", "CONCURSO");
	if ($mysqli -> connect_errno) {
		die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
			. ") " . $mysqli -> mysqli_connect_error());
	}
	else
?>
