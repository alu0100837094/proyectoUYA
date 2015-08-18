<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: /html/perfil.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Buscando piso, tu mejor opción</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/alu4635/bootstrap-3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/alu4635/bootstrap-3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/alu4635/js/script.js" ></script>

  </head>
  <body>
    <div class="container">
      <div class="Cabecera">
          <div class="row" role="rowgroup">
				<div class="col-sm-12">
          <img  aria-describedby="img_cabecera" src="http://usabilidadalu4348.host22.com/bootstrap/cabecera.jpg" class="img-rounded img-responsive" alt="imagen_azul_top" width="1200" height="50"><br><br><br>
						<div class="hide" id="img_cabecera">
							Imagen de la cabecera
						</div>
            <div id="text_entrar"><h1> CompartiendoPiso.com </h1></div>
            <h2>Iniciar Sesión</h2>
					<form id="logForm" class="form-inline" role="form" action="#" method="post"><br>
						<div id="Correo" role="alertdialog" aria-describedby="Alert_email" class="form-group">
							<div class="hide" id="Alert_email">
								Email incorrecto
							</div>
							<label id="label_email" for="email" >Correo Electrónico:</label>
							<input type="email" class="form-control" id="email"  name="email" aria-labelledby="Correo label_email" aria-required="true" aria-autocomplete="true" aria-describedby="EmailUser" class="form-control" required>
								<div class="hide" id="EmailUser">
									Correo electronico del usuario
								</div>
						</div>
						<div id="Contraseña_" role="alertdialog" aria-describedby="Alert_email" class="form-group">
							<div class="hide" id="Alert_email">
								Contraseña incorrecta
							</div>
							<label id="label_contraseña" for="pwd">Contraseña:</label>
							<input type="password" class="form-control" id="password"  name="password" aria-labelledby="Contraseña_ label_contraseña" aria-required="true" aria-describedby="Contraseña" class="form-control" required>
								<div class="hide" id="Contraseña">
									Contraseña del usuario
								</div>
						</div>

            <!--<input  name="submit" type="submit" value=" Login " class="btn btn-default">-->
            <button type="submit" id="login" name="submit"  value="Entrar" role="button" aria-describedby ="iniciarSesion" class="btn btn-default">Entrar</button><br><br>
            <div class="err" id="add_err"></div>
            <span><?php echo $error; ?></span>
              <div class="hide" id="iniciarSesion" >

								Boton para entrar cuando se loguea un usuario
							</div>
					</form>
				</div>
			</div>
      <img  aria-describedby="img_medio" src="http://usabilidadalu4348.host22.com/bootstrap/cabecera.jpg" class="img-responsive img-rounded" alt="imagen_azul_medio" width="1200" height="30"><br><br><br>
		<div class="hide" id="img_medio">
			Imagen que separa la zona para loguearse de la de registrarse
		</div>
		</div>
      <div class="Cuerpo">
           <div class="row" role="rowgroup">
			   <div class="col-sm-6">
           <img aria-describedby="img_sofa" src= "http://usabilidadalu4348.host22.com/salazul.jpg" class="img-rounded img-responsive" alt="imagen_sofa_azul" width="500" height="500">
           					<div class="hide" id="img_sofa">
           						Imagen de un sofa para decorar la página
           					</div>
        </div>
               <div class="col-sm-6">
                   <form id="regform" class="form-horizontal" role="form" action="#" method="post">
                     <div id="text_registro"><h2> Registrarse </h2></div><br>
			              	<div id="Nombre_" class="form-group">
				                	<label id="label_nombre" for="inputNombre" class="col-sm-0 control-label"></label>
					               <div class="col-sm-10">
					                	<input id="nombre" type="text" role="textbox" aria-labelledby="Nombre_ label_nombre" aria-required="true" aria-describedby="Nombre" class="form-control" id="inputNombre" placeholder="Nombre">
											<div class="hide" id="Nombre">
												Nombre de usuario para registrarse
											</div>

					               </div>
				              </div>
				              <div id="Apellidos_" class="form-group">
				                	<label id="label_apellidos" for="inputApellidos" class="col-sm-0 control-label"></label>
				  	             <div class="col-sm-10">
						               <input id="apellidos" type="text" aria-labelledby="Apellidos_ label_apellidos" role="textbox" aria-required="true"aria-describedby="Apellidos" class="form-control" id="inputApellidos" placeholder="Apellidos">
											<div class="hide" id="Apellidos">
												Apellidos del usuario para registrarse
											</div>
					                </div>
			              </div>
			            	<div id="Email_" class="form-group">
					              <label id="label_correo" for="inputEmail2" class="col-sm-0 control-label"></label>
				              	<div class="col-sm-10">
					                  	<input id="emailR" type="email" aria-labelledby="Email_ label_correo" aria-required="true" aria-describedby="Email" class="form-control" id="inputEmail2" placeholder="Correo Electrónico">
											<div class="hide" id="Email">
												Email requerido para registrarse
											</div>

					              </div>
				            </div>
				            <div id="passwd" class="form-group">
					              <label id="label_pwd" for="inputPassword3" class="col-sm-0 control-label"></label>
					            	<div class="col-sm-10">
						              	<input id="passwordR" type="password" aria-labelledby="passwd label_pwd" aria-required="true" aria-describedby="ContraseñaR" class="form-control" id="inputPassword3" placeholder="Contraseña">
											<div class="hide" id="Contraseña">
												Contraseña para registrarse
											</div>
					            	</div>
			          	</div>
                  <div id="passwd2" class="form-group">
                      <label id="label_pwd2" for="inputPassword4" class="col-sm-0 control-label"></label>
                      <div class="col-sm-10">
                          <input id="passwordR2" type="password" aria-labelledby="passwd2 label_pwd2" aria-required="true" aria-describedby="ComprobarContraseña" class="form-control" id="inputPassword4" placeholder="Comprobar Contraseña">
                    <div class="hide" id="ComprobarContraseña">
                      Comprobar Contraseña para registrarse
                    </div>
                      </div>
                </div>
			          <div class="form-group">
				          	<div class="col-sm-offset-0 col-sm-10">
						            <!--<button id="registrar" role="button" aria-describedby ="Registrarb" type="submit" class="btn btn-default">Registrarse</button>-->
                        <button type="submit" id="registrar" role="button" aria-describedby ="registrarse" class="btn btn-default">Registrarse</button><br><br>

                        <div class="errR" id="add_errR"></div>
                    <div class="hide" id="registrarse" >
											Boton para registrar un usuario
										</div>
					         </div>
				        </div>
			    </form>
      </div>

	 </div> <!-- fin col -->
  </div><!-- fin row -->



  <div class="pie">
    <br><br>
    <img  aria-describedby="img_pie" src="http://usabilidadalu4348.host22.com/bootstrap/cabecera.jpg" class="img-responsive img-rounded" alt="imagen_azul_pie" width="1200" height="10"><br><br><br>
	  <div class="hide" id="img_pie">
		Imagen para final de la pagina
	  </div>
    <div class="row" role="row">
      <div class="col-sm-4" >
        <!-- <button type="button" class="btn btn-link">Ayuda</button> -->

        <a role ="link" aria-describedby="AYuda" href="/alu4635/html/ayuda.html">Ayuda</a>
		  <div class ="hide" id = "AYuda">
			 Enlace para ver preguntas frecuentes que puedan ayudar
		  </div>

      </div>
      <div class="col-sm-4" >
        <!-- <button type="button" class="btn btn-link">Acerca de</button> -->
          <a role="link" aria-describedby="COntacto" href="/alu4635/html/contacto.html">Contacto</a>
		  <div class ="hide" id = "COntacto">
					Enlace para contactar con el administrador de la página.
		        </div>
      </div>
      <div class="col-sm-4" >
        <!-- <button type="button" class="btn btn-link">Politicas de privacidad</button> -->
          <a role="link" aria-describedby="PPrivacidad" href="/alu4635/html/avisoLegal.html">Politicas de Privacidad</a>
			<div class ="hide" id = "PPrivacidad">
					Enlace para consultar las Politicas de Privacidad de la empresa.
		     </div>
      </div>
    </div>
  </div><!-- pie-->

</div><!-- fin container -->




  </body>
</html>
