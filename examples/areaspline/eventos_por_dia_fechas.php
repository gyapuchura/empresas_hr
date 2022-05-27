<? include("cabf.php");?>
<? include("inc.config.php");?>
<?php
date_default_timezone_set('UTC');
$fecha_ram	= date("Ymd");
$fecha 		= date("Y-m-d");

$gestion = date("Y");

$idusuario_ss =  $_SESSION['idusuario_ss'];
$idnombre_ss  =  $_SESSION['idnombre_ss'];

$inicio_ss = $_SESSION['inicio_ss'];
$fin_ss    = $_SESSION['fin_ss'];

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>EVENTOS POR DIA</title>

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
            text: 'CANTIDAD DE EVENTOS EJECUTADOS POR CADA DIA GESTION 2020'
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
$sql = " SELECT ideventoi, inicio, idmodalidad FROM eventoi WHERE gestion='$gestion' GROUP BY inicio  ORDER BY inicio ";
$result = mysql_query($sql, $link);

$total = mysql_num_rows($result);

 if ($row = mysql_fetch_array($result)){

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
} do {
	?>
             '<? echo $row[1]; ?>'

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
                text: 'Cantidad de Eventos'
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: 'EVENTOS'
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
            name: 'Eventos iniciados.',
            data: [

             <?

$numero = 0;


$link=Conectarse();
$sql = " SELECT ideventoi, inicio, idmodalidad FROM eventoi WHERE gestion='$gestion'  GROUP BY inicio ORDER BY inicio";
$result = mysql_query($sql, $link);

$total = mysql_num_rows($result);

 if ($row = mysql_fetch_array($result)){

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
} do {
	?>

	<?

$link7=Conectarse();
$sql7 = " SELECT ideventoi FROM eventoi WHERE gestion='$gestion'  AND inicio='$row[1]' ";
$result7 = mysql_query($sql7, $link7);

$evento_dia = mysql_num_rows($result7);

?>
             <? echo $evento_dia; ?>

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

$numero = 1;


$link=Conectarse();
$sql = " SELECT ideventoi, inicio, idmodalidad FROM eventoi WHERE gestion='$gestion' AND inicio BETWEEN '$inicio_ss' AND '$fin_ss' GROUP BY inicio ORDER BY inicio ";
$result = mysql_query($sql, $link);

$total = mysql_num_rows($result);

 if ($row = mysql_fetch_array($result)){

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
} do {
	?>

	<?

	$link7=Conectarse();
$sql7 = " SELECT ideventoi FROM eventoi WHERE gestion='$gestion' AND inicio='$row[1]'";
$result7 = mysql_query($sql7, $link7);

$procesos_dia = mysql_num_rows($result7);

?>

                           <?

$numero++;

if ($numero == $total) {

echo "";


}
else {



echo "";

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
