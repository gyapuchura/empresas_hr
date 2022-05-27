<?	header('Content-type: application/vnd.ms-excel');
	header("Content-Disposition: attachment; filename=Reporte_Global_Libros.xls");
	header("Pragma: no-cache");
	header("Expires: 0");?>
<? include("inc.config.php");?>
<html>

<head>
  <title>EDITORIAL</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
.Estilo10 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.Estilo11 {font-size: 10px}
.Estilo17 {font-family: Arial, Helvetica, sans-serif; font-size: 10; }
.Estilo18 {font-size: 10}
.Estilo19 {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo20 {font-family: Arial, Helvetica, sans-serif}
-->
</style></head>

<body>

    <span class="Estilo11">    </span>
    <span class="Estilo10">REPORTE GLOBAL de RED MINISTERIO DE CULTURAS Y TURISMO </span><br>
    <span class="Estilo4">&nbsp;<span class="Estilo7">

<tr>
  <td><div align="center">
    <table width="563" border="1" bordercolor="#000000">

      <tr>
          <td width="553" bgcolor="#FFFFFF"><div align="center">

              <table width="690" border="1" align="center">
                <tr>
                  <td ><span class="Estilo17">N&ordm; Tramite</span></td>
                  <td ><div align="center"><span class="Estilo17">OBJETO DE CONTRATACION</span></div></td>
                  <td ><div align="center"><span class="Estilo17">MONTO</span></div></td>
                  <td ><span class="Estilo17">FUENTE DE FINANCIAMIENTO </span></td>


                </tr>
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
$sql = "SELECT idequipo, mac, direccion_ip, idarea, poseedor, lugar ";
$sql.= "  ,tecnico FROM equipos ";
$sql.= " ORDER BY idequipo";

$result = mysql_query($sql, $link);

$numero = 1;

if ($row = mysql_fetch_array($result)){

mysql_field_seek($result,0);
while ($field = mysql_fetch_field($result)){
} do {



/*
Con "$row" mostramos los datos y
mostramos los registros
*/
?>
                <tr>
                  <td><span class="Estilo18"><?echo $row[0];?></span></td>
                  <td><div align="center"><span class="Estilo18"><?echo $row[1];?></span></div></td>
                  <td><div align="center"><span class="Estilo18"><?echo $row[2];?></span></div></td>
                  <td><div align="center"><span class="Estilo18">
                    <?php
 $link2=Conectarse();
$sql2 = " SELECT nombres.paterno, nombres.materno, nombres.nombres, cargos.nombrecargo, ";
$sql2.= " direccion.nombredireccion,unidad.nombreunidad,areas.idarea FROM usuarios,nombres,personal, ";
$sql2.= " cargos,areas,unidad,direccion WHERE usuarios.idnombre=nombres.idnombre AND personal.idnombre=nombres.idnombre AND ";
$sql2.= " personal.idcargo=cargos.idcargo AND  cargos.idarea=areas.idarea AND areas.idunidad=unidad.idunidad ";
$sql2.= " AND areas.iddireccion=direccion.iddireccion AND usuarios.idusuario='$row[4]'";
$result2 = mysql_query($sql2, $link2);
$row2 = mysql_fetch_array($result2);
?>
                    <?echo $row2[5];?>
                  </span></div></td>
                </tr>

 <?
 $numero= $numero + 1;
 }



 while ($row = mysql_fetch_array($result));



} else {
/*
Si no se encontraron resultados

fecha.procesos,detalle.procesos,nombreunidad.unidad,nombredireccion.direccion,monto.procesos,evento.procesos,cite.procesos,preventivo.procesos,nombre.profesionales,observaciones.procesos ";
$sql .=" where citedgaa = '$cite' AND idunidad.procesos=idunidad.unidad AND iddireccion.procesos=ididreccion.direccion AND idprofesional.procesos=idprofesional.profesionales";
se muestra el siguiente mensaje
*/
	echo "<p align=center> No hay procesos por mostrar!!</p>";
}
?>
              </table>





</div></td>
</tr>
    </table>
      <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p></td>
</tr>
<tr></tr>
<tr>
<body>

  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
</body>
</tr>






</tr>