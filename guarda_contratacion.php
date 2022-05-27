<?php include("cabf.php");?>
<?php include("inc.config.php");?>
<?php
date_default_timezone_set('UTC');
$fecha 			= date("Y-m-d");
$idusuario_ss   = $_SESSION['idusuario_ss'];
$perfil_ss      = $_SESSION['perfil_ss'];

$gestion        = date("Y");

$cite   	= $_POST['cite'];
$fecha_con  = $_POST['fecha_sc'];

$fecha_i    = explode('/',$fecha_con);
$fecha_sc   = $fecha_i[2].'-'.$fecha_i[1].'-'.$fecha_i[0];

if ($fecha_con == '' || $cite == '')
{
header("Location:nueva_contratacion.php");
}
else {


$sqlm="SELECT MAX(numero) FROM contratacion WHERE gestion='$gestion'";
$resultm=mysqli_query($link,$sqlm);
$rowm=mysqli_fetch_array($resultm);

$numero_in = $rowm[0]+1;
$cite_sc   = "CGE-CENCAP-SC-".$cite."/".$gestion;

    
    $sql8 ="INSERT INTO contratacion (numero, fecha_sc, cite_sc, gestion, certificacion) ";
    $sql8.="VALUES ('$numero_in','$fecha_sc','$cite_sc','$gestion','SI' ) ";
    $result8 = mysqli_query($sql8);
    
    $idcontratacion = mysqli_insert_id();
    $_SESSION['idcontratacion_ss']= $idcontratacion;

    
    header("Location:elige_eventoi.php");
}

?>