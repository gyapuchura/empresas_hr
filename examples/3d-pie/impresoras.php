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
$sql = " SELECT * FROM equipos WHERE idimpresora='1' ";
$result = mysql_query($sql, $link);
$uno = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE idimpresora='2'";
$result = mysql_query($sql, $link);
$dos = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE idimpresora='3'  ";
$result = mysql_query($sql, $link);
$tres = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE idimpresora='4'";
$result = mysql_query($sql, $link);
$cuatro = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE idimpresora='5' ";
$result = mysql_query($sql, $link);
$cinco = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE idimpresora='6'";
$result = mysql_query($sql, $link);
$seis = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE idimpresora='7'  ";
$result = mysql_query($sql, $link);
$siete = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE idimpresora='8'";
$result = mysql_query($sql, $link);
$ocho = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE idimpresora='9'";
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
            text: 'IMPRESORAS EXISTENTES EN EL MINISTERIO DE CULTURAS Y TURISMO'
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
                ['HP P2055dn laserjet',    <?echo $uno;?>],
                ['HP p2035dn laserjet',    <?echo $dos;?>],
                ['EPSON T50 SERIES SISTEMA CONTINUO',      <?echo $tres;?>],
                ['HP 1022n laserjet',      <?echo $cuatro;?>],
                ['HP MFP 400 SERIES LASERJET',    <?echo $cinco;?>],
                ['EPSON L220',              <?echo $seis;?>],
                ['HP LASERJET P1102W',      <?echo $siete;?>],
                ['EPSON L355',              <?echo $ocho;?>],
                ['HP LASER JET  P3015',     <?echo $nueve;?>]


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
          <td width="370" bgcolor="#FFFFCC"><span class="Estilo8 Estilo2 Estilo1">TIPO DE IMPRESORA </span></td>
          <td width="98" align="center" bgcolor="#FFFFCC"><span class="Estilo8 Estilo2 Estilo1">CANTIDAD </span></td>
        </tr>

        <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">HP P2055dn laserjet</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $uno;?></span></td>
        </tr>
         <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">HP p2035dn laserjet</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $dos;?></span></td>
        </tr>
         <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">EPSON T50 SERIES SISTEMA CONTINUO</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $tres;?></span></td>
        </tr>
 		<tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">HP 1022n laserjet</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $cuatro;?></span></td>
        </tr>

           <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">HP MFP 400 SERIES LASERJET</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $cinco;?></span></td>
        </tr>
         <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">EPSON L220</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $seis;?></span></td>
        </tr>
         <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">HP LASERJET P1102W</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $siete;?></span></td>
        </tr>
 		<tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">EPSON L355</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $ocho;?></span></td>
        </tr>
         		<tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">HP LASER JET  P3015</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $nueve;?></span></td>
        </tr>


    </table>
	</body>
</html>
