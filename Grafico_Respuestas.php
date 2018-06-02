<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>IV CONCURSO DE MATEMATICAS IB</title>
		<style type="text/css">
#container {
	height: 300px;
	min-width: 310px;
	max-width: 800px;
}
		</style>
	</head>
	<body>

<?php
require("conexion/connect_db.php");

$sql="SELECT CONCAT(CADENA1,COLEGIO,CADENA2,puntuacion,CADENA3,puntuacion,CADENA4,COLEGIO,CADENA5) AS GRAFICO
FROM 
(select colegio,sum(calificacion) as puntuacion
from concurso.respuestas_concurso
group by COLEGIO
ORDER BY PUNTUACION desc) PU 
CROSS JOIN CONCURSO.GRAFICO_COLUMNAS GR";


ob_start();

		
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
				$resultado=$resultado.$row[0];
								
				}
		mysqli_close($mysqli);
		
$output = ob_get_contents(); //Grab output
ob_end_clean(); 

$var_grafico="series: [".substr($resultado,0,-1)."]";

?>
	
<script src="../Jquery/jquery-3.3.1.min.js"></script>
<script src="../Highcharts-6.0.4/code/highcharts.js"></script>

<div id="container"></div>

<script type="text/javascript">



var chart = Highcharts.chart('container', {

    chart: {
        type: 'column'
    },

    title: {
        text:'Respuesta Concursantes' 
    },

    subtitle: {
        text: 'IV CONCURSO DE MATEMATICAS IB'
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },

    xAxis: {
        categories: ['IV CONCURSO DE MATEMATICAS IB'],
        labels: {
            x: -10
        }
    },

    yAxis: {
        visible: false
        
    },
	
	plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:1f}'
            }
        }
    },

    
<?php echo $var_grafico;?>	
	
	,

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});


   <!-- chart.setSize(400, 300); -->



		</script>

	</body>
</html>
