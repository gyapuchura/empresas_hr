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
$sql = " SELECT * FROM equipos WHERE ram LIKE '%256 MB%' ";
$result = mysql_query($sql, $link);
$cuarto = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE ram LIKE '%512 MB%' ";
$result = mysql_query($sql, $link);
$quinientos = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE ram LIKE '%1 GB%' ";
$result = mysql_query($sql, $link);
$giga = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE ram LIKE '%2 GB%'";
$result = mysql_query($sql, $link);
$dosgigas = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE ram LIKE '%4 GB%'";
$result = mysql_query($sql, $link);
$cuatrog = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE ram LIKE '%8 GB%'";
$result = mysql_query($sql, $link);
$ochog = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE ram LIKE '%16 GB%'";
$result = mysql_query($sql, $link);
$hexg = mysql_num_rows($result);



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
        .Estilo2 {color: #003399}
        .Estilo3 {
	color: #003399;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
        .Estilo4 {font-size: 16px}
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
            text: 'MEMORIA RAM DE EQUIPOS DE COMPUTACION EN EL MINISTERIO DE CULTURAS'
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
                ['RAM = 256 MB',    <?echo $cuarto;?>],
                ['RAM = 512 MB',    <?echo $quinientos;?>],
                ['RAM = 1 GB',      <?echo $giga;?>],
                ['RAM = 2 GB',      <?echo $dosgigas;?>],
                ['RAM = 4 GB',      <?echo $cuatrog;?>],
                ['RAM = 8 GB',      <?echo $ochog;?>],
                ['RAM = 16 GB',     <?echo $hexg;?>],

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
          <td width="287" bgcolor="#FFFFCC"><span class="Estilo4 Estilo1 Estilo2 Estilo8"><strong>CAPACIDAD DE MEMORIA </strong></span></td>
          <td width="187" align="center" bgcolor="#FFFFCC"><span class="Estilo3">DETALLE</span></td>
          <td width="92" align="center" bgcolor="#FFFFCC"><span class="Estilo4 Estilo1 Estilo2 Estilo8"><strong>CANTIDAD </strong></span></td>
        </tr>

        <tr>
          <td width="287" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">RAM = 256 MB </span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_memoria.php?ram=256 MB" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $cuarto;?></span></td>
        </tr>
         <tr>
          <td width="287" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">RAM = 512 MB</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_memoria.php?ram=512 MB" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $quinientos;?></span></td>
        </tr>
         <tr>
          <td width="287" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">RAM = 1 GB </span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_memoria.php?ram=1 GB" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $giga;?></span></td>
        </tr>
 		<tr>
          <td width="287" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">RAM = 2 GB</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_memoria.php?ram=2 GB" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $dosgigas;?></span></td>
        </tr>
         		<tr>
          <td width="287" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">RAM = 4 GB</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_memoria.php?ram=4 GB" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $cuatrog;?></span></td>
        </tr>
         		<tr>
          <td width="287" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">RAM = 8 GB</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_memoria.php?ram=8 GB" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $ochog;?></span></td>
        </tr>
         		<tr>
          <td width="287" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">RAM = 16 GB</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_memoria.php?ram=16 GB" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $hexg;?></span></td>
        </tr>
        <tr>
          <td width="287" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">TOTAL</span></td>
          <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $total;?></span></td>
        </tr>
    </table>
	</body>
</html>
