<?php
	if (!isset($_GET['page'])) {
		include("view/homepage.php");
	} else {
		include("modules/user/".$_GET['page'].".php");
	}
?>