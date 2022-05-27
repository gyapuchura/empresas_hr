<?php include("cabf.php");?>
<?php include("inc.config.php");?>
<?php

date_default_timezone_set('America/La_Paz');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$idusuario_ss = $_SESSION['idusuario_ss'];
$idnombre_ss  = $_SESSION['idnombre_ss'];
$perfil_ss    = $_SESSION['perfil_ss'];
$idarea_ss    = $_SESSION['idarea_ss'];

$idcorres_ss        = $_SESSION['idcorres_ss'];
$idderiva_corres_ss = $_SESSION['idderiva_corres_ss'];

$gestion      = date("Y");

$sql1 = " SELECT corres.idcorres, corres.gestion, corres.correlativo, corres.idusuario, corres.referencia, corres.procedencia, corres.no_control, ";
$sql1.= " corres.fecha_corres, corres.anexo, corres.codigo, corres.origen, documento_adj.documento_adj, corres.fecha_recib, corres.hora_recib, ";
$sql1.= " tipo_hojaruta.tipo_hojaruta FROM corres, documento_adj, tipo_hojaruta WHERE corres.iddocumento_adj=documento_adj.iddocumento_adj  ";
$sql1.= " AND corres.idtipo_hojaruta=tipo_hojaruta.idtipo_hojaruta AND corres.idcorres='$idcorres_ss' ";
$result1 = mysqli_query($link,$sql1);
$row1 = mysqli_fetch_array($result1);
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="intranet.php"><img src="img/logo.png" alt="logo"/></a>
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
				<h2 class="pageTitle">ATENCIÓN A LA HOJA DE RUTA <?php echo $row1[9];?></h2>
			</div>
		</div>
	</div>
</section>
<div class="container contenido">

<div class="row">
<div class="col-md-4"> </div>
<div class="col-md-4">

<form name="VOLVER" action="hoja_ruta_recibida.php" method="post">
<h3><button type="submmit" class="btn-link" >VOLVER</button></h3>
</form>
</div>
<div class="col-md-4"></div>
</div>

 <div class="row" align="center"> <h3>

<div class="box-area">
 <div class="row">
  <div class="col-md-2"><h4>CODIGO</h4></div>
  <div class="col-md-2"><h4 class="text-muted"><?php echo $row1[9];?></h4></div>
  <div class="col-md-2"><h4>REFERENCIA</h4></div>
  <div class="col-md-6"><h4 class="text-muted"><?php echo $row1[4];?></h4></div>
 </div>

<div class="row">
  <div class="col-md-3"><h4>PROCEDENCIA</h4></div>
  <div class="col-md-3"><h4 class="text-muted"><?php echo $row1[5];?></h4></div>
  <div class="col-md-3"><h4>FECHA:</h4></div>
  <div class="col-md-3"><h4 class="text-muted">
    <?php 
            $fecha_elab1 = explode('-',$row1[7]);
            $f_corres    = $fecha_elab1[2].'/'.$fecha_elab1[1].'/'.$fecha_elab1[0];
            echo $f_corres;
      ?>
  </h4></div>
</div>

</div>
<!------- bitacora de actualizaciones --->

<div class="row">
<div class="col-md-4"><h2>TIPO DE TRÁMITE:</h2></div>
<div class="col-md-8"><h2 class="text-muted"><?php echo $row1[14];?></h2></div>
</div>

<div class="row">

<div class="col-md-12">
<div class="container contenido">
<table class="table">
  <thead>
    <tr>
      <th scope="col"><h5>N°</h5></th>
      <th scope="col"><h5>FECHA</h5></th>
      <th scope="col"><h5>ESTADO TRÁMITE</h5></th>
      <th scope="col"><h5>RESUMEN</h5></th>
      <th scope="col"><h5>CODIGO ARCHIVO DIGITAL</h5></th>
      <th scope="col"><h5>DOCUMENTO ELABORADO</h5></th>
      <th scope="col"><h5>AJUSTAR ESTADO</h5></th>
    </tr>
  </thead>
  <tbody>
  <?php
