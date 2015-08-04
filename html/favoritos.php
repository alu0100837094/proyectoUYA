<?php
include('../php/session.php');
?>
<!DOCTYPE html>


<html lang="es">
  <head>
    <title>Favoritos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/alu4635/bootstrap-3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/alu4635/bootstrap-3.3.4/js/bootstrap.min.js"></script>
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
                            <li><a href="/alu4635/html/busqu.php">Buscar</a></li>
                            <li><a href="/alu4635/html/perfil.php">Perfil</a></li>
                            <li><a href="/alu4635/html/messages.php">Mensajes</a></li>
                            <li><a href="/alu4635/html/publicar.php">Publicar</a></li>
                            <li class="active"><a href="/alu4635/html/favoritos.php">Favoritos</a></li>
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
		<div class="Cuerpo">
		</div><!--fin cuerpo-->
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
		</div><!-- fin pie-->
	</div><!-- fin container-->
  </body>
</html>
