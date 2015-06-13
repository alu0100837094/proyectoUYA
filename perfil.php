<?php
include('session.php');
echo"Entre a perfil.php";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Buscando piso, tu mejor opción</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.3.4/js/bootstrap.min.js"></script>
	<link media="screen" href="pag.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  		<div class="cabecera">
  			<div class="row" role="rowgroup">
  				<div class="col-sm-12">
  					<img src="http://usabilidadalu4348.host22.com/bootstrap/cabecera.jpg" class="img-rounded img-responsive" alt="imagen_azul" width="1200" height="50"><br><br><br>
  				</div>
  			</div>
  			<div class="row" role="rowgroup">
  				<div class="col-sm-9">
  					<ul class="nav nav-tabs nav-collapse">
  						<li role="presentation" ><a href="#">Inicio</a></li>
  						<li role="presentation" class="active"><a href="#">Perfil</a></li>
  						<li role="presentation"><a href="#">Messages</a></li>
  						<li role="presentation"><a href="#">Publicar</a></li>
  						<li role="presentation"><a href="#">Favoritos</a></li>
  					</ul>
  				</div><!-- fin menu navegacion -->
          <div class="col-sm-3">

              <div id="perfil">
              <b id="welcome">Bienvenido : <i><?php echo $login_session; ?></i></b>
              <b id="logout"><a href="logout.php">Cerrar sesión</a></b>
              </div>

  				</div><!-- fin menu navegacion -->
  			</div><!-- fin row -->
  		</div><!--fin cabecera-->
  		<div class="cuerpo">
  			<div class="row" role="rowgroup">
  				<div class="col-sm-6">
  					<h1>Perfil</h1>

  				</div><!-- fin col-->
  			</div><!--fin row-->
  		</div><!-- fin cuerpo-->
  		<br><br><br><br><br><br><br><br><br><br><br><br>
  		<div class="pie">
        <img  aria-describedby="img_cabecera" src="http://usabilidadalu4348.host22.com/bootstrap/cabecera.jpg" class="img-responsive img-rounded" alt="imagen_azul" width="1200" height="10"><br><br><br>

  			<div class="row" role="row">
  				<div class="col-sm-4" >
  					<button type="button" class="btn btn-link">Ayuda</button>
  				</div>
  				<div class="col-sm-4" >
  					<button type="button" class="btn btn-link">Acerca de</button>
  				</div>
  				<div class="col-sm-4" >
  					<button type="button" class="btn btn-link">Politicas de privacidad</button>
  				</div>
  			</div>
  		</div><!-- pie-->
   </div>
    </body>
   </html>
