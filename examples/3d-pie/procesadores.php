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
$sql = " SELECT * FROM equipos WHERE procesador LIKE '%pentium 4%' ";
$result = mysql_query($sql, $link);
$pr_cuatro= mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE procesador LIKE '%pentium d%' ";
$result = mysql_query($sql, $link);
$pr_de = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE procesador LIKE '%core duo%' ";
$result = mysql_query($sql, $link);
$pr_core = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE procesador LIKE '%core 2 duo%'";
$result = mysql_query($sql, $link);
$pr_coredos = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE procesador LIKE '%quadcore%'";
$result = mysql_query($sql, $link);
$pr_quad = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE procesador LIKE '%i3%'";
$result = mysql_query($sql, $link);
$pr_itres = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE procesador LIKE '%i5%'";
$result = mysql_query($sql, $link);
$pr_icinco = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE procesador LIKE '%i7%'";
$result = mysql_query($sql, $link);
$pr_isiete = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE procesador LIKE '%amd%'";
$result = mysql_query($sql, $link);
$pr_amd = mysql_num_rows($result);


$p_cuatro       = ($pr_cuatro  *100)/$total;
$p_de           = ($pr_de *100)/$total;
$p_core         = ($pr_core*100)/$total;
$p_coredos      = ($pr_coredos*100)/$total;
$p_quad         = ($pr_quad*100)/$total;
$p_itres        = ($pr_itres*100)/$total;
$p_icinco       = ($pr_icinco*100)/$total;
$p_isiete       = ($pr_isiete*100)/$total;

$por_cuatro     = number_format($p_cuatro, 2, '.', '');
$por_de         = number_format($p_de, 2, '.', '');
$por_core       = number_format($p_core, 2, '.', '');
$por_coredos    = number_format($p_coredos, 2, '.', '');
$por_quad       = number_format($p_quad , 2, '.', '');
$por_itres      = number_format($p_itres, 2, '.', '');
$por_icinco     = number_format($p_icinco, 2, '.', '');
$por_isiete     = number_format($p_isiete, 2, '.', '');


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
	font-weight: bold;
	color: #003399;
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
            text: 'DISPOSICION DE EQUIPOS DE COMPUTACION EN EL MINISTERIO DE CULTURAS POR TIPO DE PROCESADOR'
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
                ['PENTIUM IV',       <?echo $pr_cuatro;?>],
                ['PENTIUM D',        <?echo $pr_de;?>],
                ['CORE DUO',         <?echo $pr_core;?>],
                ['CORE 2 DUO',       <?echo $pr_coredos;?>],
                ['QUAD CORE',        <?echo $pr_quad;?>],
                ['CORE i3',          <?echo $pr_itres;?>],
                ['CORE i5',          <?echo $pr_icinco;?>],
                ['CORE i7',          <?echo $pr_isiete;?>],
                ['AMD',              <?echo $pr_amd;?>]

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

<table width="598" border="1" align="center" bordercolor="#009999">
               <tr>
          <td width="280" bgcolor="#FFFFCC"><span class="Estilo2 Estilo1 Estilo8 Estilo4"><strong>TIPO DE PROCESADOR </strong></span></td>
          <td width="188" align="center" bgcolor="#FFFFCC"><span class="Estilo3">DETALLE</span></td>
          <td width="98" align="center" bgcolor="#FFFFCC"><span class="Estilo2 Estilo1 Estilo8 Estilo4"><strong>CANTIDAD </strong></span></td>
        </tr>
        <tr>
          <td width="280" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">PENTIUM IV </span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_procesador.php?procesador=pentium 4" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $pr_cuatro;?></span></td>
        </tr>
         <tr>
          <td width="280" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">PENTIUM D</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_procesador.php?procesador=pentium d" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $pr_de;?></span></td>
        </tr>
         <tr>
          <td width="280" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CORE DUO </span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_procesador.php?procesador=core duo" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $pr_core;?></span></td>
        </tr>
 		<tr>
          <td width="280" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CORE 2 DUO</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_procesador.php?procesador=core 2 duo" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $pr_coredos;?></span></td>
        </tr>
         		<tr>
          <td width="280" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">QUAD CORE</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_procesador.php?procesador=quadcore" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $pr_quad;?></span></td>
        </tr>

                 <tr>
          <td width="280" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CORE i3</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_procesador.php?procesador=i3" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $pr_itres;?></span></td>
        </tr>
 		<tr>
          <td width="280" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CORE i5</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_procesador.php?procesador=i5" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $pr_icinco;?></span></td>
        </tr>
         		<tr>
          <td width="280" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CORE i7</span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_procesador.php?procesador=i7" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $pr_isiete;?></span></td>
        </tr>
                 		<tr>
          <td width="280" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2"> PROCESADOR AMD </span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_procesador.php?procesador=amd" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $pr_amd;?></span></td>
        </tr>
                         		<tr>
          <td width="280" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2"> TOTAL DE EQUIPOS </span></td>
          <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $total;?></span></td>
        </tr>
    </table>
	</body>
</html>
