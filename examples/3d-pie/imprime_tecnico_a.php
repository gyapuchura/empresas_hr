<? include("inc.config.php");?>
<?
$link=Conectarse();
date_default_timezone_set('UTC');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$idusuario_ss =  $_SESSION['idusuario_ss'];
$idnombre_ss =  $_SESSION['idnombre_ss'];
$idarea_ss =  $_SESSION['idarea_ss'];

$tecnico =  $_GET['tecnico'];


?>

<html>

<head>
  <title></title>
  <style type="text/css">
<!--
.Estilo13 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; }
.Estilo18 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 10px;
}
.Estilo19 {font-size: 16px}
.Estilo21 {font-size: 10px}
-->
  </style>
</head>

<body>
<p align="center" class="Estilo18 Estilo19">LISTADO GLOBAL DE SOLICITUDES ATENDIDAS <br />

      <?php
 $link0=Conectarse();
$sql0 = " SELECT nombres.paterno, nombres.materno, nombres.nombres, cargos.nombrecargo, ";
$sql0.= " direccion.nombredireccion,unidad.nombreunidad,areas.idarea FROM usuarios,nombres,personal, ";
$sql0.= " cargos,areas,unidad,direccion WHERE usuarios.idnombre=nombres.idnombre AND personal.idnombre=nombres.idnombre AND ";
$sql0.= " personal.idcargo=cargos.idcargo AND  cargos.idarea=areas.idarea AND areas.idunidad=unidad.idunidad ";
$sql0.= " AND areas.iddireccion=direccion.iddireccion AND usuarios.idusuario='$tecnico'";
$result0 = mysql_query($sql0, $link0);
$row0 = mysql_fetch_array($result0);
?> Responsable: <br /> <?echo $row0[2];?> <?echo $row0[0];?>

 <p align ="center">
               <a href="tipo_solicitud_a.php?tecnico=<?echo $tecnico;?>" target="_blank" onClick="window.open(this.href, this.target, 'width=1000,height=900,scrollbars=YES'); return false;">
    REPORTE POR TIPO DE PROBLEMAS ATENDIDOS</a></p>

<?php
$link0=Conectarse();
$sql0 = " SELECT * FROM activ_soporte WHERE tecnico='$tecnico'";
$result0 = mysql_query($sql0, $link0);
$total = mysql_num_rows($result0);

?>     <br /> TOTAL DE SOLICITUDES ATENDIDAS = <?echo $total;?>
</p>
<table width="577" border="1" align="center" bordercolor="#999999">
    <tr bgcolor="#CCFFFF">
      <td width="34" bgcolor="#FFFFCC"><span class="Estilo13 Estilo22 Estilo21">N&ordm;</span></td>
      <td width="162" bgcolor="#FFFFCC"><span class="Estilo13 Estilo22 Estilo21">SOLICITANTE </span></td>
      <td width="139" bgcolor="#FFFFCC"><span class="Estilo13 Estilo22 Estilo21">TECNICO RESPONSABLE</span></td>
      <td width="96" bgcolor="#FFFFCC"><span class="Estilo13 Estilo22 Estilo21">FECHA SOLICITUD</span></td>
      <td width="112" bgcolor="#FFFFCC"><span class="Estilo13 Estilo22 Estilo21">TIPO SOLICITUD</span></td>
    </tr>

  <p>&nbsp;  </p>
  <p>
    <?
/* Incluimos el fichero de conexi&oacute;n
a la base de datos mysql */
/*
Realizamos la consulta a la base datos
note que estamos trabajando con "inner join"
para relacionar 2 tablas libros y autor, con
"$sql .=" se puede separar la consulta en 2 líneas a mas,
este tipo de consulta es para buscar un dato exacto
en la base de datos "where libros.titulo = '$libro'"
*/


