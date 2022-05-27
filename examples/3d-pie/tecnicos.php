<? include("cabf.php");?>
<? include("inc.config.php");?>
<?php
date_default_timezone_set('UTC');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$idusuario_ss =  $_SESSION['idusuario_ss'];
$idnombre_ss =  $_SESSION['idnombre_ss'];

$link0=Conectarse();
$sql0 = " SELECT * FROM soporte ";
$result0 = mysql_query($sql0, $link0);
$total = mysql_num_rows($result0);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tecnico = '37' ";
$result = mysql_query($sql, $link);
$gon = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tecnico = '40'";
$result = mysql_query($sql, $link);
$vla = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte  WHERE tecnico = '352' ";
$result = mysql_query($sql, $link);
$ame = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte  WHERE tecnico = '38'";
$result = mysql_query($sql, $link);
$hans = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte  WHERE tecnico = '387'";
$result = mysql_query($sql, $link);
$elmer = mysql_num_rows($result);



$link=Conectarse();
$sql = " SELECT * FROM soporte  WHERE tecnico = '39'";
$result = mysql_query($sql, $link);
$marco = mysql_num_rows($result);


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
            text: 'CANTIDAD DE SOLICITUDES DE SOPORTE ATENDIDAS Y REGISTRADAS EN SISTEMA SAT'
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
                ['Luis Gonzalo Yapuchura',    <?echo $gon;?>],
                ['Vladimir Javier Loma',    <?echo $vla;?>],
                ['Efrain Americo Quispe',    <?echo $ame;?>],
                ['Hans Wilmer Choque',      <?echo $hans ;?>],
                ['Javier Elmer Quisbert',      <?echo $elmer;?>],

                ['Marco Antonio Mamani',      <?echo $marco;?>],



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

<table width="595" border="1" align="center" bordercolor="#009999">
               <tr>
          <td width="269" bgcolor="#FFFFCC"><div align="center"><span class="Estilo8 Estilo2 Estilo1">TECNICO RESPONSABLE </span></div></td>
          <td width="176" align="center" bgcolor="#FFFFCC">DETALLE</td>
          <td width="128" align="center" bgcolor="#FFFFCC"><div align="center"><span class="Estilo8 Estilo2 Estilo1">CANTIDAD </span></div></td>
        </tr>

        <tr>
          <td width="269" bgcolor="#FFFFFF"><div align="center"><span class="Estilo8 Estilo1 Estilo2">Luis Gonzalo Yapuchura</span></div></td>
          <td bgcolor="#FFFFFF" align="center"><a href="imprime_tecnico.php?tecnico=37" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $gon;?></span></div></td>
        </tr>
         <tr>
          <td width="269" bgcolor="#FFFFFF"><div align="center"><span class="Estilo8 Estilo1 Estilo2">Vladimir Javier Loma</span></div></td>
          <td bgcolor="#FFFFFF" align="center"><a href="imprime_tecnico.php?tecnico=40" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $vla;?></span></div></td>
        </tr>
         <tr>
          <td width="269" bgcolor="#FFFFFF"><div align="center"><span class="Estilo8 Estilo1 Estilo2">Efrain Americo Quispe</span></div></td>
          <td bgcolor="#FFFFFF" align="center"><a href="imprime_tecnico.php?tecnico=352" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $ame;?></span></div></td>
        </tr>
 		<tr>
          <td width="269" bgcolor="#FFFFFF"><div align="center"><span class="Estilo8 Estilo1 Estilo2">Hans Wilmer Choque</span></div></td>
          <td bgcolor="#FFFFFF" align="center"><a href="imprime_tecnico.php?tecnico=38" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $hans;?></span></div></td>
        </tr>
        <tr>
          <td width="269" bgcolor="#FFFFFF"><div align="center"><span class="Estilo8 Estilo1 Estilo2">Javier Elmer Quisbert</span></div></td>
          <td bgcolor="#FFFFFF" align="center"><a href="imprime_tecnico.php?tecnico=387" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $elmer;?></span></div></td>
        </tr>

         <tr>
          <td width="269" bgcolor="#FFFFFF"><div align="center"><span class="Estilo8 Estilo1 Estilo2">Marco Antonio Mamani</span></div></td>
          <td bgcolor="#FFFFFF" align="center"><a href="imprime_tecnico.php?tecnico=39" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $marco;?></span></div></td>
        </tr>

                <tr>
          <td width="269" bgcolor="#FFFFFF"><div align="center"><span class="Estilo8 Estilo1 Estilo2">TOTAL DE SOLICITUDES ATENDIDAS</span></div></td>
          <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $total;?></span></div></td>
        </tr>
    </table>
	</body>
</html>
