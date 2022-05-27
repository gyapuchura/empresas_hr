<? include("cabf.php");?>
<? include("inc.config.php");?>
<?php
date_default_timezone_set('UTC');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$idusuario_ss =  $_SESSION['idusuario_ss'];
$idnombre_ss =  $_SESSION['idnombre_ss'];

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Usuarios Recurrentes</title>

		<script type="text/javascript" src="jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Cantidad de Solicitudes por cada Servidor Publico'
        },
        subtitle: {
            text: 'Fuente: SISTEMA DE ASISTENCIA TECNICA DE LA UPTI'
        },
        xAxis: {
            categories: [

<?

$numero = 0;
$link=Conectarse();
$sql = " SELECT idactiv_soporte, solicitante, fecha_activ FROM activ_soporte GROUP BY solicitante ORDER BY solicitante";
$result = mysql_query($sql, $link);

$total = mysql_num_rows($result);

 if ($row = mysql_fetch_array($result)){

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
} do {
	?>

	<?

$solicitante = $row[1];

$link1=Conectarse();
$sql1 = " SELECT nombres.nombres, nombres.paterno FROM nombres,usuarios WHERE nombres.idnombre=usuarios.idnombre AND usuarios.idusuario='$solicitante'";
$result1 = mysql_query($sql1, $link1);
$row1 = mysql_fetch_array($result1);

$link3=Conectarse();
$sql3 = " SELECT * FROM activ_soporte WHERE solicitante='$solicitante'; ";
$result3 = mysql_query($sql3, $link3);
$por_idnombre = mysql_num_rows($result3);

$p_nombre       = ($por_idnombre*100)/$total;

?>

             '<? echo $row1[0]; ?><? echo ' '; ?><? echo $row1[1]; ?>'



                           <?
$numero++;

if ($numero == $total) {

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


            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (Tramites)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} Solicitudes</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'CANTIDAD DE SOLICITUDES DE SOPORTE',
            data: [


<?

$numero = 0;
$link=Conectarse();
$sql = " SELECT idactiv_soporte, solicitante, fecha_activ FROM activ_soporte GROUP BY solicitante ORDER BY solicitante ";
$result = mysql_query($sql, $link);

$total = mysql_num_rows($result);

 if ($row = mysql_fetch_array($result)){

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
} do {
	?>

	<?

$solicitante = $row[1];

$link1=Conectarse();
$sql1 = " SELECT nombres.nombres, nombres.paterno FROM nombres,usuarios WHERE nombres.idnombre=usuarios.idnombre AND usuarios.idusuario='$solicitante'";
$result1 = mysql_query($sql1, $link1);
$row1 = mysql_fetch_array($result1);

$link3=Conectarse();
$sql3 = " SELECT * FROM activ_soporte WHERE solicitante='$solicitante'; ";
$result3 = mysql_query($sql3, $link3);
$por_idnombre = mysql_num_rows($result3);

?>

<? echo $por_idnombre; ?>



                           <?
$numero++;

if ($numero == $total) {

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
<script src="../../js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>








	</body>
</html>
