<!DOCTYPE html>
<head>
<title>IV Concurso de Matemáticas IB</title>
<?php
session_start();
if ($_SESSION['rol']!= 4) {
	header("Location:index.php");
} 
?>

<meta charset="UTF-8">
</head>
<body>

<table>
<tr>
<td>
<form method="post" action="Respuesta.php">
  <input type="radio" name="PRUEBA" value="Prueba1" checked> Prueba 1  
  <input type="radio" name="PRUEBA" value="Prueba2"> Prueba 2 <br>
Ingrese el numero de la unidad:
<input type="number" name="unidad" size=2><br>
Ingrese el numero de la pregunta:
<input type="number" name="pregunta" size=2><br>
<input type="submit" value="Enviar">
</form>
</td>

<td>
<img src="./img/ib.jpg" style="width: 100px;height: 100px;"> 
<img src="./img/femenino.png" style="width: 100px;height: 100px;"> 
<img src="./img/area.png" style="width: 100px;height: 100px;"> 
</td>

<td>

<script type="text/javascript">
window.onload=function(){

var form = document.getElementById('formulario');
var listacol = document.getElementById('id_lista');
var nota= document.getElementById('id_nota');

form.addEventListener('submit', function(e) {
    //Alerta de envio de formulario
    confirm(" <?php echo "Desea Enviar para la ".$_REQUEST['PRUEBA']." unidad ".$_REQUEST['unidad']." pregunta ".$_REQUEST['pregunta']." del ".$_SESSION['user'];?> "+" La Nota:"+ nota.value );
    // impide el envio del formulario
    //e.preventDefault();
});

}
</script>


<form id="formulario" method="post" action="cargar_respuesta.php">

<?php echo "COLEGIO ".$_SESSION['user'];?>

<br>
<input name="PRUEBA1" value= "<?php echo $_REQUEST['PRUEBA'];?>" type="hidden">
<input name="unidad1" value= "<?php echo $_REQUEST['unidad'];?>" type="hidden">
<input name="pregunta1" value= "<?php echo $_REQUEST['pregunta'];?>" type="hidden">

<input type="number" name="Nota" size=2 id="id_nota" placeholder="Solo numeros enteros" step="1" min="0" max="40">
<input type="submit" value="Enviar">

</form>




</td>

</tr>
</table>



<?php

//Capturamos el directorio de la Prueba
$pru=$_REQUEST['PRUEBA'];
$home=getcwd()."\\".$pru;

//Capturamos la unidad
$unidad=$_REQUEST['unidad'];
//capturamos la pregunta
$pregunta=  $_REQUEST['pregunta'];

//calculamos la carpeta y la pregunta
$p='U_'.$unidad;
$d=scandir($home);
$d1= implode(",",$d).",";
$posini= strpos($d1,$p,0);
$posfin= strpos($d1,",",$posini);
$directorio=utf8_encode (substr($d1,$posini,$posfin-$posini));

//captura archivo de pregunta
$p="Pre_";
$d=scandir($home."\\".$directorio);
$d1= implode(",",$d).",";
$posini= strpos($d1,$p,0);
$posfin= strpos($d1,",",$posini);
$directorio2=utf8_encode (substr($d1,$posini,$posfin-$posini));

//captura archivo de respuesta
$p="Res_";
$d=scandir($home."\\".$directorio);
$d1= implode(",",$d).",";
$posini= strpos($d1,$p,0);
$posfin= strpos($d1,",",$posini);
$directorio3=utf8_encode (substr($d1,$posini,$posfin-$posini));


$pre=utf8_encode ($directorio2);
$res=utf8_encode ($directorio3);


$pdf="/Lector_Pdf/web/viewer.html?file=/Concurso/".$pru."/".$directorio."/"."$pre"."/Pregunta".$unidad.".".$pregunta.".pdf";
$pdfres="/Lector_Pdf/web/viewer.html?file=/Concurso/".$pru."/".$directorio."/"."$res"."/Respuesta".$unidad.".".$pregunta.".pdf";
$file=$home."\\".$directorio."\\"."$pre"."\\Pregunta".$unidad.".".$pregunta.".pdf";



// mostrando el pdf
if ((file_exists($file)))	
{

echo "Unidad :".$unidad." Pregunta :".$pregunta;
echo '<div>';
echo '<frameset cols="50%,50%">';
echo '<embed src="'.$pdf.'" style="width: 50%;height: 950px">';
echo '<embed src="'.$pdfres.'" style="width: 50%;height: 950px" >';
echo '</frameset>';
echo '</div>';



//echo '<iframe src="prueba_.html" width=100% height=950>';

}
else {echo "La unidad ó la pregunta ingresada no Existen"."<br>Unidad :".$unidad." Pregunta :".$pregunta;}
 
?>

</body>
</html>