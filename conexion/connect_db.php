<?php
						 //servidor ,usuario ,contraseña,base de datos
	$mysqli = new MySQLi("nuskkyrsgmn5rw8c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "sw21pev5toum5iqk","mp6tpf7841z3fhvs", "biy1q90u3vjgvpc9");
	if ($mysqli -> connect_errno) {
		die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
			. ") " . $mysqli -> mysqli_connect_error());
	}
	else
?>