$contador=1;
$sql =" SELECT bitacora_estado.idbitacora_estado, bitacora_estado.idcorres, bitacora_estado.correlativo, estado.estado, bitacora_estado.resumen, ";
$sql.=" bitacora_estado.codigo_doc, bitacora_estado.archivo_id, bitacora_estado.hash, bitacora_estado.fecha, bitacora_estado.idusuario FROM bitacora_estado, estado WHERE idcorres='$idcorres_ss' ";
$sql.=" AND bitacora_estado.idestado=estado.idestado ORDER BY bitacora_estado.idbitacora_estado ";
$result = mysqli_query($link,$sql);
if ($row = mysqli_fetch_array($result)){
mysqli_field_seek($result,0);
while ($field = mysqli_fetch_field($result)){
} do {
?>    
    <tr>
      <th scope="row"> <h5 class="text-muted"> <?php echo $contador;?> </h5></th>
      <td> <h5 class="text-muted"> 
      <?php 
            $fecha_elab3 = explode('-',$row[8]);
            $f_bitacora    = $fecha_elab3[2].'/'.$fecha_elab3[1].'/'.$fecha_elab3[0];
            echo $f_bitacora;
      ?>  
      </h5></td>
      <td> <h5 class="text-muted"> <?php echo $row[3];?> </h5></td>
      <td> <h5 class="text-muted"> <?php echo $row[4];?> </h5></td>
      <td> <h5 class="text-muted"> <?php echo $row[5];?> </h5></td>
      <td> 
<!--- aqui obtiene el archivo en pdf-->

<a href="obtiene_archivo_cge.php?id_archivo=<?php echo $row[6];?>&hash=<?php echo $row[7];?>" target="_blank" class="btn-link" onClick="window.open(this.href, this.target, 'width=800,height=1000,scrollbars=YES, left=300'); return false;">
<h5 class="text-success">
<?php
if ($row[6] != "" ) {
  echo "OBTENER DOCUMENTO";
} else {
}
?>
</h5></a>

<!--- aqui obtiene el archivo en pdf-->
      </td>
      <td>

      <?php
      if ($row[6] == '' && $row[9]==$idusuario_ss) {
      ?>
            <form name="AJUSTA" action="elimina_bitacora_estado.php" method="post">
            <input type="hidden" name="idbitacora_estado" value="<?php echo $row[0];?>">
            <input type="hidden" name="idcorres" value="<?php echo $row[1];?>">
            <button tipe="submit" class="btn-link"><h5 class="text-danger">QUITAR</h5></button>
            </form>  
      <?php
      } else {
      }
      ?>
            <form name="AJUSTA" action="valida_bitacora_estado.php" method="post">
            <input type="hidden" name="idbitacora_estado" value="<?php echo $row[0];?>">
            <input type="hidden" name="idcorres" value="<?php echo $row[1];?>">
            <button tipe="submit" class="btn-link"><h5 class="text-primary">
            <?php  
            if ($row[9] == $idusuario_ss) {
              echo "AJUSTES";
            } else {            
            }
            ?>  
            </h5></button>
            </form>                 
          </td>
          </tr>

          <?php 
        $contador=$contador+1;  
        }
        while ($row = mysqli_fetch_array($result));

      } else {
        ?>


        <?php 
      }
        ?>   
  </tbody>
</table>
    </div>
  </div>
</div>

<!------ bitacora de actualizaciones ----->
<div class="row">
<h2>ACTUALIZACIÓN DE ESTADO DEL TRÁMITE</h2>
</div>

<div class="box-area">
<div class="row">

<form method="post" action="subida_doc_respaldo.php" enctype="multipart/form-data">

    <div class="col-md-4"><h4>ESTADO DEL TRÁMITE:</h4></div>
      <div class="col-md-8">
            <select name="idestado"  id="idestado" class="form-control">
            <option value="">-SELECCIONE-</option>
          <?php
          $sql2 = "select idestado, estado from estado where tipo_estado='DINAMICO'";
          $result2 = mysqli_query($link,$sql2);
          if ($row2 = mysqli_fetch_array($result2)){
          mysqli_field_seek($result2,0);
          while ($field2 = mysqli_fetch_field($result2)){
          } do {
          echo "<option value=". $row2[0]. ">". $row2[1]. "</option>";
          } while ($row2 = mysqli_fetch_array($result2));
          } else {
          echo "No se encontraron resultados!";
          }
          ?>
          </select>
      </div>      
    </div>
<div class="row">
<div class="col-md-4"><h4>RESUMEN DE ESTADO:</h4></div>
<div class="col-md-8"><textarea class="form-control" rows="3" name="resumen"></textarea></div>
</div>
<div class="row">
<div class="col-md-4"><h4>SUBIR DOCUMENTO (OPCIONAL):</h4></div>
<div class="col-md-8"><input type="file" name="file" class="form-control"></div>
</div>
<div class="row">
<div class="col-md-12">
<input type="hidden" id="idcorres"  name="idcorres" value="<?php echo $row1[0]?>"> 
<input type="hidden" id="referencia"  name="referencia" value="<?php echo $row1[4]?>"> 
<input type="hidden" id="codigo"  name="codigo" value="<?php echo $row1[9];?>"> 
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#actualiza">
  ACTUALIZAR ESTADO DEL TRAMITE
</button>
</div>
</div>
</div>
<!----- modal de actualizacion de estado ---->
<div class="modal fade" id="actualiza" tabindex="-1" role="dialog" aria-labelledby="actualiza" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="actualizaLabel">ACTUALIZAR ESTADO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          ¿Esta seguro de ACTUALIZAR EL ESTADO DEL TRAMITE?
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="submit" class="btn btn-primary pull-center">CONFIRMAR ACTUALIZACIÓN</button>
      </div>
    </div>
  </div>
</div>
<!----- modal de actualizacion de estado ---->
</form>

