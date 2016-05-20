<?php
    //session_start();
    $error = false;
    include('model/validate.inc.php');
    if (isset($_POST['Enviar'])){
        if(val_dni($_POST['dni'])&&val_nombre($_POST['nombre'])&&val_apellidos($_POST['apellidos'])&&val_birthday($_POST['datebirthday'])&&val_phone($_POST['tlf'])&&val_email($_POST['email'])&&val_user($_POST['usuario'])&&val_pass($_POST['pass'])){
            $_SESSION['user']=$_POST;
            
            $callback = 'modules/user/view/results.php';
            die('<script>top.location.href="'.$callback .'";</script>');
        } else {
            $error_dni = "DNI no v&aacute;lido";
            $error_nombre = "Nombre no v&aacute;lido";
            $error_apellidos = "Apellidos no v&aacute;lidos";
            $error_nacimiento = "Fecha de nacimiento no v&aacute;lida";
            $error_telefono = "Tel&eacute;fono no v&aacute;lido";
            $error_email = "Email no v&aacute;lido";
            $error_user = "Usuario no v&aacute;lido";
            $error_pass = "Contrase&ntilde;a no v&aacute;lida";
        }
    }
    
    include('view/form.php');