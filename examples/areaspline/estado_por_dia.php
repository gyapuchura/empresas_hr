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
		<title>Highcharts Example</title>

		<script type="text/javascript" src="jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'areaspline'
        },
        title: {
            text: 'CANTIDAD DE TRAMITES INTRODUCIDOS A SISTEMA POR CADA DIA'
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 150,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        xAxis: {
            categories: [
 <?

$numero = 0;


$link=Conectarse();
$sql = " SELECT idproceso, fecha_solic, idarea, fechacertif_poa FROM procesos GROUP BY fechacertif_poa ORDER BY fechacertif_poa";
$result = mysql_query($sql, $link);

$total = mysql_num_rows($result);

 if ($row = mysql_fetch_array($result)){

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
} do {
	?>



             '<? echo $row[3]; ?>'


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


echo ",";
/*
Si no se encontraron resultados

fecha.procesos,detalle.procesos,nombreunidad.unidad,nombredireccion.direccion,monto.procesos,evento.procesos,cite.procesos,preventivo.procesos,nombre.profesionales,observaciones.procesos ";
$sql .=" where citedgaa = '$cite' AND idunidad.procesos=idunidad.unidad AND iddireccion.procesos=ididreccion.direccion AND idprofesional.procesos=idprofesional.profesionales";
se muestra el siguiente mensaje
*/
}
?>

            ],
            plotBands: [{ // visualize the weekend
                from: 4.5,
                to: 6.5,
                color: 'rgba(68, 170, 213, .2)'
            }]
        },
        yAxis: {
            title: {
                text: 'Cantidad de Tramites'
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: '  Tramites'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            areaspline: {
                fillOpacity: 0.5
            }
        },
        series: [{
            name: 'N� DE TRAMITES',
            data: [

             <?

$numero = 0;


$link=Conectarse();
$sql = " SELECT idproceso, fecha_solic, idarea, fechacertif_poa FROM procesos GROUP BY fechacertif_poa ORDER BY fechacertif_poa";
$result = mysql_query($sql, $link);

$total = mysql_num_rows($result);

 if ($row = mysql_fetch_array($result)){

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
} do {
	?>

	<?

	$link7=Conectarse();
$sql7 = " SELECT idproceso FROM procesos WHERE fechacertif_poa='$row[3]'";
$result7 = mysql_query($sql7, $link7);

$procesos_dia = mysql_num_rows($result7);

?>



             <? echo $procesos_dia; ?>


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


echo ",";
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




   <?

$link9=Conectarse();
$sql9 = "SELECT DATEDIFF(  '$fecha', '2016-04-07' )";
$result9 = mysql_query($sql9,$link9);
$row9= mysql_fetch_array($result9);

$transcurrido = $row9[0];


	?>

 <? echo $transcurrido; ?>






             <?

$numero = 0;

$fecha_trans = '2016-04-06';


$link=Conectarse();
$sql = " SELECT * ";
$result = mysql_query($sql, $link);


 if ($row = mysql_fetch_array($result)){

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
} do {
	?>

	<?

$link7=Conectarse();
$sql7 = " SELECT DATE_ADD('$fecha_trans', INTERVAL 1 DAY)";
$result7 = mysql_query($sql7, $link7);
$row7 = mysql_fetch_array($result7);

$fecha_trans = $row7[0];

?>


 <? echo $fecha_trans; ?>


                           <?

$numero++;

if ($numero == $transcurrido) {

echo "";


}
else {



echo ",";

}


} while ($row = mysql_fetch_array($result));


} else {


echo ",";
/*
Si no se encontraron resultados

fecha.procesos,detalle.procesos,nombreunidad.unidad,nombredireccion.direccion,monto.procesos,evento.procesos,cite.procesos,preventivo.procesos,nombre.profesionales,observaciones.procesos ";
$sql .=" where citedgaa = '$cite' AND idunidad.procesos=idunidad.unidad AND iddireccion.procesos=ididreccion.direccion AND idprofesional.procesos=idprofesional.profesionales";
se muestra el siguiente mensaje
*/
}
?>

</body>
</html>
