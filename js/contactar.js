$(document).ready(function()
{
    $('button').click(function()
    {
        var idParaConsulta=$(this).attr('data-id');

        // alert(idParaConsulta);
        var formMensaje="<h2>Mensaje a contacto</h2><div class='form-group'><br><br><div class='col-sm-12'><form id='form_publicar' class='form-horizontal' enctype='multipart/form-data'><div id='Email_' class='form-group'><div class='col-sm-6'><label id='label_correo' for='inputEmail2' class='col-sm-0 control-label'>Correo electrónico</label><input id='emailM' name='email' type='email' aria-labelledby='Email_ label_correo' aria-required='true' aria-describedby='Email' class='form-control' id='inputEmail2' placeholder='Escriba su correo electrónico' autofocus></div></div><div class='col-sm-6'><label id='mensajePublicacion' class='control-label' for='descripcion'>Mensaje</label><textarea id='descripcion' name='descripcion' class='form-control' placeholder='Escriba toda la información necesaria para que el usuario se pueda contactar con usted'></textarea><div><label id='label_id' class='control-label' for='id_publicacion'>Número de publicación</label><input id='id_publicacion' name='id_publi' class='form-control' type='text' placeholder='Número publicación' disabled></input></div><br><button id='enviarM' type='button' class='btn btn-primary btn-lg'>Publicar</button></div></div></form></div><div id='add_err'></div>";
        var elBoton="<script type='text/javascript' src='/alu4635/js/enviarMensaje.js' ></script>";
        $("#paraMensaje").html(formMensaje);
        $('#id_publicacion').val(idParaConsulta);
        $("#paraMensaje").append(elBoton);
        document.getElementById("emailM").focus();


    });//cerrar click boton
});//cerrar function
