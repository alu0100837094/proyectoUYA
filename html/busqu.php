<?php
include('../php/session.php');
echo"Entre a perfil.php";
?>
<!DOCTYPE html>


<html lang="es">
  <head>
    <title>Busqueda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/alu4635/bootstrap-3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/alu4635/bootstrap-3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/alu4635/js/buscar_bdd.js" ></script>
	<link media="screen" href="pag.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="Cabecera">
		<div class="row" role="rowgroup">
				<div class="col-sm-12">
					<img src="http://usabilidadalu4348.host22.com/bootstrap/cabecera.jpg" class="img-rounded img-responsive" alt="imagen_azul" width="1200" height="50"><br><br><br>
				</div>
			</div>
          <div class="row" role="rowgroup">
			<div class="col-sm-12">
        <nav role="navigation" class="navbar navbar-default ">
          <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a href="/alu4635/html/home.php" class="navbar-brand">BuscandoPiso.com</a>
                  </div>
                  <!-- Collection of nav links and other content for toggling -->
                  <div id="navbarCollapse" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav">
                          <li><a href="/alu4635/html/home.php">Inicio</a></li>
                          <li class="active"><a href="/alu4635/html/busqu.php">Buscar</a></li>
                          <li><a href="/alu4635/html/perfil.php">Perfil</a></li>
                          <li><a href="/alu4635/html/messages.php">Mensajes</a></li>
                          <li><a href="/alu4635/html/publicar.php">Publicar</a></li>
                          <li><a href="/alu4635/html/favoritos.php">Favoritos</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                          <li><a id="welcome">Bienvenido : <i><?php echo $login_session; ?></i></a></li>
                          <li><a href="/alu4635/php/logout.php">Cerra sesión</a></li>
                      </ul>
                  </div>
          </div>
    </nav>
	      </div> <!-- fin col -->
	  </div><!-- fin row -->
	</div> <!-- fin cabecera -->
	<br><br><br>
      <div class="cuerpo">
			<div class="row" role="rowgroup">
				<div class="col-sm-12 col-centered">
					<form id="form_buscar"class="form-inline center-block">
						<div class="form-group">
							<label id="Zona"for="zona">Zona</label>
								<select name="zona_buscar" class="form-control">
									<option value=".*" role="option">Todos</option>
                  <option value=''>Seleccione la zona</option>
									<option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
									<option value="La Laguna">La Laguna</option>
									<option value="La Cuesta">La Cuesta</option>
									<option value="Las Chumberas">Las Chumberas</option>
									<option value="Finca España">Finca España</option>
									<option value="Geneto">Geneto</option>
									<option value="Gracia">Gracia</option>
									<option value="Guajara">Guajara</option>
									<option value="Taco">Taco</option>
								</select>
						   </div>
						   <div class="form-group">
								<label id="Precio" for="dormi">Precio</label>
									<select name="precio_buscar_d" class="form-control">
										<option value="" role="option">Desde €</option>
										<option>200</option>
										<option>300</option>
										<option>400</option>
										<option>500</option>
										<option>600</option>
									</select>
									<select name="precio_buscar_h" class="form-control">
										<option value="" role="option">Hasta €</option>
										<option>300</option>
										<option>400</option>
										<option>500</option>
										<option>600</option>
										<option>700</option>

									</select>
						   </div>
						   <div class="form-group">
								<label id ="Dormitorios" for="dormi">Dormitorios</label>
									<select name="dormitorios"  class="form-control">
										<option value=".*" role="option">Todos</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
						   </div>
						   <div class="form-group">
								<label id ="Banos" for="banos">Baños</label>
								<select name="banos"  class="form-control">
									<option value=".*" role="option">Todos</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
						   </div>
						  <button id ="Busqueda" type="button" class="btn btn-primary btn-lg">Buscar</button>
					</form>
				</div>

			</div>
      <div id="respuesta">

      <!-- Aquí van los resultados de la consulta  -->
      <table style="visibility:hidden;"class='table table-hover table-responsive table-striped' id="tablaRespuesta">
        <tr>
          <th class="hidden-xs" style="visibility:hidden;">id</th>
          <th>Foto</th>
          <th>Zona</th>
          <th>Habitaciones</th>
          <th>Ba&ntildeo</th>
          <th>Descripción</th>
          <th>Contactar</th>
        </tr>
      </table>
      <div id="nohayRes" style="visibility:hidden;">
      <h1 class='text-center text-success'>Pruebe con otras opciones</h1>
      <p class='text-center text-danger'>No se encontraron publicaciones con los valores seleccionados, pruebe con otras opciones</p>
    </div>


      </div>
      </div><!-- fin cuerpo -->
	  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="pie">
        <img  aria-describedby="img_cabecera" src="http://usabilidadalu4348.host22.com/bootstrap/cabecera.jpg" class="img-responsive img-rounded" alt="imagen_azul" width="1200" height="10"><br><br><br>

        <div class="row" role="row">
          <div class="col-sm-4" >
            <!-- <button type="button" class="btn btn-link">Ayuda</button> -->
            <a href="/alu4635/html/ayuda.html">Ayuda</a>
          </div>
          <div class="col-sm-4" >
            <!-- <button type="button" class="btn btn-link">Acerca de</button> -->
              <a href="/alu4635/html/contacto.html">Contacto</a>
          </div>
          <div class="col-sm-4" >
            <!-- <button type="button" class="btn btn-link">Politicas de privacidad</button> -->
              <a href="/alu4635/html/avisoLegal.html">Politicas de Privacidad</a>
          </div>
        </div>
	   </div><!--fin pie-->
    </div><!-- fin container-->
  </body>
</html>
