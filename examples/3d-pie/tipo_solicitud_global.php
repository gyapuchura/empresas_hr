<? include("cabf.php");?>
<? include("inc.config.php");?>
<?php
date_default_timezone_set('UTC');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$idusuario_ss =  $_SESSION['idusuario_ss'];
$idnombre_ss =  $_SESSION['idnombre_ss'];

$tecnico =  $_GET['tecnico'];

$link0=Conectarse();
$sql0 = " SELECT * FROM soporte";
$result0 = mysql_query($sql0, $link0);
$total = mysql_num_rows($result0);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Reinstalación del equipo de Computación'";
$result = mysql_query($sql, $link);
$uno = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Desinfección y actualización de antivirus' ";
$result = mysql_query($sql, $link);
$dos = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Desbloqueo y reacondicionamiento de PC' ";
$result = mysql_query($sql, $link);
$tres = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Instalación de Software' ";
$result = mysql_query($sql, $link);
$cuatro = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Instalación de Cableado de red' ";
$result = mysql_query($sql, $link);
$cinco = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Mantenimiento de Impresoras'";
$result = mysql_query($sql, $link);
$seis = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Mantenimiento preventivo y correctivo' ";
$result = mysql_query($sql, $link);
$siete = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Capacitación de Software' ";
$result = mysql_query($sql, $link);
$ocho = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Instalación y cableado telefónico' ";
$result = mysql_query($sql, $link);
$nueve = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Realizacion de Respaldo de informacion' ";
$result = mysql_query($sql, $link);
$diez = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Problema al acceder a Internet' ";
$result = mysql_query($sql, $link);
$once = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Verificacion de Caracteristicas Tecnicas' ";
$result = mysql_query($sql, $link);
$doce = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Telefonia interna VoiP' ";
$result = mysql_query($sql, $link);
$trece = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Problemas con el Encendido del C.P.U.'";
$result = mysql_query($sql, $link);
$catorce = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Problemas con Periferico' ";
$result = mysql_query($sql, $link);
$quince = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Problema de acceso a SIGMA' ";
$result = mysql_query($sql, $link);
$dieciseis = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Desbloqueo de PC' ";
$result = mysql_query($sql, $link);
$diecisiete = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Instalación del equipo de Computación' ";
$result = mysql_query($sql, $link);
$dieciocho = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Solicitud de Diagnostico Tecnico' ";
$result = mysql_query($sql, $link);
$diecinueve = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Reparacion de Equipo de Computacion Portatil' ";
$result = mysql_query($sql, $link);
$veinte = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Problemas con Sistema de Seguridad' ";
$result = mysql_query($sql, $link);
$veintiuno = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Solicitud de Verificacion Tecnica'";
$result = mysql_query($sql, $link);
$veintidos = mysql_num_rows($result);

$link=Conectarse();
$sql = " SELECT * FROM soporte WHERE tipoproblema = 'Configuracion de RED para Video Conferencia Internacional'";
$result = mysql_query($sql, $link);
$veintitres = mysql_num_rows($result);


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
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'CANTIDAD DE SOLICITUDES DE SOPORTE POT TIPO DE PROBLEMA ATENDIDO  '
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
                ['Reinstalación del equipo de Computación',    <?echo $uno;?>],
                ['Desinfección y actualización de antivirus',    <?echo $dos;?>],
                ['Desbloqueo y reacondicionamiento de PC',    <?echo $tres;?>],
                ['Instalación de Software',      <?echo $cuatro ;?>],
                ['Instalación de Cableado de red',      <?echo $cinco;?>],
                ['Mantenimiento de Impresoras',    <?echo $seis;?>],
                ['Mantenimiento preventivo y correctivo',      <?echo $siete;?>],
                ['Capacitación de Software',    <?echo $ocho;?>],
                ['Instalación y cableado telefónico',    <?echo $nueve;?>],
                ['Realizacion de Respaldo de informacion',    <?echo $diez;?>],
                ['Problema al acceder a Internet',      <?echo $once ;?>],
                ['Verificacion de Caracteristicas Tecnicas',      <?echo $doce;?>],
                ['Telefonia interna VoiP',    <?echo $trece;?>],
                ['Problemas con el Encendido del C.P.U.',      <?echo $catorce;?>],
                ['Problemas con Periferico',    <?echo $quince;?>],
                ['Problema de acceso a SIGMA',    <?echo $dieciseis;?>],
                ['Desbloqueo de PC',    <?echo $diecisiete;?>],
                ['Instalación del equipo de Computación',      <?echo $dieciocho ;?>],
                ['Solicitud de Diagnostico Tecnico',      <?echo $diecinueve;?>],
                ['Reparacion de Equipo de Computacion Portatil',    <?echo $veinte;?>],
                ['Problemas con Sistema de Seguridad',      <?echo $veintiuno;?>],
                ['Solicitud de Verificacion Tecnica',    <?echo $veintidos;?>],
                ['Configuracion de RED para Video Conferencia Internacional',    <?echo $veintitres;?>],


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

