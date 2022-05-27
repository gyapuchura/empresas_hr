<? include("cabf.php");?>
<? include("inc.config.php");?>
<?php
date_default_timezone_set('UTC');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$idusuario_ss =  $_SESSION['idusuario_ss'];
$idnombre_ss =  $_SESSION['idnombre_ss'];

$link0=Conectarse();
$sql0 = " SELECT * FROM equipos ";
$result0 = mysql_query($sql0, $link0);
$total = mysql_num_rows($result0);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE monitor LIKE '%14%' ";
$result = mysql_query($sql, $link);
$uno = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE monitor LIKE '%15.5%'";
$result = mysql_query($sql, $link);
$dos = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE monitor LIKE '%17.5%' ";
$result = mysql_query($sql, $link);
$tres = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE monitor LIKE '%21%'";
$result = mysql_query($sql, $link);
$cuatro = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE monitor LIKE '%27%'";
$result = mysql_query($sql, $link);
$cinco = mysql_num_rows($result);




?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Reporte_tipo_de_Contratacion</title>

		<script type="text/javascript" src="jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		.Estilo1 {font-family: Arial, Helvetica, sans-serif}
        </style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'DIMENSIONES DEL MONITOR DE LOS EQUIPOS DE COMPUTACION EN EL MINISTERIO DE CULTURAS'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Porcentaje',
            data: [
                ['14 pulgadas',    <?echo $uno;?>],
                ['15 pulgadas',    <?echo $dos;?>],
                ['17 pulgadas',      <?echo $tres;?>],
                ['21 pulgadas',      <?echo $cuatro;?>],
                ['27 pulgadas',    <?echo $cinco;?>]


            ]
        }]
    });
});
		</script>
	</head>
	<body>

<script src="../../js/highcharts.js"></script>
<script src="../../js/highcharts-3d.js"></script>
<script src="../../js/modules/exporting.js"></script>

<div id="container" style="height: 400px"></div>

<table width="484" border="1" align="center" bordercolor="#009999">
               <tr>
          <td width="370" bgcolor="#FFFFCC"><span class="Estilo8 Estilo2 Estilo1">DIMENSIONES DEL MONITOR </span></td>
          <td width="98" align="center" bgcolor="#FFFFCC"><span class="Estilo8 Estilo2 Estilo1">CANTIDAD </span></td>
        </tr>

        <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">14 pulgadas</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $uno;?></span></td>
        </tr>
         <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">15 pulgadas</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $dos;?></span></td>
        </tr>
         <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">17 pulgadas</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $tres;?></span></td>
        </tr>
 		<tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">21 pulgadas</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $cuatro;?></span></td>
        </tr>
        <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">27 pulgadas</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $cinco;?></span></td>
        </tr>

           <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">TOTAL</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $total;?></span></td>
        </tr>

    </table>
	</body>
</html>
