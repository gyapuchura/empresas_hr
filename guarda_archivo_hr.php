<?php include("cabf.php");?>
<?php include("inc.config.php");?>
<?php
date_default_timezone_set('UTC');
$fecha 			= date("Y-m-d");
$idusuario_ss   = $_SESSION['idusuario_ss'];
$perfil_ss      = $_SESSION['perfil_ss'];

$gestion        = date("Y");

$idcorres       = $_POST['idcorres'];

$idubicacion_archivo = $_POST['idubicacion_archivo'];

if ($idubicacion_archivo=='') {
    header("Location:concluidas.php");
} else {
    
    $sql8 =" UPDATE corres SET idubicacion_archivo='$idubicacion_archivo', fecha_archivo='$fecha', idestado='4', usr_archivo='$idusuario_ss'  WHERE idcorres='$idcorres' ";
    $result8 = mysqli_query($link,$sql8);

    header("Location:concluidas.php");
}
?>