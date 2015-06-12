<?php
include('session.php');
echo"Entre a perfil.php";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
		<title>Publicar</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap-3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="bootstrap-3.3.4/js/bootstrap.min.js"></script>
		<link media="screen" href="pag.css" type="text/css" rel="stylesheet">
  </head>
  <body>
	<div class="container">
		<div class="Cabecera">
			<div class="row" role="rowgroup">
				<div class="col-sm-12">
					<img src="http://usabilidadalu4348.host22.com/bootstrap/cabecera.jpg" class="img-rounded" alt="imagen_azul" width="1200" height="50"><br><br><br>
				</div>
			</div>
			<div class="row" role="rowgroup">
				<div class="col-sm-12">
					<ul class="nav nav-tabs nav-collapse">
						<li role="presentation" ><a href="#">Inicio</a></li>
						<li role="presentation"><a href="#">Perfil</a></li>
						<li role="presentation"><a href="#">Messages</a></li>
						<li role="presentation" class="active"><a href=#">Publicar</a></li>
						<li role="presentation"><a href="#">Favoritos</a></li>
					</ul>
				</div><!-- fin menu navegacion -->
			</div><!-- fin row -->
		</div><!--fin cabecera-->
		<div class="cuerpo">
			<div class="row" role="rowgroup">
				<div class="col-sm-12">
					<form class="form-horizontal">
						<div class="form-group">
							<br><br>
							<label for="ejemplo_archivo_1">Adjuntar un archivo</label><br><br>
							<input type="file" id="ejemplo_archivo_1"><br>
							<textarea class="form-control" placeholder="Añada una descripción" rows="3"></textarea>
						</div><!--fin adjuntar archivo-->
						<div class="form-group">
							<label for="zona">Zona</label>
								<select class="form-control">
									<option value="santa-cruz-de-tenerife">Santa Cruz de Tenerife</option>
									<option value="la-laguna">La Laguna</option>
									<option value="la-cuesta">La Cuesta</option>
									<option value="las-chumberas">Las Chumberas</option>
									<option value="finca-espana">Finca España</option>
									<option value="genetp">Geneto</option>
									<option value="gracia">Gracia</option>
									<option value="guajara">Guajara</option>
									<option value="taco">Taco</option>
								</select>
						</div><!--fin zona-->
						<div class="form-group">
							<label for="dormi">Precio</label>
								<select class="form-control">
									<option>0€</option>
									<option>200€</option>
									<option>300€</option>
									<option>400€</option>
									<option>500€</option>
									<option>600€</option>
								</select>
						</div><!--fin precio-->
						<div class="form-group">
							<label for="dormi">Dormitorios</label>
								<select class="form-control">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
						 </div><!--fin dormitorios-->
						 <div class="form-group">
							<label for="banos">Baños</label>
								<select class="form-control">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
						</div><!--fin baños-->
					</form>
					<button type="button" class="btn btn-primary btn-lg">Publicar</button>
				</div><!--fin col-->
			</div><!-- fin row-->
		</div><!-- fin cuerpo-->
		<br><br><br><br><br><br>
		<div class="pie">
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
		</div><!--fin pie-->
	</div><!-- fin container-->
  </body>
  </html>
