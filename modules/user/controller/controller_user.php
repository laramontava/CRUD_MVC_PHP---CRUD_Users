<?php
    include_once('modules/user/model/DAOmysql.php');
    class controller_user {
        
        public function __construct() {
            
        }
        
        public function handleRequest() {
	        $op=$_GET['op'];
			switch($op){
            case "sign_up":
                $this->saveContact();
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
                $dao = new DAOmysql();
                $dao->delete_user($_GET['user']);
                $this->listUsers();
                break;
            }
        }
        public function saveContact() {
            $error = false;
            include('modules/user/model/validate.inc.php');
            if (isset($_POST['Enviar'])){
                if(val_dni($_POST['dni'])&&val_nombre($_POST['nombre'])&&val_apellidos($_POST['apellidos'])&&val_birthday($_POST['datebirthday'])&&val_phone($_POST['tlf'])&&val_email($_POST['email'])&&val_user($_POST['usuario'])&&val_pass($_POST['pass'])){
                    $_SESSION['user']=$_POST;
                    $daosql = new DAOmysql();
			        $rdo = $daosql->new_user($_SESSION['user']);
                    //$callback = 'modules/user/view/results.php';
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
            include('modules/user/view/list_users.php');
        }
        
        public function readUser(){
            $dao = new DAOmysql();
            $user=$dao->read_users($_GET['user']);
            include('modules/user/view/read_users.php');
        }
        
        public function updateUser(){
            $dao = new DAOmysql();
            $user=$dao->read_users($_GET['user']);
            include('modules/user/view/update_users.php');
        }
        
    }