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
$sql = " SELECT * FROM equipos WHERE sistema = 'WINDOWS 7 (32 BITS)' ";
$result = mysql_query($sql, $link);
$uno = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE sistema = 'WINDOWS 7 (64 BITS)' ";
$result = mysql_query($sql, $link);
$dos = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE sistema = 'WINDOWS 8 (32 BITS)' ";
$result = mysql_query($sql, $link);
$tres = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE sistema = 'WINDOWS 8 (64 BITS)' ";
$result = mysql_query($sql, $link);
$cuatro = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE sistema = 'WINDOWS 10 (64 BITS)' ";
$result = mysql_query($sql, $link);
$cinco = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE sistema = 'WINDOWS 10 (32 BITS)' ";
$result = mysql_query($sql, $link);
$seis = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE sistema = 'WINDOWS XP (32 BITS)' ";
$result = mysql_query($sql, $link);
$siete = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE sistema = 'WINDOWS XP (64 BITS)' ";
$result = mysql_query($sql, $link);
$ocho = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE sistema = 'MAC OS X' ";
$result = mysql_query($sql, $link);
$nueve = mysql_num_rows($result);

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
            text: 'ESTADO GENERAL DE LOS EQUIPOS DE COMPUTACION EN EL MINISTERIO DE CULTURAS'
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
                ['WINDOWS 7 (32 BITS)',    <?echo $uno;?>],
                ['WINDOWS 7 (64 BITS)',    <?echo $dos;?>],
                ['WINDOWS 8 (32 BITS)',      <?echo $tres;?>],
                ['WINDOWS 8 (64 BITS)',      <?echo $cuatro;?>],
                ['WINDOWS 10 (64 BITS)',    <?echo $cinco;?>],
                ['WINDOWS 10 (32 BITS)',    <?echo $seis;?>],
                ['WINDOWS XP (32 BITS)',      <?echo $siete;?>],
                ['WINDOWS XP (64 BITS)',      <?echo $ocho;?>],
                ['MAC OS X',                 <?echo $nueve;?>],



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

<table width="549" border="1" align="center" bordercolor="#009999">
                 <tr>
          <td width="264" bgcolor="#FFFFCC"><span class="Estilo8 Estilo2 Estilo1">SISTEMA OPERATIVO</span></td>
          <td width="120" align="center" bgcolor="#FFFFCC"><span class="Estilo8 Estilo2 Estilo1">CANTIDAD </span></td>
          <td width="143" align="center" bgcolor="#FFFFCC"><span class="Estilo1">VER DETALLE </span></td>
        </tr>

        <tr>
          <td width="264" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">WINDOWS 7 (32 BITS) </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $uno;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_sistema.php?sistema=WINDOWS 7 (32 BITS)" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
        </tr>
         <tr>
          <td width="264" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">WINDOWS 7 (64 BITS)</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $dos;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_sistema.php?sistema=WINDOWS 7 (64 BITS)" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
        </tr>
         <tr>
          <td width="264" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">WINDOWS 8 (32 BITS)</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $tres;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_sistema.php?sistema=WINDOWS 8 (32 BITS)" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
        </tr>
 		<tr>
          <td width="264" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">WINDOWS 8 (64 BITS)</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $cuatro;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_sistema.php?sistema=WINDOWS 8 (64 BITS)" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
        </tr>
         		<tr>
          <td width="264" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">WINDOWS 10 (64 BITS)</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $cinco;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_sistema.php?sistema=WINDOWS 10 (64 BITS)" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
        </tr>
        <tr>
          <td width="264" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">WINDOWS 10 (32 BITS)</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $seis;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_sistema.php?sistema=WINDOWS 10 (32 BITS)" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
        </tr>

        <tr>
          <td width="264" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">WINDOWS XP (32 BITS)</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $siete;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_sistema.php?sistema=WINDOWS XP (32 BITS)" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
        </tr>
                <tr>
          <td width="264" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">WINDOWS XP (64 BITS)</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $ocho;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_sistema.php?sistema=WINDOWS XP (64 BITS)" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
        </tr>
                        <tr>
          <td width="264" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">MAC OS</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $nueve;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_sistema.php?sistema=MAC OS X" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
        </tr>
         		<tr>
          <td width="264" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">TOTAL DE EQUIPOS EN EL MINISTERIO DE CULTURAS Y TURISMO </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $total;?></span></td>
          <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
        </tr>
    </table>
	</body>
</html>
