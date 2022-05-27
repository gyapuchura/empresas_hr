<?php	
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=REPORTE SEGUIMIENTO HOJAS DE RUTA.xls");
header("Pragma: no-cache");
header("Expires: 0");?>
<?php include("cabf.php");?>
<?php include("inc.config.php");?>
<?php

date_default_timezone_set('America/La_Paz');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$idusuario_ss  =  $_SESSION['idusuario_ss'];
$idnombre_ss   =  $_SESSION['idnombre_ss'];
$perfil_ss     =  $_SESSION['perfil_ss'];

$gestion       =  date("Y");
?>

<html>
<head>
  <title>REPORTE SEGUIMIENTO</title>
</head>
	<body>
	<table width="200" border="1">
	  <tbody>
	    <tr>
	      <td>CODIGO</td>
	      <td>HOJA DE RUTA</td>
	      <td>REFERENCIA</td>
	      <td>TIPO HOJA DE RUTA</td>
		  <td>DERIVADA</td>
	      <td>DATOS DE LA ULTIMA DERIVACION</td>
        </tr>
<?php
$sql =" SELECT corres.idcorres, corres.gestion, corres.correlativo, corres.idusuario, corres.referencia, corres.procedencia, ";
$sql.=" corres.no_control, corres.fecha_corres, corres.anexo, corres.idestado, corres.codigo, corres.origen, tipo_hojaruta.tipo_hojaruta ";
$sql.=" FROM corres, tipo_hojaruta WHERE corres.idtipo_hojaruta=tipo_hojaruta.idtipo_hojaruta AND corres.gestion='$gestion' ORDER BY corres.idcorres ";
$result = mysqli_query($link,$sql);
if ($row = mysqli_fetch_array($result)){
mysqli_field_seek($result,0);
while ($field = mysqli_fetch_field($result)){
} do {
?>


	    <tr>
		<td><?php echo $row[10]?></td>
        <td><?php echo $row[11]?></td>
        <td><?php echo $row[4]?></td>
	    <td><?php echo $row[12]?></td>
		<td>
		<?php

$sqld = " SELECT idderiva_corres, idcorres, idusuarioo, idusuariod, fecha_recibe, comentario, derivada, recibida,";
$sqld.= " hora_recibe FROM deriva_corres WHERE derivada='SI' AND recibida='NO' AND idcorres='$row[0]'";

$resultd = mysqli_query($link,$sqld);

if ($rowd = mysqli_fetch_array($resultd)){

mysqli_field_seek($resultd,0);
while ($fieldd = mysqli_fetch_field($resultd)){
} do {
?>		
<?php echo $rowd[7]; ?>

<?php } while ($rowd = mysqli_fetch_array($resultd));

} else {

}
?>

<?php

$sqld = " SELECT idderiva_corres, idcorres, idusuarioo, idusuariod, fecha_recibe, comentario, derivada, recibida,";
$sqld.= " hora_recibe FROM deriva_corres WHERE derivada='NO' AND recibida='SI' AND idcorres='$row[0]'";

$resultd = mysqli_query($link,$sqld);

if ($rowd = mysqli_fetch_array($resultd)){

mysqli_field_seek($resultd,0);
while ($fieldd = mysqli_fetch_field($resultd)){
} do {
?>		
<?php echo $rowd[7]; ?>

<?php
} while ($rowd = mysqli_fetch_array($resultd));

} else {

}
?>

<?php

$sqld = " SELECT idderiva_corres, idcorres, idusuarioo, idusuariod, fecha_recibe, comentario, derivada, recibida,";
$sqld.= " hora_recibe FROM deriva_corres WHERE derivada='NO' AND recibida='NO' AND idcorres='$row[0]'";

$resultd = mysqli_query($link,$sqld);

if ($rowd = mysqli_fetch_array($resultd)){

mysqli_field_seek($resultd,0);
while ($fieldd = mysqli_fetch_field($resultd)){
} do {
?>		
<?php echo $rowd[7]; ?>

<?php
} while ($rowd = mysqli_fetch_array($resultd));

} else {

}
?>
	
	
	</td>
	    <td>
		
		<?php

$sql3 = " SELECT idderiva_corres, idcorres, idusuarioo, idusuariod, fecha_recibe, comentario, derivada, recibida,";
$sql3.= " hora_recibe FROM deriva_corres WHERE derivada='SI' AND recibida='NO' AND idcorres='$row[0]'";

$result3 = mysqli_query($link,$sql3);

if ($row3 = mysqli_fetch_array($result3)){

mysqli_field_seek($result3,0);
while ($field3 = mysqli_fetch_field($result3)){
} do {
?>

<?php
$origen = $row3[2];
$destino = $row3[3];


$sql4 = " SELECT nombres.nombres, nombres.paterno, nombres.materno, cargo.cargo ";
$sql4.= "  FROM usuarios, nombres, cargo WHERE usuarios.idnombre=nombres.idnombre ";
$sql4.= " AND usuarios.idcargo=cargo.idcargo ";
$sql4.= " AND usuarios.idusuario='$origen' ";

$result4 = mysqli_query($link,$sql4);
$row4 = mysqli_fetch_array($result4);


$sql5 = " SELECT nombres.nombres, nombres.paterno, nombres.materno, cargo.cargo ";
$sql5.= "  FROM usuarios, nombres, cargo WHERE usuarios.idnombre=nombres.idnombre ";
$sql5.= " AND usuarios.idcargo=cargo.idcargo ";
$sql5.= " AND usuarios.idusuario='$destino' ";

$result5 = mysqli_query($link,$sql5);
$row5 = mysqli_fetch_array($result5);
?>

De: <?php echo $row4[0]; ?> <?php echo $row4[1]; ?> <?php echo $row4[2]; ?> </br>
A: <?php echo $row5[0]; ?> <?php echo $row5[1]; ?> <?php echo $row5[2]; ?></br>
Fecha: 
<?php
if($row3[4]=="1111-11-11")
{echo "SIN RECIBIR";}
else{
	echo $row3[4];
}
?>

</br>
Recibida: <?php echo $row3[7]; ?> </br>
hora de recepción: <?php echo $row3[8]; ?>

<?php 
} while ($row3 = mysqli_fetch_array($result3));

} else {

}
?>
<?php

$sql3 = " SELECT idderiva_corres, idcorres, idusuarioo, idusuariod, fecha_recibe, comentario, derivada, recibida,";
$sql3.= " hora_recibe FROM deriva_corres WHERE derivada='NO' AND recibida='SI' AND idcorres='$row[0]'";

$result3 = mysqli_query($link,$sql3);

if ($row3 = mysqli_fetch_array($result3)){

mysqli_field_seek($result3,0);
while ($field3 = mysqli_fetch_field($result3)){
} do {
?>
<?php
$origen = $row3[2];
$destino = $row3[3];


$sql4 = " SELECT nombres.nombres, nombres.paterno, nombres.materno, cargo.cargo ";
$sql4.= "  FROM usuarios, nombres, cargo WHERE usuarios.idnombre=nombres.idnombre ";
$sql4.= " AND usuarios.idcargo=cargo.idcargo ";
$sql4.= " AND usuarios.idusuario='$origen' ";

$result4 = mysqli_query($link,$sql4);
$row4 = mysqli_fetch_array($result4);

$sql5 = " SELECT nombres.nombres, nombres.paterno, nombres.materno, cargo.cargo ";
$sql5.= "  FROM usuarios, nombres, cargo WHERE usuarios.idnombre=nombres.idnombre ";
$sql5.= " AND usuarios.idcargo=cargo.idcargo ";
$sql5.= " AND usuarios.idusuario='$destino' ";
$result5 = mysqli_query($link,$sql5);
$row5 = mysqli_fetch_array($result5);

?>
De: <?php echo $row4[0]; ?> &nbsp;<?php echo $row4[1]; ?> &nbsp;<?php echo $row4[2]; ?></br>
A: <?php echo $row5[0]; ?> &nbsp;<?php echo $row5[1]; ?> &nbsp;<?php echo $row5[2]; ?></br>
Fecha: <?php 
if($row3[4]=="1111-11-11")
{echo "SIN RECIBIR";}
else{
	echo $row3[4];
}
	?></br>
Recibida: <?php echo $row3[7]; ?> </br>
hora de recepción: <?php echo $row3[8]; ?>
<?php
} while ($row3 = mysqli_fetch_array($result3));

} else {

}
?>

		</td>
        </tr>

		<?php
   }

  while ($row = mysqli_fetch_array($result));
} else {
}
?>

      </tbody>
    </table>
		
		
</body>

</html>