$link=Conectarse();
$sql = "SELECT idactiv_soporte, tecnico, solicitante, fecha_activ, idtipo_sol";
$sql.= " FROM activ_soporte WHERE tecnico='$tecnico' ORDER BY idactiv_soporte ";

$result = mysql_query($sql, $link);
if ($row = mysql_fetch_array($result)){

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
} do {   ?>
 <tr>
      <td bgcolor="#FFFFFF"><span class="Estilo13 Estilo23 Estilo22 Estilo21"><?echo $row[0];?></span></td>
      <td bgcolor="#FFFFFF"><span class="Estilo13 Estilo23 Estilo22 Estilo21">

      <?php
 $link2=Conectarse();
$sql2 = " SELECT nombres.paterno, nombres.materno, nombres.nombres, cargos.nombrecargo, ";
$sql2.= " direccion.nombredireccion,unidad.nombreunidad,areas.idarea FROM usuarios,nombres,personal, ";
$sql2.= " cargos,areas,unidad,direccion WHERE usuarios.idnombre=nombres.idnombre AND personal.idnombre=nombres.idnombre AND ";
$sql2.= " personal.idcargo=cargos.idcargo AND  cargos.idarea=areas.idarea AND areas.idunidad=unidad.idunidad ";
$sql2.= " AND areas.iddireccion=direccion.iddireccion AND usuarios.idusuario='$row[2]'";
$result2 = mysql_query($sql2, $link2);
$row2 = mysql_fetch_array($result2);
?> <?echo $row2[2];?> <?echo $row2[0];?> <br /> <?echo $row2[3];?>

      </span></td>
      <td bgcolor="#FFFFFF"><span class="Estilo13 Estilo23 Estilo22 Estilo21">

      <?php
 $link1=Conectarse();
$sql1 = " SELECT nombres.paterno, nombres.materno, nombres.nombres, cargos.nombrecargo, ";
$sql1.= " direccion.nombredireccion,unidad.nombreunidad,areas.idarea FROM usuarios,nombres,personal, ";
$sql1.= " cargos,areas,unidad,direccion WHERE usuarios.idnombre=nombres.idnombre AND personal.idnombre=nombres.idnombre AND ";
$sql1.= " personal.idcargo=cargos.idcargo AND  cargos.idarea=areas.idarea AND areas.idunidad=unidad.idunidad ";
$sql1.= " AND areas.iddireccion=direccion.iddireccion AND usuarios.idusuario='$row[1]'";
$result1 = mysql_query($sql1, $link1);
$row1 = mysql_fetch_array($result1);
?> <?echo $row1[2];?> <?echo $row1[0];?>

      </span></td>
      <td bgcolor="#FFFFFF"><span class="Estilo13 Estilo23 Estilo22 Estilo21"><?echo $row[3];?> </span></td>
      <td bgcolor="#FFFFFF"><span class="Estilo13 Estilo23 Estilo22 Estilo21"><?

$link5=Conectarse();
$sql5 = "SELECT idtipo_sol, nombre_tiposol ";
$sql5.= " FROM tipo_sol WHERE idtipo_sol='$row[4]' ";

$result5 = mysql_query($sql5, $link5);
$row5 = mysql_fetch_array($result5);



      echo $row5[1];?></span></td>
  </tr>


   <?} while ($row = mysql_fetch_array($result));



} else {
/*
Si no se encontraron resultados

fecha.procesos,detalle.procesos,nombreunidad.unidad,nombredireccion.direccion,monto.procesos,evento.procesos,cite.procesos,preventivo.procesos,nombre.profesionales,observaciones.procesos ";
$sql .=" where citedgaa = '$cite' AND idunidad.procesos=idunidad.unidad AND iddireccion.procesos=ididreccion.direccion AND idprofesional.procesos=idprofesional.profesionales";
se muestra el siguiente mensaje
*/
	echo "<p align=center> No hay solicitudes por mostrar!!</p>";
}
?>
</table>
</body>

</html>