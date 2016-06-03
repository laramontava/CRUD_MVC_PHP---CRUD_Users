<?php
    include ('model/connectmysql.php');
    
	class DAOmysql{
		function new_user($user){
			try{
				 $sql = "INSERT INTO users(dni, name, surname, date_birthday,"
	                . " sexo, mobile, email, user, pass) VALUES ('".$user['dni']."', '".$user['nombre']."', '".$user['apellidos']."',"
	                . " '".$user['datebirthday']."', '".$user['sexo']."', '".$user['tlf']."','".$user['email']."','".$user['usuario']."','".$user['pass']."')";
	            $conexion = connectmysql::con();
	            $res = mysqli_query($conexion, $sql);
	            connectmysql::close($conexion);
				return $res;
			}catch(Exception $e){
				return false;
			}
		}
		
		function list_users(){
			try{
				$conexion = connectmysql::con();
				$sql = "SELECT * FROM users";
			 	$res = mysqli_query($conexion, $sql);
				connectmysql::close($conexion);
				return $res;
			}catch(Exception $e){
				return false;
			}
		}
		
		function read_users($user){
			try{
				$connection = new connectmysql();
				$con = $connection->con();
				$sql = 'SELECT * FROM users WHERE user = "'.$user.'"';
				$res = mysqli_query($con,$sql);
				$connection->close($con);
				return mysqli_fetch_object($res);
			}catch(Exception $e){
				return false;
			}
		}
		
		function update_user($user){
			try{
				$conexion = connectmysql::con();
				$sql = 'UPDATE users SET dni="'.$user['dni'].'", name="'.$user['nombre'].'", surname="'.$user['apellidos'].'", date_birthday="'.$user['datebirthday'].'", sexo="'.$user['sexo'].'", mobile="'.$user['tlf'].'", email="'.$user['email'].'", user="'.$user['usuario'].'", pass="'.$user['pass'].'" WHERE dni = "'.$user['dni'].'"';
				$res = mysqli_query($conexion,$sql);
				connectmysql::close($conexion);
				return true;
			}catch(Exception $e){
				return false;
			}
		}
		
		function delete_user($user){
			try{
				$connection = new connectmysql();
				$con = $connection->con();
				$sql = 'DELETE FROM users WHERE user = "'.$user.'"';
				$res = mysqli_query($con,$sql);
				$connection->close($con);
				return true;
			}catch(Exception $e){
				return false;
			}
		}
	}