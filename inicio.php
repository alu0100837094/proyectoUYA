<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: perfil.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Buscando piso, tu mejor opción</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="bootstrap-3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js" ></script>

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
            <div id="text_entrar"><h1> Acceder </h1></div>
					<form class="form-inline" role="form" action="./" method="post"><br>
						<div id="Correo" role="alertdialog" aria-describedby="Alert_email" class="form-group">
							<div class="hide" id="Alert_email">
								Email incorrecto
							</div>
							<label id="label_email" for="email" >Email address:</label>
							<input id="email" type="email" name="email" aria-labelledby="Correo label_email" aria-required="true" aria-autocomplete="true" aria-describedby="EmailUser" class="form-control" id="email">
								<div class="hide" id="EmailUser">
									Correo electronico del usuario
								</div>
						</div>
						<div id="Contraseña_" role="alertdialog" aria-describedby="Alert_email" class="form-group">
							<div class="hide" id="Alert_email">
								Contraseña incorrecta
							</div>
							<label id="label_contraseña" for="pwd">Password:</label>
							<input id="password" type="password" name="password" aria-labelledby="Contraseña_ label_contraseña" aria-required="true" aria-describedby="Contraseña" class="form-control" id="password">
								<div class="hide" id="Contraseña">
									Contraseña del usuario
								</div>
						</div>
            <!--<input  name="submit" type="submit" value=" Login "> -->
            <button id="login" type="submit" name="submit" role="button" aria-describedby ="iniciarSesion" class="btn btn-default">Entrar</button><br><br>
            <div class="err" id="add_err"></div>
            <span><?php echo $error; ?></span>
              <div class="hide" id="iniciarSesion" >
								Boton para entrar cuando se loguea un usuario
							</div>
					</form>
				</div>
			</div>
      <img  aria-describedby="img_cabecera" src="http://usabilidadalu4348.host22.com/bootstrap/cabecera.jpg" class="img-rounded" alt="imagen_azul" width="1200" height="10"><br><br><br>

		</div>
      <div class="Cuerpo">
           <div class="row" role="rowgroup">
			   <div class="col-sm-6">
					<img src= "http://www.myqualityhome.es/wp-content/uploads/2014/12/salazul.jpg" class="img-rounded" alt="imagen_azul" width="500" height="500">
				</div>
               <div class="col-sm-6">
                   <form class="form-horizontal" role="form">
                     <div id="text_registro"><h2> Registrarse </h2></div><br>
			              	<div id="Nombre_" class="form-group">
				                	<label id="label_nombre" for="inputNombre" class="col-sm-0 control-label"></label>
					               <div class="col-sm-10">
					                	<input type="text" role="textbox" aria-labelledby="Nombre_ label_nombre" aria-required="true" aria-describedby="Nombre" class="form-control" id="inputNombre" placeholder="Nombre">
											<div class="hide" id="Nombre">
												Nombre de usuario para registrarse
											</div>

					               </div>
				              </div>
				              <div id="Apellidos_" class="form-group">
				                	<label id="label_apellidos" for="inputApellidos" class="col-sm-0 control-label"></label>
				  	             <div class="col-sm-10">
						               <input type="text" aria-labelledby="Apellidos_ label_apellidos" role="textbox" aria-required="true"aria-describedby="Apellidos" class="form-control" id="inputApellidos" placeholder="Apellidos">
											<div class="hide" id="Apellidos">
												Apellidos del usuario para registrarse
											</div>
					                </div>
			              </div>
			            	<div id="Email_" class="form-group">
					              <label id="label_correo" for="inputEmail2" class="col-sm-0 control-label"></label>
				              	<div class="col-sm-10">
					                  	<input type="email" aria-labelledby="Email_ label_correo" aria-required="true" aria-describedby="Email" class="form-control" id="inputEmail2" placeholder="Email">
											<div class="hide" id="Email">
												Email requerido para registrarse
											</div>

					              </div>
				            </div>
				            <div id="passwd" class="form-group">
					              <label id="label_pwd" for="inputPassword3" class="col-sm-0 control-label"></label>
					            	<div class="col-sm-10">
						              	<input type="password" aria-labelledby="passwd label_pwd" aria-required="true" aria-describedby="Contraseña" class="form-control" id="inputPassword3" placeholder="Password">
											<div class="hide" id="Contraseña">
												Contraseña para registrarse
											</div>
					            	</div>
			          	</div>
			          	<div class="form-group">
				            	<div class="col-sm-offset-0 col-sm-10">
					              	<div class="checkbox">
							              <label>
								            	<input role="checkbox" aria-checked="Recordar" type="checkbox"> Remember me
													<div class="hide" id="Recordar">
														Recordarme
													</div>
							              </label>
						              </div>
					            </div>
				        </div>
				        <div class="form-group">
				          	<div class="col-sm-offset-0 col-sm-10">
						            <button role="button" aria-describedby ="Registrar" type="submit" class="btn btn-default">Sign in</button>
										<div class="hide" id="Registrar" >
											Boton para registrar un usuario
										</div>
					         </div>
				        </div>
			    </form>
      </div>

	 </div> <!-- fin col -->
  </div><!-- fin row -->

      </div><!-- fin cuerpo -->
      <div class="pie">

      </div>
    </div><!-- fin container-->


  </body>
</html>
