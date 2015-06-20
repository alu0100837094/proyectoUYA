<?php
include('session.php');
echo"Entre a perfil.php";
?>
<!DOCTYPE html>


<html lang="es">
  <head>
    <title>Busqueda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="buscar_bdd.js" ></script>
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
                      <a href="#" class="navbar-brand">BuscandoPiso.com</a>
                  </div>
                  <!-- Collection of nav links and other content for toggling -->
                  <div id="navbarCollapse" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav">
                          <li class="active"><a href="#">Buscar</a></li>
                          <li><a href="/alu4635/perfil.php">Perfil</a></li>
                          <li><a href="/alu4635/messages.php">Mensajes</a></li>
                          <li><a href="/alu4635/publicar.php">Publicar</a></li>
                          <li><a href="/alu4635/favoritos.php">Favoritos</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                          <li><a id="welcome">Bienvenido : <i><?php echo $login_session; ?></i></a></li>
                          <li><a href="/alu4635/logout.php">Cerra sesión</a></li>
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
				<div class="col-sm-12">
					<form id="form_buscar"class="form-inline">
						<div class="form-group">
							<label id="Zona"for="zona">Zona</label>
								<select name="zona_buscar" class="form-control">
									<option value="*" role="option">Todos</option>
									<option value="santa-cruz-de-tenerife">Santa Cruz de Tenerife</option>
									<option value="la-laguna">La Laguna</option>
									<option value="la-cuesta">La Cuesta</option>
									<option value="las-chumberas">Las Chumberas</option>
									<option value="finca-espana">Finca España</option>
									<option value="geneto">Geneto</option>
									<option value="gracia">Gracia</option>
									<option value="guajara">Guajara</option>
								</select>
						   </div>
						   <div class="form-group">
								<label id="Precio" for="dormi">Precio</label>
									<select name="precio_buscar_d" class="form-control">
										<optionvalue="*" role="option">Desde €</option>
										<option>200</option>
										<option>300</option>
										<option>400</option>
										<option>500</option>
										<option>600</option>
										<option value="*" role="option">Todos</option>
									</select>
									<select name="precio_buscar_h" class="form-control">
										<option value="*" role="option">Hasta €</option>
										<option>300</option>
										<option>400</option>
										<option>500</option>
										<option>600</option>
										<option>700</option>
										<option value="*" role="option">Todos</option>

									</select>
						   </div>
						   <div class="form-group">
								<label id ="Dormitorios" for="dormi">Dormitorios</label>
									<select name="dormitorios"  class="form-control">
										<option value="*" role="option">Todos</option>
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
									<option value="*" role="option">Todos</option>
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
      <div id="respuesta"></div>
      </div><!-- fin cuerpo -->
	  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="pie">
        <img  aria-describedby="img_cabecera" src="http://usabilidadalu4348.host22.com/bootstrap/cabecera.jpg" class="img-responsive img-rounded" alt="imagen_azul" width="1200" height="10"><br><br><br>

        <div class="row" role="row">
          <div class="col-sm-4" >
            <!-- <button type="button" class="btn btn-link">Ayuda</button> -->
            <a href="/alu4635/ayuda.html">Ayuda</a>
          </div>
          <div class="col-sm-4" >
            <!-- <button type="button" class="btn btn-link">Acerca de</button> -->
              <a href="/alu4635/contacto.html">Contacto</a>
          </div>
          <div class="col-sm-4" >
            <!-- <button type="button" class="btn btn-link">Politicas de privacidad</button> -->
              <a href="/alu4635/avisoLegal.html">Politicas de Privacidad</a>
          </div>
        </div>
	   </div><!--fin pie-->
    </div><!-- fin container-->
  </body>
</html>
