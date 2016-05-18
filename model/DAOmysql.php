<?php
    //include connect.php
    
	class DAOUser{
		function new_user($user){
			 $sql = "INSERT INTO userapp(dni, name, surname, date_birthday,"
                . " sexo, mobile, email, user, pass) VALUES ('$user[dni]', '$user[name]', '$user[surname]',"
                . " '$user[datebirthday]', '$user[sexo]', '$user[tlf]','$user[email]','$user[user]','$user[pass]')";
            
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}
		
	}