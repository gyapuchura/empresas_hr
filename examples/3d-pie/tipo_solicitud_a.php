<? include("cabf.php");?>
<? include("inc.config.php");?>
<?php
date_default_timezone_set('UTC');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$idusuario_ss =  $_SESSION['idusuario_ss'];
$idnombre_ss =  $_SESSION['idnombre_ss'];

$tecnico =  $_GET['tecnico'];

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
                alpha: 35,
                beta: 0
            }
        },
        title: {
            text: 'CANTIDAD DE SOLICITUDES DE SOPORTE POR TIPO DE PROBLEMA '
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


<?
$numeroa = 0;

$link=Conectarse();
$sql = " SELECT idactiv_soporte, idtipo_sol FROM activ_soporte WHERE tecnico='$tecnico' ";
$sql.= " GROUP BY idtipo_sol ORDER BY idtipo_sol ";
$result = mysql_query($sql,$link);

$totala = mysql_num_rows($result);

 if ($row = mysql_fetch_array($result)){

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
} do {
	?>


<?
$link2=Conectarse();
$sql2 = " SELECT * FROM activ_soporte WHERE tecnico='$tecnico' AND idtipo_sol ='$row[1]'";
$result2 = mysql_query($sql2,$link2);

$cantidad = mysql_num_rows($result2);

$link3 =Conectarse();
$sql3 = " SELECT idtipo_sol, nombre_tiposol FROM tipo_sol WHERE idtipo_sol ='$row[1]' ";
$result3 = mysql_query($sql3,$link3);

$row3 = mysql_fetch_array($result3);

$tipos = $row3[0];


?>


 ['<? echo $tipos;?>', <? echo $cantidad; ?>]


<?

$numeroa++;

if ($numeroa == $totala) {

echo "";


}
else {



echo ",";

}


} while ($row = mysql_fetch_array($result));


} else {


echo "";
/*
Si no se encontraron resultados

fecha.procesos,detalle.procesos,nombreunidad.unidad,nombredireccion.direccion,monto.procesos,evento.procesos,cite.procesos,preventivo.procesos,nombre.profesionales,observaciones.procesos ";
$sql .=" where citedgaa = '$cite' AND idunidad.procesos=idunidad.unidad AND iddireccion.procesos=ididreccion.direccion AND idprofesional.procesos=idprofesional.profesionales";
se muestra el siguiente mensaje
*/
}
?>



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

<div id="container" style="height:500px "></div>

<table width="749" border="1" align="center" bordercolor="#009999">
         <tr>
         <td width="110" bgcolor="#FFFFCC"><div align="center"><span class="Estilo8 Estilo2 Estilo1">REFERENCIA</span></div></td>
          <td width="388" bgcolor="#FFFFCC"><div align="center"><span class="Estilo8 Estilo2 Estilo1">TIPO DE SOLICITUD ATENDIDA </span></div></td>
          <td width="108" align="center" bgcolor="#FFFFCC">DETALLE</td>
          <td width="115" align="center" bgcolor="#FFFFCC"><div align="center"><span class="Estilo8 Estilo2 Estilo1">CANTIDAD </span></div></td>
        </tr>
        <?
$numeroa = 0;

$link=Conectarse();
$sql = " SELECT idactiv_soporte, idtipo_sol FROM activ_soporte WHERE tecnico='$tecnico' ";
$sql.= " GROUP BY idtipo_sol ORDER BY idtipo_sol ";
$result = mysql_query($sql,$link);

$totala = mysql_num_rows($result);

 if ($row = mysql_fetch_array($result)){

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
} do {
	?>


<?
$link2=Conectarse();
$sql2 = " SELECT * FROM activ_soporte WHERE tecnico='$tecnico' AND idtipo_sol ='$row[1]'";
$result2 = mysql_query($sql2,$link2);

$cantidad = mysql_num_rows($result2);

$link3 =Conectarse();
$sql3 = " SELECT idtipo_sol, nombre_tiposol FROM tipo_sol WHERE idtipo_sol ='$row[1]' ";
$result3 = mysql_query($sql3,$link3);

$row3 = mysql_fetch_array($result3);

$ref = $row3[0];
$tipos = $row3[1];


?>



         <tr>
         <td width="110" bgcolor="#FFFFFF"><div align="center"><span class="Estilo8 Estilo1 Estilo2"><? echo $ref;?></span></div></td>
          <td width="388" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2"><? echo $tipos;?></span></div></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_tipoproblema_a.php?tecnico=<?echo $tecnico;?>&idtipo_sol=<? echo $row[1];?>" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $cantidad;?></span></div></td>
        </tr>


<?

$numeroa++;

if ($numeroa == $totala) {

echo "";


}
else {



echo "";

}


} while ($row = mysql_fetch_array($result));


} else {


echo "";
/*
Si no se encontraron resultados

fecha.procesos,detalle.procesos,nombreunidad.unidad,nombredireccion.direccion,monto.procesos,evento.procesos,cite.procesos,preventivo.procesos,nombre.profesionales,observaciones.procesos ";
$sql .=" where citedgaa = '$cite' AND idunidad.procesos=idunidad.unidad AND iddireccion.procesos=ididreccion.direccion AND idprofesional.procesos=idprofesional.profesionales";
se muestra el siguiente mensaje
*/
}
?>





    </table>
	</body>
</html>
