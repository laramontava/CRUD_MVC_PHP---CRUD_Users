<?php
	class connectmysql{
		public static function con(){
            $host = '127.0.0.1';
    		$user = "laramontava";
    		$pass = "";
    		$db = "usersapp";
    		$port = 3306;
    		$tabla="users";
    		
    		$conexion = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}