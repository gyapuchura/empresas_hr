<? include("cabf.php");?>
<? include("inc.config.php");?>
<?php
date_default_timezone_set('UTC');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$idusuario_ss =  $_SESSION['idusuario_ss'];
$idnombre_ss =  $_SESSION['idnombre_ss'];

$link0=Conectarse();
$sql0 = " SELECT * FROM procesos ";
$result0 = mysql_query($sql0, $link0);
$total = mysql_num_rows($result0);

$link=Conectarse();
$sql = " SELECT * FROM procesos WHERE tipoproceso='SERVICIOS' AND artista='' ";
$result = mysql_query($sql, $link);
$servicios = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM procesos WHERE tipoproceso='BIENES' ";
$result = mysql_query($sql, $link);
$bienes = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM procesos WHERE tipoproceso='CONSULTORIA' ";
$result = mysql_query($sql, $link);
$consultorias = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM procesos WHERE tipoproceso='SERVICIOS' AND artista='SI'";
$result = mysql_query($sql, $link);
$artistas = mysql_num_rows($result);



$p_servicios     = ($servicios *100)/$total;
$p_bienes        = ($bienes *100)/$total;
$p_consultorias  = ($consultorias*100)/$total;
$p_artistas      = ($artistas*100)/$total;

$por_servicios   = number_format($p_servicios, 2, '.', '');
$por_bienes      = number_format($p_bienes, 2, '.', '');
$por_consultorias = number_format($p_consultorias, 2, '.', '');
$por_artistas    = number_format($p_artistas, 2, '.', '');





?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Reporte_tipo_de_Contratacion</title>

		<script type="text/javascript" src="jquery.min.js"></script>
		<style type="text/css">
${demo.css}
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
            text: 'PORCENTAJE DE TRAMITES POR TIPO DE CONTRATACION'
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
                ['SERVICIOS GENERALES',   <?echo $p_servicios;?>],
                ['ADQUISICION DE BIENES',       <?echo $p_bienes;?>],
                ['CONTRATACION DE CONSULTORES',    <?echo $p_consultorias;?>],
                ['CONTRATACION DE ARTISTAS',     <?echo $p_artistas;?>],

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

<table width="646" border="1" align="center" bordercolor="#009999">


        <tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">SERVICIOS GENERALES </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $servicios;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7">   <?echo $por_servicios;?> %
          </span></td>
        </tr>
         <tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">ADQUISICION DE BIENES</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $bienes;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"> <?echo $por_bienes;?> %
          </span></td>
        </tr>
         <tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CONTRATACION DE CONSULTORES </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $consultorias;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $por_consultorias;?> %
          </span></td>
        </tr>
 		<tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CONTRATACION DE ARTISTAS </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $artistas;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $por_artistas;?> %
          </span></td>
        </tr>
         		<tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">TOTAL DE PROCESOS </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $total;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"> 100 %
          </span></td>
        </tr>
    </table>
	</body>
</html>
