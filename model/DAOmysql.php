<?php
    include ('connectmysql.php');
    
	class DAOmysql{
		function new_user($user){
			 $sql = "INSERT INTO users(dni, name, surname, date_birthday,"
                . " sexo, mobile, email, user, pass) VALUES ('".$user['dni']."', '".$user['nombre']."', '".$user['apellidos']."',"
                . " '".$user['datebirthday']."', '".$user['sexo']."', '".$user['tlf']."','".$user['email']."','".$user['usuario']."','".$user['pass']."')";
            $conexion = connectmysql::con();
            $res = mysqli_query($conexion, $sql);
            connectmysql::close($conexion);
			return $res;
		}
		
	}