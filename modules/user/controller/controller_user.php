<?php
    include_once('modules/user/model/DAOmysql.php');
    class controller_user {
        
        public function handleRequest() {
	        $op=$_GET['op'];
			switch($op){
            case "sign_up":
                $this->saveUser();
                break;
            case "list":
                $this->listUsers();
                break;
            case "read":
                $this->readUser();
                break;
            case "update":
                $this->updateUser();
                break;
            case "delete":
                $this->deleteUser();
                break;
            default:
                include('view/inc/404.php');
                break;
            }
        }
        public function saveUser() {
            $error = false;
            include('modules/user/model/validate.inc.php');
            if (isset($_POST['Enviar'])){
                if(val_dni($_POST['dni'])&&val_nombre($_POST['nombre'])&&val_apellidos($_POST['apellidos'])&&val_birthday($_POST['datebirthday'])&&val_phone($_POST['tlf'])&&val_email($_POST['email'])&&val_user($_POST['usuario'])&&val_pass($_POST['pass'])){
                    try{
                        $_SESSION['user']=$_POST;
                        $daosql = new DAOmysql();
    			        $rdo = $daosql->new_user($_SESSION['user']);
                    }catch(Exception $e){
                        echo '<script language="javascript">alert("503 internal server error: Error al crear el usuario");</script>'; 
                        $callback = 'index.php?page=controller_user&op=list';
                        die('<script>top.location.href="'.$callback .'";</script>');
                    }
                    if(!$rdo){
                        echo '<script language="javascript">alert("503 internal server error: Error al crear el usuario");</script>'; 
                    }
                    $callback = 'index.php?page=controller_user&op=list';
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
            
            include('modules/user/view/form.php');
        }
        
        public function listUsers() {
            try{
                $dao = new DAOmysql();
                $user=$dao->list_users();
                include('modules/user/view/list_users.php');
            }catch(Exception $e){
                echo '<script language="javascript">alert("503 internal server error: Error al obtener la lista de usuarios");</script>'; 
                $callback = 'index.php?';
                die('<script>top.location.href="'.$callback .'";</script>');
            }
            if(!$user){
                echo '<script language="javascript">alert("503 internal server error: Error al obtener la lista de usuarios");</script>'; 
                $callback = 'index.php?';
                die('<script>top.location.href="'.$callback .'";</script>');
            }
        }
        
        public function readUser(){
            try{
                $dao = new DAOmysql();
                $user=$dao->read_users($_GET['user']);
            }catch(Exception $e){
                echo '<script language="javascript">alert("503 internal server error: Error al leer los datos del usuario");</script>'; 
                $callback = 'index.php?page=controller_user&op=list';
                die('<script>top.location.href="'.$callback .'";</script>');
            }
            if(!$user){
                echo '<script language="javascript">alert("Error al leer los datos del usuario");</script>'; 
                $callback = 'index.php?page=controller_user&op=list';
                die('<script>top.location.href="'.$callback .'";</script>');
            }
            include('modules/user/view/read_users.php');
        }
        
        public function updateUser(){
            include('modules/user/model/validate.inc.php');
            if (isset($_POST['Enviar_update'])){
                if(val_dni($_POST['dni'])&&val_nombre($_POST['nombre'])&&val_apellidos($_POST['apellidos'])&&val_birthday($_POST['datebirthday'])&&val_phone($_POST['tlf'])&&val_email($_POST['email'])&&val_user($_POST['usuario'])&&val_pass($_POST['pass'])){
                    try{
                        $_SESSION['user']=$_POST;
                        $daosql = new DAOmysql();
    			        $rdo = $daosql->update_user($_SESSION['user']);
                    }catch(Exception $e){
                        echo '<script language="javascript">alert("503 internal server error: Error al modificar el usuario");</script>'; 
                        $callback = 'index.php?page=controller_user&op=list';
                        die('<script>top.location.href="'.$callback .'";</script>');
                    }
                    if(!$rdo){
                        echo '<script language="javascript">alert("503 internal server error: Error al modificar el usuario");</script>';
                    }
                    $callback = 'index.php?page=controller_user&op=list';
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
            try{
                $dao = new DAOmysql();
                $user=$dao->read_users($_GET['user']);
                include('modules/user/view/update_users.php');
            }catch(Exception $e){
                echo '<script language="javascript">alert("503 internal server error: Error al leer el usuario");</script>'; 
                $callback = 'index.php?page=controller_user&op=list';
                die('<script>top.location.href="'.$callback .'";</script>');
            }
            if(!$user){
                echo '<script language="javascript">alert("503 internal server error: Error al leer el usuario");</script>'; 
                $callback = 'index.php?page=controller_user&op=list';
                die('<script>top.location.href="'.$callback .'";</script>');
            }
        }
        
        public function deleteUser(){
            if (isset($_POST['confirmar_delete'])){
                try{
                    $dao = new DAOmysql();
                    $error=$dao->delete_user($_GET['user']);
                    $callback = 'index.php?page=controller_user&op=list';
                    die('<script>top.location.href="'.$callback .'";</script>');
                }catch(Exception $e){
                    echo '<script language="javascript">alert("503 internal server error: Error al borrar el usuario");</script>'; 
                    $callback = 'index.php?page=controller_user&op=list';
                    die('<script>top.location.href="'.$callback .'";</script>');
                }
                if(!$error){
                    echo '<script language="javascript">alert("Error al borrar el usuario");</script>'; 
                    $callback = 'index.php?page=controller_user&op=list';
                    die('<script>top.location.href="'.$callback .'";</script>');
                }
            }
            include('modules/user/view/delete_user.php');
        }
        
    }