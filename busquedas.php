<?php include("cabf.php");?>
<?php include("inc.config.php");?>
<?php

date_default_timezone_set('UTC');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$idusuario_ss  =  $_SESSION['idusuario_ss'];
$idnombre_ss   =  $_SESSION['idnombre_ss'];
$perfil_ss     =  $_SESSION['perfil_ss'];

$gestion       =  date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SUBCONTRALORIA EMPRESAS PUBLICAS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
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
$rowus = mysqli_fetch_array($resultus);
?>
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

				<a class="navbar-brand" href="intranet.php"><img src="img/logo.png" alt="logo"/></a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  
                </div>

                <?php include("menu_corres.php");?>

            </div>
        </div>
	</header>
	<!-- end header -->

	<script src="jquery.min.js"></script>

<script>

	$(document).ready(function(){

		  var consulta;

		  //hacemos focus al campo de b�squeda
		  $("#busqueda").focus();

		  //comprobamos si se pulsa una tecla
		  $("#busqueda").keyup(function(e){

				//obtenemos el texto introducido en el campo de b�squeda
				consulta = $("#busqueda").val();

				 //hace la b�squeda

					 $.ajax({
						   type: "POST",
						   url: "buscar_corres.php",
						   data: "b="+consulta,
						   dataType: "html",
						   beforeSend: function(){
									  //imagen de carga
								   $("#resultado").html("<p align='center'><img src='ajax-loader.gif' /></p>");
						   },
						   error: function(){
								   alert("error petici�n ajax");
							 },
						  success: function(data){
								$("#resultado").empty();
								$("#resultado").append(data);
								//$("#busqueda").val(consulta);
							}
					});
		  });
	});

</script>

<script language="javascript" src="js/jquery-3.1.1.min.js"></script>


<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">BÚSQUEDAS</h2>
			</div>
		</div>
	</div>
</section>
<div class="container contenido">

<div class="row">
<div class="col-md-12"><h3> </h3></div>
</div>
<form name="BUSCA!" action="valida_correlativo.php" method="post">
<div class="box-area">
<div class="row">
<div class="col-md-4"><h3> BUSQUEDA POR CODIGO INTERNO 
<input type="hidden" class="form-control" name="origen" value="INTERNA">
</h3></div>
<div class="col-md-4"><h3><input type="text" class="form-control" name="correlativo"/></h3></div>
<div class="col-md-4"><h3><button type="submit" class="btn btn-primary">BUSCAR HOJA DE RUTA</button></h3></div>
</div>
</div>
</form>

<div class="row">
<div class="col-md-12"><h3> </h3></div>
</div>
<form name="CODIGO" action="valida_codigo.php" method="post">
<div class="box-area">
<div class="row">
<div class="col-md-4"><h3> BUSQUEDA POR NUMERO DE CONTROL EXTERNO</h3></div>
<div class="col-md-4"><h3><input type="text" class="form-control" name="codigo"/></h3></div>
<div class="col-md-4"><h3><button type="submit" class="btn btn-primary">BUSCAR HOJA DE RUTA</button></h3></div>
</div>
</div>
</form>

<div class="row">
<div class="col-md-12"><h3> </h3></div>
</div>

<div class="box-area">
<div class="row">
<div class="col-md-3"><h3> BUSQUEDA POR REFERENCIA: </h3></div>
<div class="col-md-9"><h3 class="text-muted">

<input type="text" class="form-control" placeholder=" " id="busqueda" />

<div id="resultado"></div>

</div>
</div>
</div>


<div class="row">
<div class="col-md-12"><h3> </h3></div>
</div>
<form name="" action="reporte_seguimiento_global.php" method="post">
<div class="box-area">
<div class="row">
<div class="col-md-6"><h3> REPORTE SEGUIMIENTO EN EXCEL </h3></div>
<div class="col-md-6"><h3><button type="submit" class="btn btn-primary">GENERAR REPORTE</button></h3></div>
</div>
</div>
</form>
<div class="row">
<div class="col-md-12"><h3> </h3></div>
</div>
</div>
	<footer>
	<?php include("footer.php");?>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script>
	function agregaform(datos){
d=datos.split('||');

$('#codigo').val(d[0]);
$('#tematica').val(d[1]);
$('docente').val(d[2]);
$('#adm').val(d[5]);
$('#ejec').val(d[6]);
$('#contrato').val(d[9]);
$('#preventivo').val(d[8]);
$('#creador').val(d[7]);

}
	</script>
</body>
</html>