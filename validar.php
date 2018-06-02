<?php

session_start();
	require("conexion/connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];

$sql="SELECT*FROM usuarios_qm WHERE (correo='$username' or usuario='$username') and (codigo='$pass' or documento='$pass')";
$result = mysqli_query($mysqli,$sql); 

if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_array($result)) { 
	
	if($row['rol']==4) {
		$_SESSION['user']=$row['usuario'];
		$_SESSION['rol']=$row['rol'];
		$_SESSION['id']=$row['id'];
		echo "<script>location.href='Respuesta.php'</script>";
	
	} 
	else if ( $row['rol']==5 ) {
		$_SESSION['user']=$row['user'];
		$_SESSION['rol']=$row['rol'];
		echo "<script>location.href='Pregunta.php'</script>";
		} 
	
	} 
}
else {echo '<script>alert("Usuario o Contraseña INCORRECTA")</script> ';
		  echo "<script>location.href='index.php'</script>";	
	}

mysqli_close($mysqli);



	
?>
