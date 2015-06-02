<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Perfil</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.3.4/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="Cabecera">
        <div class="row" role="rowgroup">
          <div class="col-sm-12">
  					<img  aria-describedby="img_cabecera" src="http://usabilidadalu4348.host22.com/bootstrap/cabecera.jpg" class="img-rounded" alt="imagen_azul" width="1200" height="100"><br><br><br>
  						<div class="hide" id="img_cabecera">
  							Imagen de la cabecera
  						</div>
  				</div>

        </div>
      </div>  
    </div>







    <div id="perfil">
    <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
    <b id="logout"><a href="logout.php">Log Out</a></b>
    </div>
  </body>
</html>
