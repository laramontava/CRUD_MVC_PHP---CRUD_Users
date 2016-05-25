<?php
	if (!isset($_GET['page'])) {
		include("view/homepage.php");
	} else {
		//include("modules/user/".$_GET['page'].".php");
		//$controlador->handleRequest();
		$page=$_GET['page'];
			switch($page){
            case "sign_up":
                $controlador->handleRequest();
                break;
            case "all_users":
            	$controlador->handleRequest();
                break;
            }
	}
?>