<?php include("cabf.php");?>
<?php include("inc.config.php");?>
<?php

date_default_timezone_set('UTC');
$fecha 			= date("Y-m-d");
$idusuario_ss   = $_SESSION['idusuario_ss'];
$perfil_ss      = $_SESSION['perfil_ss'];
$idcorres_ss    =  $_SESSION['idcorres_ss'];

$gestion        = date("Y");

$referencia   	 = $_POST['referencia'];
$procedencia     = $_POST['procedencia'];
$no_control	     = $_POST['no_control'];
$fecha_corres    = $_POST['fecha_corres'];
$anexo           = $_POST['anexo'];
$idtipo_hojaruta = $_POST['idtipo_hojaruta'];
    
    $sql8 =" UPDATE corres SET referencia='$referencia', procedencia='$procedencia', no_control='$no_control', fecha_corres='$fecha_corres', ";
    $sql8.=" anexo='$anexo', idtipo_hojaruta='$idtipo_hojaruta' WHERE idcorres='$idcorres_ss' ";
    $result8 = mysqli_query($link,$sql8);

    header("Location: modifica_hoja_ruta.php");
?>