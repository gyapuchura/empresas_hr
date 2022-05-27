<?php include("cabf.php");?>
<?php include("inc.config.php");?>
<?php
date_default_timezone_set('UTC');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$gestion        = date("Y");


$sql0 = " SELECT * FROM corres WHERE gestion='$gestion' ";
$result0 = mysqli_query($link,$sql0);
$total = mysqli_num_rows($result0);


$sql = " SELECT * FROM corres WHERE idestado='1' AND gestion='$gestion' ";
$result = mysqli_query($link,$sql);
$sin_iniciar = mysqli_num_rows($result);


$sql = " SELECT * FROM corres WHERE idestado='2' AND gestion='$gestion' ";
$result = mysqli_query($link,$sql);
$iniciada = mysqli_num_rows($result);


$sql = " SELECT * FROM corres WHERE idestado='3' AND gestion='$gestion' ";
$result = mysqli_query($link,$sql);
$concluida = mysqli_num_rows($result);


$sql = " SELECT * FROM corres WHERE idestado='4' AND gestion='$gestion' ";
$result = mysqli_query($link,$sql);
$archivada = mysqli_num_rows($result);


$p_iniciada    = ($iniciada*100)/$total;
$p_concluida   = ($concluida*100)/$total;
$p_archivada   = ($archivada*100)/$total;
$p_sin_iniciar = ($sin_iniciar*100)/$total;


$por_iniciada   = number_format($p_iniciada, 2, '.', '');
$por_concluida  = number_format($p_concluida, 2, '.', '');
$por_archivada  = number_format($p_archivada, 2, '.', '');
$por_sin_iniciar  = number_format($p_sin_iniciar, 2, '.', '');


?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>REPORTE_ESTADO_HOJA_RUTA</title>

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
            text: 'PORCENTAJE DE HOJAS DE RUTA POR ESTADO'
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
                ['EN PROCESO',   <?php echo $p_iniciada;?>],
                ['CONCLUIDA',    <?php echo $p_concluida;?>],
                ['ARCHIVADA',    <?php echo $p_archivada;?>],
                ['REGISTRADA',   <?php echo $p_sin_iniciar;?>]
               
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
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">EN PROCESO</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?php echo $iniciada;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7">   <?php echo $por_iniciada;?> %
          </span></td>
        </tr>       
         <tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CONCLUIDASS</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?php echo $concluida;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"> <?php echo $por_concluida;?> %
          </span></td>
        </tr>
         <tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">ARCHIVADAS</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?php echo $archivada;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?php echo $por_archivada;?> %
          </span></td>
        </tr>
        <tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">REGISTRADAS</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?php echo $sin_iniciar;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?php echo $por_sin_iniciar;?> %
          </span></td>
        </tr>
         <tr>
          <td width="434" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">TOTAL DE HOJAS DE RUTA </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?php echo $total;?></span></td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"> 100 %
          </span></td>
        </tr>
    </table>
	</body>
</html>