<!------ se guarda la opcion de recepcion de documento secundario
<div class="row">
<h2>RECEPCIÓN DE DOCUMENTO ADJUNTO (INFORME U OTRO)</h2>
 </div>
<div class="box-area">

<form name="RECIBEDOC" action="guarda_recepcion_doc.php" method="post">
<div class="row">
  <div class="col-md-2"><h4>CON DOCUMENTO:</h4></div>
  <div class="col-md-2"><h4 class="text-muted"><?php echo $row1[11];?></h4></div>
  <div class="col-md-2"><h4>FECHA Y HORA DE RECEPCIÓN:</h4></div>
  <div class="col-md-2"><h4 class="text-muted">
  <?php
	 if($row1[12]=="1111-11-11")
	 {
		 echo " ";
		}
	 else{
		 echo "RECIBIDO EL ".$row1[12]."</br>";
		 echo "A HRS. ".$row1[13];
		}  
	  ?>	  
  </h4></div>
  <div class="col-md-4">  
  <input type="hidden" id="idcorres"  name="idcorres" value="<?php echo $row1[0]?>"> 
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#recibe">
  RECIBIR DOCUMENTO
</button>


<div class="modal fade" id="recibe" tabindex="-1" role="dialog" aria-labelledby="recibe" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recibeLabel">RECEPCIÓN DE DOCUMENTOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Esta seguro de RECIBIR EL DOCUMENTO?
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="submit" class="btn btn-primary pull-center">RECIBIR DOCUMENTO</button>
      </div>
    </div>
  </div>
</div>

</form>
 </div>
</div>
</div>
---->


<!----- DERIVACION DE LA HOJA DE RUTA ---->
<form name="DERIVACION" action="guarda_derivacion_corres_hr.php" method="post">
<div class="row">
<h2>DERIVACIÓN DE HOJA DE RUTA <?php echo $row1[9];?></h2>
 </div>

 <div class="box-area">
 <div class="row">
  <div class="col-md-3"><h4>DESTINATARIO</h4></div>
  <div class="col-md-9">
  <select name="idusuariod"  id="idusuariod" class="form-control">
   <option value="">-SELECCIONE-</option>
<?php

$sql1 = " SELECT usuarios.idusuario, nombres.nombres, nombres.paterno, nombres.materno, nombres.titulo ,cargo.cargo FROM usuarios, nombres, cargo WHERE usuarios.idnombre=nombres.idnombre";
$sql1.= " AND usuarios.idcargo=cargo.idcargo AND usuarios.condicion='ACTIVO'  ";
$result1 = mysqli_query($link,$sql1);
if ($row1 = mysqli_fetch_array($result1)){
mysqli_field_seek($result1,0);
while ($field1 = mysqli_fetch_field($result1)){
} do {
echo "<option value=". $row1[0]. ">". $row1[4]." ". $row1[1]." ". $row1[2]." ". $row1[3]." - ". $row1[5]."</option>";
} while ($row1 = mysqli_fetch_array($result1));
} else {
echo "No se encontraron resultados!";
}
?>
</select>
</div>
</div>

<div class="row">
  <div class="col-md-3"><h4>INSTRUCCION:</h4></div>
  <div class="col-md-9">
  <select name="idinstruccion"  id="idinstruccion" class="form-control">
   <option value="">-SELECCIONE-</option>
<?php

$sql1 = "select idinstruccion, instruccion from instruccion";
$result1 = mysqli_query($link,$sql1);
if ($row1 = mysqli_fetch_array($result1)){
mysqli_field_seek($result1,0);
while ($field1 = mysqli_fetch_field($result1)){
} do {
echo "<option value=". $row1[0]. ">". $row1[0]. ".- ". $row1[1]. "</option>";
} while ($row1 = mysqli_fetch_array($result1));
} else {
echo "No se encontraron resultados!";
}
?>
</select>
  </div>
  </div>

  <div class="row"> 
  <div class="col-md-3"><h4>COMENTARIO:</h4></div>
  <div class="col-md-9"><textarea class="form-control" rows="3" name="comentario"></textarea></div>
  </div>

 </div>

 </div>

 <div class="row">
 <div class="col-md-4"></div>
  <div class="col-md-8">    
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  DERIVAR LA HOJA DE RUTA
</button>
  </div>

 </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DERIVAR HOJA DE RUTA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Esta seguro de derivar esta HOJA DE RUTA?
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="submit" class="btn btn-primary pull-center">CONFIRMAR DERIVACION</button>
           </div>
    </div>
  </div>
</div>
</form>


<form name="CONCLUYE" action="concluye_hoja_ruta.php" method="post">
 <div class="row"> 
 <div class="col-md-4"></div>
 <div class="col-md-8"><h4></h4>
  <button type="submmit" class="btn-link">
  <h3 class="text-warning">CONCLUIR LA HOJA DE RUTA</h3>
</button>
  </div>
  </div>
  </div>
  </form>

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
	
</body>
</html>