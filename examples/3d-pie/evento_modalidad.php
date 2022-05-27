<? include("cabf.php");?>
<? include("inc.config.php");?>
<?php
date_default_timezone_set('UTC');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$gestion        = date("Y");

$idusuario_ss =  $_SESSION['idusuario_ss'];
$idnombre_ss =  $_SESSION['idnombre_ss'];

$link0=Conectarse();
$sql0 = " SELECT * FROM eventoi WHERE gestion='$gestion' ";
$result0 = mysql_query($sql0, $link0);
$total = mysql_num_rows($result0);

$link=Conectarse();
$sql = " SELECT * FROM eventoi WHERE idmodalidad='1' AND gestion='$gestion' ";
$result = mysql_query($sql, $link);
$presencial = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM eventoi WHERE idmodalidad='2' AND gestion='$gestion' ";
$result = mysql_query($sql, $link);
$semi = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM eventoi WHERE idmodalidad='3' AND gestion='$gestion' ";
$result = mysql_query($sql, $link);
$virtual = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM eventoi WHERE idmodalidad='4' AND gestion='$gestion'";
$result = mysql_query($sql, $link);
$offshore = mysql_num_rows($result);

$p_presencial    = ($presencial*100)/$total;
$p_semi          = ($semi*100)/$total;
$p_virtual       = ($virtual*100)/$total;
$p_offshore      = ($offshore*100)/$total;

$por_presencial   = number_format($p_presencial, 2, '.', '');
$por_semi         = number_format($p_semi, 2, '.', '');
$por_virtual      = number_format($p_virtual, 2, '.', '');
$por_offshore     = number_format($p_offshore, 2, '.', '');

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>REPORTE_MODALIDAD_CAPACITACION</title>

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
            text: 'PORCENTAJE DE EVENTOS POR MODALIDAD DE CAPACITACION'
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
                ['PRESENCIALES',   <?echo $p_presencial;?>],
                ['SEMI-PRESENCIALES',       <?echo $p_semi;?>],
                ['VIRTUALES',    <?echo $p_virtual;?>],
                ['OFFSHORE',     <?echo $p_offshore;?>],

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
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">EVENTOS PRESENCIALES </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $presencial;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7">   <?echo $por_presencial;?> %
          </span></td>
        </tr>
         <tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">EVENTOS SEMIPRESENCIALES</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $semi;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"> <?echo $por_semi;?> %
          </span></td>
        </tr>
         <tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">EVENTOS VIRTUALES</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $virtual;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $por_virtual;?> %
          </span></td>
        </tr>
 		<tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">EVENTOS OFFSHORE</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $offshore;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $por_offshore;?> %
          </span></td>
        </tr>
         		<tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">TOTAL DE eventoi </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $total;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"> 100 %
          </span></td>
        </tr>
    </table>
	</body>
</html>
