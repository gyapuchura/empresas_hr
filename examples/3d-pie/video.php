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
$sql = " SELECT * FROM equipos WHERE t_video LIKE '%nvidia%' ";
$result = mysql_query($sql, $link);
$nvidia = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE t_video LIKE '%Intel%' ";
$result = mysql_query($sql, $link);
$intel = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE t_video LIKE '%ATI%' ";
$result = mysql_query($sql, $link);
$ati = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE t_video LIKE '%AMD%'";
$result = mysql_query($sql, $link);
$amd = mysql_num_rows($result);




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
        .Estilo2 {font-size: 16px}
.Estilo3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #003399;
	font-weight: bold;
}
        .Estilo4 {color: #003399}
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
            text: 'TIPOS DE TARJETA DE VIDEO DE LOS EQUIPOS DE COMPUTACION EN EL MINISTERIO DE CULTURAS'
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
                ['NVIDIA',    <?echo $nvidia;?>],
                ['INTEL HD GRAPHICS (INTEGRADA)',    <?echo $intel;?>],
                ['ATI RADEON',      <?echo $ati;?>],
                ['AMD ',      <?echo $amd;?>],

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

<table width="588" border="1" align="center" bordercolor="#009999">
               <tr>
          <td width="294" bgcolor="#FFFFCC"><span class="Estilo4 Estilo2 Estilo1 Estilo8"><strong>TARJETA DE VIDEO </strong></span></td>
          <td width="174" align="center" bgcolor="#FFFFCC"><span class="Estilo3">DETALLE</span></td>
          <td width="98" align="center" bgcolor="#FFFFCC"><span class="Estilo4 Estilo2 Estilo1 Estilo8"><strong>CANTIDAD </strong></span></td>
        </tr>

        <tr>
          <td width="294" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">NVIDIA </span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_video.php?t_video=nvidia" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $nvidia;?></span></td>
        </tr>
         <tr>
          <td width="294" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">INTEL GRAPHICS</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_video.php?t_video=Intel" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $intel;?></span></td>
        </tr>
         <tr>
          <td width="294" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">ATI</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_video.php?t_video=ATI" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $ati;?></span></td>
        </tr>
 		<tr>
          <td width="294" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">AMD</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_video.php?t_video=AMD" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $amd;?></span></td>
        </tr>
         		<tr>
          <td width="294" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">TOTAL</span></td>
          <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $total;?></span></td>
        </tr>
    </table>
	</body>
</html>
