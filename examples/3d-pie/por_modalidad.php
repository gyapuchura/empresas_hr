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
$sql = " SELECT * FROM procesos WHERE modalidad='CONTRATACION MENOR' ";
$result = mysql_query($sql, $link);
$menor = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM procesos WHERE modalidad='CONTRATACION DIRECTA' ";
$result = mysql_query($sql, $link);
$directa = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM procesos WHERE modalidad='CONTRATACION A.N.P.E.' ";
$result = mysql_query($sql, $link);
$anpe = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM procesos WHERE modalidad='CONTRATACION POR EXCEPCION'";
$result = mysql_query($sql, $link);
$excepcion = mysql_num_rows($result);

$p_menor     = ($menor *100)/$total;
$p_directa   = ($directa *100)/$total;
$p_anpe      = ($anpe*100)/$total;
$p_excepcion = ($excepcion*100)/$total;

$por_menor   = number_format($p_menor , 2, '.', '');
$por_directa = number_format($p_directa , 2, '.', '');
$por_anpe    = number_format($p_anpe, 2, '.', '');
$por_excepcion   = number_format($p_excepcion, 2, '.', '');

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Reporte_modalidad_de_Contratacion</title>

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
            text: 'PORCENTAJE DE TRAMITES POR MODALIDAD DE CONTRATACION'
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
                ['CONTRATACIONES MENORES',   <?echo $p_menor;?>],
                ['CONTRATACIONES DIRECTAS',       <?echo $p_directa;?>],
                ['CONTRATACIONES A.N.P.E.',    <?echo $p_anpe;?>],
                ['CONTRATACIONES POR EXCEPCION',     <?echo $p_excepcion;?>],

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
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CONTRATCIONES MENORES </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $menor;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7">   <?echo $por_menor;?> %
          </span></td>
        </tr>
         <tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CONTRATACIONES DIRECTAS</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $directa;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"> <?echo $por_directa;?> %
          </span></td>
        </tr>
         <tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CONTRATACIONES A.N.P.E. </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $anpe;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $por_anpe;?> %
          </span></td>
        </tr>
 		<tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CONTRATACIONES POR EXCEPCION</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $excepcion;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $por_excepcion;?> %
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
