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
$sql = " SELECT * FROM equipos WHERE disco_duro BETWEEN '50 GB' AND '80 GB' ";
$result = mysql_query($sql, $link);
$uno = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE disco_duro = '80 GB'";
$result = mysql_query($sql, $link);
$dos = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE disco_duro BETWEEN '120 GB' AND '160 GB' ";
$result = mysql_query($sql, $link);
$tres = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE disco_duro BETWEEN '160 GB' AND '220 GB'";
$result = mysql_query($sql, $link);
$cuatro = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE disco_duro BETWEEN '220 GB' AND '320 GB'";
$result = mysql_query($sql, $link);
$cinco = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE disco_duro BETWEEN '320 GB' AND '500 GB'";
$result = mysql_query($sql, $link);
$seis = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE disco_duro LIKE '%1 TB%'";
$result = mysql_query($sql, $link);
$siete = mysql_num_rows($result);


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
            text: 'CAPACIDAD DE DISCO DURO DE LOS EQUIPOS DE COMPUTACION EN EL MINISTERIO DE CULTURAS'
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
                ['50 GB A 80 GB',    <?echo $uno;?>],
                ['80 GB A 120 GB',    <?echo $dos;?>],
                ['120 GB A 160 GB',      <?echo $tres;?>],
                ['160 GB A 220 GB',      <?echo $cuatro;?>],
                ['220 GB A 320 GB',    <?echo $cinco;?>],
                ['320 GB A 500 GB',      <?echo $seis;?>],
                ['500 GB A 1000 GB = 1 TB',      <?echo $siete;?>],

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
          <td width="370" bgcolor="#FFFFCC"><span class="Estilo8 Estilo2 Estilo1">CAPACIDAD EN DISCO DURO </span></td>
          <td width="98" align="center" bgcolor="#FFFFCC"><span class="Estilo8 Estilo2 Estilo1">CANTIDAD </span></td>
        </tr>

        <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">50 GB A 80 GB </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $uno;?></span></td>
        </tr>
         <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">80 GB A 120 GB</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $dos;?></span></td>
        </tr>
         <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">120 GB A 160 GB</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $tres;?></span></td>
        </tr>
 		<tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">160 GB A 220 GB</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $cuatro;?></span></td>
        </tr>
        <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">220 GB A 320 GB</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $cinco;?></span></td>
        </tr>
         <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">320 GB A 500 GB</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $seis;?></span></td>
        </tr>
 		<tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">500 GB A 1000 GB = 1 TB</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $siete;?></span></td>
        </tr>
         <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">TOTAL</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $total;?></span></td>
        </tr>
    </table>
	</body>
</html>
