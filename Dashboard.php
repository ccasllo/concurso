

<!DOCTYPE html>
<head>

<style>
table {
  font-family: 'Arial';
  margin: 25px auto;
  border-collapse: collapse;
  border: 1px solid #eee;
  border-bottom: 2px solid #00cccc;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1), 0px 10px 20px rgba(0, 0, 0, 0.05), 0px 20px 20px rgba(0, 0, 0, 0.05), 0px 30px 20px rgba(0, 0, 0, 0.05);
}
table tr:hover {
  background: #f4f4f4;
}
table tr:hover td {
  color: #555;
}
table th, table td {
  color: #999;
  border: 1px solid #eee;
  padding: 12px 35px;
  border-collapse: collapse;
}
table th {
  background: #00cccc;
  color: #fff;
  text-transform: uppercase;
  font-size: 12px;
}
table th.last {
  border-right: none;
}
</style>	
	
	<title>IV CONCURSO MATEMATICAS IB</title>
</head>
<body>
<input type="boton" value="Actualizar Grafico" onclick="javascript:window.location.reload();"/>
<?php

require("conexion/connect_db.php");
// codigo para generar la consulta de tabla pivot
$sql="select concat(',SUM(case when prueba=''' 
			  ,prueba
              ,''' and unidad='
              ,unidad
              ,'  and numero_pregunta='
              ,numero_pregunta
              ,' then calificacion end) as P'
              ,replace(prueba,'Prueba','')
              ,'U'
              ,unidad
              ,'P',numero_pregunta)
from 
(select prueba,unidad,numero_pregunta 
from concurso.respuestas_concurso
group by 1,2,3
)t
order by prueba,unidad,numero_pregunta 
;";


ob_start();

		
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
				$resultado=$resultado.$row[0];
								
				}
		mysqli_close($mysqli);
		
$output = ob_get_contents(); //Grab output
ob_end_clean(); 

$var_grafico="select colegio ".$resultado.",sum(calificacion) as 
			  Total from concurso.respuestas_concurso group by colegio order by total desc";

//echo $var_grafico;

// tabla pivot html
$sql="";
$sql=$var_grafico;


require("conexion/connect_db.php");		
		
		$ressql=mysqli_query($mysqli,$sql);
		$qcampos= mysqli_num_fields($ressql);
		
		for ($i=0;$i<$qcampos;$i++){
		$varq= $varq.'<td>".$row['.$i.']."</td>';
		}
								
		$varq='
		while ($row=mysqli_fetch_row ($ressql)){
		 echo "<tr>'.$varq.'</tr> \n";				
	    	}';
		
		
		echo "<table>";
		echo "<tr>";
		while ($property = mysqli_fetch_field($ressql)) {
		echo "<th>".$property->name."</th>";
		}
		echo "</tr>";
		
		eval($varq);
			
		echo "</table>";	
		mysqli_close($mysqli);


?>

<iframe src="Grafico_Respuestas.php" width="1000" height="400" /> 

</body>
</html>