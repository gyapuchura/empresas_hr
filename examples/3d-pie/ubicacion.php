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
$sql = " SELECT * FROM equipos WHERE lugar ='PALACIO CHICO' ";
$result = mysql_query($sql, $link);
$pchico = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE lugar ='EDIFICIO AGUIRRE' ";
$result = mysql_query($sql, $link);
$eaguirre = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE lugar ='EDIFICIO BALLIVIAN' ";
$result = mysql_query($sql, $link);
$eballivian = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE lugar ='EDIFICIO HANDAL'";
$result = mysql_query($sql, $link);
$ehandal = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE lugar ='MUSEO DE PIEDRA'";
$result = mysql_query($sql, $link);
$mpiedra = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE lugar ='CORAL BOLIVIANA'";
$result = mysql_query($sql, $link);
$coral = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM equipos WHERE lugar ='REPOSITORIO'";
$result = mysql_query($sql, $link);
$repo = mysql_num_rows($result);



$p_pchico       = ($pchico *100)/$total;
$p_eaguirre     = ($eaguirre *100)/$total;
$p_eballivian   = ($eballivian*100)/$total;
$p_ehandal      = ($ehandal*100)/$total;
$p_mpiedra      = ($mpiedra*100)/$total;
$p_coral      = ($coral*100)/$total;
$p_repo      = ($repo*100)/$total;

$por_pchico     = number_format($p_pchico, 2, '.', '');
$por_eaguirre   = number_format($p_eaguirre, 2, '.', '');
$por_eballivian = number_format($p_eballivian, 2, '.', '');
$por_ehandal    = number_format($p_ehandal, 2, '.', '');
$por_mpiedra    = number_format($p_mpiedra, 2, '.', '');
$por_coral   = number_format($p_coral, 2, '.', '');
$por_repo    = number_format($p_repo, 2, '.', '');




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
            text: 'DISPOSICION FISICA DE EQUIPOS DE COMPUTACION EN EL MINISTERIO DE CULTURAS'
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
                ['PALACIO CHICO',       <?echo $p_pchico;?>],
                ['EDIFICIO AGUIRRE',    <?echo $p_eaguirre;?>],
                ['EDIFICIO BALLIVIAN',  <?echo $p_eballivian;?>],
                ['EDIFICIO HANDAL',     <?echo $p_ehandal;?>],
                ['MUSEO DE PIEDRA',     <?echo $p_mpiedra;?>],
                ['CORAL BOLIVIANA',     <?echo $p_coral;?>],
                ['REPOSITORIO',     <?echo $p_repo;?>],

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

<table width="783" border="1" align="center" bordercolor="#009999">
               <tr>
          <td width="370" bgcolor="#FFFFCC"><span class="Estilo8 Estilo2 Estilo1">LUGAR </span></td>
          <td width="98" align="center" bgcolor="#FFFFCC"><span class="Estilo8 Estilo2 Estilo1">CANTIDAD </span></td>
          <td width="176" align="center" bgcolor="#FFFFCC"><span class="Estilo1">VER DETALLE </span></td>
          <td width="111" colspan="2" align="center" bgcolor="#FFFFCC"><span class="Estilo8 Estilo2 Estilo1">PORCENTAJE</span></td>
        </tr>

        <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">PALACIO CHICO </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $pchico;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_ubicacion.php?lugar=PALACIO CHICO" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7">   <?echo $por_pchico;?> %
          </span></td>
        </tr>
         <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">EDIFICIO AGUIRRE</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $eaguirre;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_ubicacion.php?lugar=EDIFICIO AGUIRRE" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"> <?echo $por_eaguirre;?> %
          </span></td>
        </tr>
         <tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">EDIFICIO BALLIVIAN </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $eballivian;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_ubicacion.php?lugar=EDIFICIO BALLIVIAN" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $por_eballivian;?> %
          </span></td>
        </tr>
 		<tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">EDIFICIO HANDAL </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $ehandal;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_ubicacion.php?lugar=EDIFICIO HANDAL" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $por_ehandal;?> %
          </span></td>
        </tr>
         		<tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">MUSEO DE ARQUEOLOGIA</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $mpiedra;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_ubicacion.php?lugar=MUSEO DE PIEDRA" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $por_mpiedra;?> %
          </span></td>
        </tr>

         		<tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">CORAL BOLIVIANA</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $coral;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_ubicacion.php?lugar=CORAL BOLIVIANA" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $por_corall;?> %
          </span></td>
        </tr>
         		<tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">REPOSITORIO</span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $repo;?></span></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_ubicacion.php?lugar=REPOSITORIO" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a> </td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $por_repo;?> %
          </span></td>
        </tr>

         		<tr>
          <td width="370" bgcolor="#FFFFFF"><span class="Estilo8 Estilo1 Estilo2">TOTAL DE EQUIPOS EN EL MINISTERIO DE CULTURAS Y TURISMO </span></td>
          <td bgcolor="#FFFFFF" align="center"><span class="Estilo7"><?echo $total;?></span></td>
          <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
          <td colspan="2" bgcolor="#FFFFFF" align="center"><span class="Estilo7"> 100 %
          </span></td>
        </tr>
    </table>
	</body>
</html>
