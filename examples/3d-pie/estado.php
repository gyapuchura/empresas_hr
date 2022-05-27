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
$sql = " SELECT * FROM equipos WHERE estado='NUEVO' ";
$result = mysql_query($sql, $link);
$uno = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE estado='BUENO' ";
$result = mysql_query($sql, $link);
$dos = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE estado='REGULAR'  ";
$result = mysql_query($sql, $link);
$tres = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE estado='MALO' ";
$result = mysql_query($sql, $link);
$cuatro = mysql_num_rows($result);




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
        .Estilo2 {font-weight: bold}
        .Estilo3 {font-size: 16px}
.Estilo4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #003399;
}
        .Estilo5 {color: #003399}
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
            text: 'ESTADO GENERAL DE ESTADO DE LOS EQUIPOS DE COMPUTACION EN EL MINISTERIO DE CULTURAS'
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
                ['NUEVO',    <?echo $uno;?>],
                ['BUENO',    <?echo $dos;?>],
                ['REGULAR',      <?echo $tres;?>],
                ['MALO',      <?echo $cuatro;?>]


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

<table width="772" border="1" align="center" bordercolor="#009999">
               <tr>
          <td width="452" bgcolor="#FFFFCC"><span class="Estilo8 Estilo1 Estilo3 Estilo5"><strong>Estado General del Equipo de Computacion </strong></span></td>
          <td width="213" align="center" bgcolor="#FFFFCC"><span class="Estilo4">DETALLE</span></td>
          <td width="85" align="center" bgcolor="#FFFFCC"><span class="Estilo8 Estilo1 Estilo3 Estilo5"><strong>CANTIDAD </strong></span></td>
        </tr>

        <tr>
          <td width="452" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">NUEVO</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_estado.php?estado=NUEVO" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $uno;?></span></td>
        </tr>
         <tr>
          <td width="452" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">BUENO</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_estado.php?estado=BUENO" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $dos;?></span></td>
        </tr>
         <tr>
          <td width="452" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">REGULAR</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_estado.php?estado=REGULAR" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $tres;?></span></td>
        </tr>
 		<tr>
          <td width="452" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">MALO</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_estado.php?estado=MALO" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $cuatro;?></span></td>
        </tr>
         		<tr>
          <td width="452" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">TOTAL DE EQUIPOS EN EL MINISTERIO DE CULTURAS Y TURISMO</span></td>
          <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $total;?></span></td>
        </tr>
    </table>
	</body>
</html>
