<?php

session_start();
	require("conexion/connect_db.php");
// Se capturan las variables del formulario respuesta.php 



	$id=$_SESSION['id'];
	$prueba=$_POST['PRUEBA1'];
	$unidad=$_POST['unidad1'];
	$numero_pregunta=$_POST['pregunta1'];
	$calificacion=$_POST['Nota'];

	
	
// se realizá la carga de resultados a la base de datos, si la nota ya fue cargada no se puede sobre escribir	
$sql="insert into concurso.respuestas_concurso(id_colegio,colegio,Prueba,unidad,numero_pregunta,calificacion )
	SELECT uq.* FROM
	(select id as id_colegio
	,usuario as colegio
	,'$prueba' as prueba
	,$unidad as unidad
	,$numero_pregunta as numero_pregunta
	,$calificacion as calificacion
	from concurso.usuarios_qm as uq 
	where id=$id
	)as uq 
		left join concurso.respuestas_concurso as rc
		 on uq.id_colegio=rc.id_colegio
		 and uq.prueba		    = RC.prueba
		 and uq.unidad		    = RC.unidad
		 and uq.numero_pregunta = RC.numero_pregunta
	WHERE RC.ID_COLEGIO IS NULL
	;";

$result = mysqli_query($mysqli,$sql); 

mysqli_close($mysqli);

echo "<script>location.href='Respuesta.php'</script>";

	
?>