<table width="749" border="1" align="center" bordercolor="#009999">
               <tr>
          <td width="479" bgcolor="#FFFFCC"><div align="center"><span class="Estilo8 Estilo2 Estilo1">TECNICO RESPONSABLE </span></div></td>
          <td width="124" align="center" bgcolor="#FFFFCC">DETALLE</td>
          <td width="124" align="center" bgcolor="#FFFFCC"><div align="center"><span class="Estilo8 Estilo2 Estilo1">CANTIDAD </span></div></td>
        </tr>

        <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Reinstalación del equipo de Computación</span></div></td>
          <td bgcolor="#FFFFFF" align="center"><a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Reinstalación del equipo de Computación" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $uno;?></span></div></td>
        </tr>
         <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Desinfección y actualización de antivirus</span></div></td>
          <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Desinfección y actualización de antivirus" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $dos;?></span></div></td>
        </tr>
         <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Desbloqueo y reacondicionamiento de PC</span></div></td>
          <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Desbloqueo y reacondicionamiento de PC" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $tres;?></span></div></td>
        </tr>

         		<tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Instalación de Software</span></div></td>
          <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Instalación de Cableado de red" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $cuatro;?></span></div></td>
        </tr>

 		<tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Instalación de Cableado de red</span></div></td>
          <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Instalación de Cableado de red" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $cinco;?></span></div></td>
        </tr>
        <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Mantenimiento de Impresoras</span></div></td>
          <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Mantenimiento de Impresoras" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $seis;?></span></div></td>
        </tr>
         <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Mantenimiento preventivo y correctivo</span></div></td>
          <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Mantenimiento preventivo y correctivo" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $siete;?></span></div></td>
        </tr>
         <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Capacitación de Software</span></div></td>
          <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Capacitación de Software" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $ocho;?></span></div></td>
        </tr>



        <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Instalación y cableado telefónico</span></div></td>
           <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Instalación y cableado telefónico" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $nueve;?></span></div></td>
        </tr>
         <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Realizacion de Respaldo de informacion</span></div></td>
           <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Realizacion de Respaldo de informacion" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $diez;?></span></div></td>
        </tr>
         <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Problema al acceder a Internet</span></div></td>
           <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Problema al acceder a Internet" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $once;?></span></div></td>
        </tr>
 		<tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Verificacion de Caracteristicas Tecnicas</span></div></td>
           <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Verificacion de Caracteristicas Tecnicas" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $doce;?></span></div></td>
        </tr>
        <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Telefonia interna VoiP</span></div></td>
           <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Telefonia interna VoiP" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $trece;?></span></div></td>
        </tr>
         <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Problemas con el Encendido del C.P.U.</span></div></td>
           <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Problemas con el Encendido del C.P.U." target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $catorce;?></span></div></td>
        </tr>
         <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Problemas con Periferico</span></div></td>
           <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Problemas con Periferico" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $quince;?></span></div></td>
        </tr>

        <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Problema de acceso a SIGMA</span></div></td>
          <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Problema de acceso a SIGMA" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $dieciseis;?></span></div></td>
        </tr>
         <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Desbloqueo de PC</span></div></td>
          <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Desbloqueo de PC" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $diecisiete;?></span></div></td>
        </tr>
         <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Instalación del equipo de Computación</span></div></td>
           <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Instalación del equipo de Computación" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $dieciocho;?></span></div></td>
        </tr>
 		<tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Solicitud de Diagnostico Tecnico</span></div></td>
           <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Solicitud de Diagnostico Tecnico" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $diecinueve;?></span></div></td>
        </tr>
        <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Reparacion de Equipo de Computacion Portatil</span></div></td>
          <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Reparacion de Equipo de Computacion Portatil" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $veinte;?></span></div></td>
        </tr>
         <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Problemas con Sistema de Seguridad</span></div></td>
           <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Problemas con Sistema de Seguridad" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $veintiuno;?></span></div></td>
        </tr>
         <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Solicitud de Verificacion Tecnica</span></div></td>
           <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Solicitud de Verificacion Tecnica" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $veintidos;?></span></div></td>
        </tr>

        <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">Configuracion de RED para Video Conferencia Internacional</span></div></td>
          <td bgcolor="#FFFFFF" align="center">
          <a href="reporte_tipoproblema.php?tecnico=<?echo $tecnico;?>&tipoproblema=Configuracion de RED para Video Conferencia Internacional" target="_blank" class="Estilo12" onClick="window.open(this.href, this.target, 'width=750,height=1000,scrollbars=YES'); return false;"> VER DETALLE </a></td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $veintitres;?></span></div></td>
        </tr>


                <tr>
          <td width="479" bgcolor="#FFFFFF"><div align="left"><span class="Estilo8 Estilo1 Estilo2">TOTAL DE SOLICITUDES ATENDIDAS</span></div></td>
          <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
          <td bgcolor="#FFFFFF" align="center"><div align="center"><span class="Estilo7"><?echo $total;?></span></div></td>
        </tr>
    </table>
	</body>
</html>
