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

$idusuario_rep =  $_POST['idusuario_rep'];

// --- $idusuario_rep = $_POST['idusuario_rep']; para un usuario especifico ---//

$gestion       =  date("Y");
?>
<html>	
<head>
  <title>REPORTE HOJAS DE RUTA POR USUARIO</title>
</head>
	<body>
	<table width="200" border="1">
	  <tbody>

	    <tr>
	      <td>N°</td>
        <td>ORIGEN</td>
	      <td>REFERENCIA</td>
	      <td>PROCEDENCIA</td>
	      <td>FECHA DE LA HOJA DE RUTA</td>
		  <td>CODIGO</td>
	      <td>ESTADO DEL TRAMITE</td>
        </tr>

		<?php
$numero=1;
$sql =" SELECT idcorres FROM deriva_corres WHERE idusuariod='$idusuario_rep' GROUP BY idcorres ";
$result = mysqli_query($link,$sql);
if ($row = mysqli_fetch_array($result)){
mysqli_field_seek($result,0);
while ($field = mysqli_fetch_field($result)){
} do {

$sql2 =" SELECT origen, referencia, procedencia, fecha_corres, codigo, idestado FROM corres WHERE idcorres ='$row[0]' ";
$result2 = mysqli_query($link,$sql2);
$row2 = mysqli_fetch_array($result2);
    ?>
	    <tr>
		    <td><?php echo $numero;?></td>
        <td><?php echo $row2[0];?></td>
        <td><?php echo $row2[1];?></td>
        <td><?php echo $row2[2];?></td>
	      <td><?php echo $row2[3];?></td>
        <td><?php echo $row2[4];?></td>
        <td><?php 
        
        $sql3 = " SELECT bitacora_estado.idcorres, estado.estado FROM bitacora_estado, estado WHERE bitacora_estado.idusuario='$idusuario_rep' AND bitacora_estado.idestado=estado.idestado ORDER BY bitacora_estado.idbitacora_estado DESC LIMIT 1 ";
        $result3 = mysqli_query($link,$sql3);
        $row3 = mysqli_fetch_array($result3);
        echo $row3[1];?></td>	
        </tr>
		<?php
$numero = $numero+1; 
}
  while ($row = mysqli_fetch_array($result));
} else {
}
?>

      </tbody>
    </table>

</body>
</html>
