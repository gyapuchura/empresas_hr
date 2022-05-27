<?php include("cabf.php");?>
<?php include("inc.config.php");?>
<?php
$fecha 		  = date("Y-m-d");
$gestion      =  date("Y");

$idusuario_ss  =  $_SESSION['idusuario_ss'];
$idnombre_ss   =  $_SESSION['idnombre_ss'];
$perfil_ss     =  $_SESSION['perfil_ss'];

$idsolicitud_ss =  $_SESSION['idsolicitud_ss'];

$ideventoi = $_POST['ideventoi'];
$numero    = $_POST['numero'];
$factura   = $_POST['factura'];

$fecha_doc      = $_POST['fecha_docente'];
$fecha_i        = explode('/',$fecha_doc);
$fecha_docente  = $fecha_i[2].'-'.$fecha_i[1].'-'.$fecha_i[0];

$dias      = $_POST['dias'];

$contrato='CM/CP/CENCAP/'.$numero.'/'.$gestion;

$sql_desc = "SELECT retribucion FROM eventoi WHERE ideventoi='$ideventoi' ";
$result_desc = mysqli_query($link,$sql_desc);
$row_desc = mysqli_fetch_array($result_desc);
$retribucion = $row_desc[0];

if ($factura == "NO") {

    $iue = $retribucion * 0.125;
    $it  = $retribucion * 0.03;
    $multas = $dias * 0.01 * $retribucion;

    $descuento = $iue + $it + $multas;

    $sql0 = " UPDATE eventoi SET contrato='$contrato', factura='$factura', descuento='$descuento', fecha_docente='$fecha_docente', dias='$dias' ";
    $sql0.= " WHERE ideventoi='$ideventoi' ";
    $result0 = mysqli_query($link,$sql0);

    header("Location:mostrar_conformidad.php");
} else {

    $multas = $dias * 0.01 * $retribucion;

    $descuento = $multas;
   
    $sql0 = " UPDATE eventoi SET contrato='$contrato', factura='$factura', descuento='$descuento', fecha_docente='$fecha_docente', dias='$dias'";
    $sql0.= " WHERE ideventoi='$ideventoi' ";
    $result0 = mysqli_query($link,$sql0);

    header("Location:mostrar_conformidad.php");
}



?>