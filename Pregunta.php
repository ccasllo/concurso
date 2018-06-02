<html>
<head>
<title>IV Concurso de Matemáticas IB</title>
<link rel="STYLESHEET" type="text/css" href="estilos/estilos.css"></link>
<meta charset="UTF-8">
</head>
<body>

<Table>
  <tr>
    <td>
        <div id="main_wrapper">
            <header>
                <div id="main_title">
                  <form method="post" action="Pregunta.php">

  <input type="radio" name="PRUEBA" value="Prueba1" checked> Prueba 1
    <input type="radio" name="PRUEBA" value="Prueba2"> Prueba 2  <br>
Ingrese el numero de la unidad:
<input type="number" name="unidad" size=2><br>
Ingrese el numero de la pregunta:
<input type="number" name="pregunta" size=2><br>

<input type="submit" value="Enviar">
</form>
                </div>
</td>

                <nav>
                  <td>

<div align="rigth">
 <img src="images/ib.jpg" width="100" height="100"/>
 <img src="images/femenino.png" width="100" height="100"/>
 <img src="images/area.png" width="100" height="100"/>
</div>
                    </td>
                </nav>

            </tr>
            <Table>
            </header>
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





$p="Pre_";
$d=scandir($home."\\".$directorio);
$d1= implode(",",$d).",";
$posini= strpos($d1,$p,0);
$posfin= strpos($d1,",",$posini);
$directorio2=utf8_encode (substr($d1,$posini,$posfin-$posini));


$pre=utf8_encode ($directorio2);

$file="Prueba1/U_1_Numero_y_algebra/Pre_Numero_y_algebra/Pregunta1.".$pregunta.".pdf";      
echo $file;
$pdf='http://mozilla.github.io/pdf.js/web/viewer.html?file=https://concursomatematicasib.herokuapp.com/'.$file;

      
// Prueba1\U_1_Numero_y_algebra\Pre_Numero_y_algebra
      
      
// mostrando el pdf
if ((file_exists($file)))
{
echo "<br>";
echo $pdf;
echo "<br>";
echo "Unidad :".$unidad." Pregunta :".$pregunta;
echo "<br>";
  
echo '<iframe src="'.$pdf.'" width="100%" height="100%" />' ;
}
else { echo "La unidad ó la pregunta ingresada no Existen"."<br>Unidad :".$unidad." Pregunta :".$pregunta;  
     }


?>


</body>
</html>
