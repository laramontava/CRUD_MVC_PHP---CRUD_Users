<?php
	include('modules/user/controller/controller_user.php');
    $controlador = new controller_user();
	if (!isset($_GET['page'])) {
		include("modules/homepage/view/homepage.php");
	} else {
		$page=$_GET['page'];
			switch($page){
			case "controller_user":
				$controlador->handleRequest();
				break;
			case "about_us":
				include("modules/about_us/view/about_us.php");
				break;
			case "services":
				include("modules/services/view/services.php");
				break;
			case "contact":
				include("modules/contact/view/contact.php");
				break;
            }
	}
?>