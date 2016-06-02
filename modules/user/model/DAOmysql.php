<?php
    //include ('../../../model/connectmysql.php');
    include ('model/connectmysql.php');
    
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
		
		function list_users(){
		    $conexion = connectmysql::con();
		    $sql = "SELECT * FROM users";
	 			foreach ($conexion->query($sql) as $row) {
					echo '<tr>';
					echo '<td>'. $row['user'] . '</td>';
					echo '<td>'. $row['email'] . '</td>';
					echo '<td>'. $row['mobile'] . '</td>';
					echo '<td width=250>';
					echo '<a class="btn" href="index.php?page=controller_user&op=read&user='.$row['user'].'">Read</a>'; 
					echo '&nbsp;';
					echo '<a class="btn btn-success" href="index.php?page=controller_user&op=update&user='.$row['user'].'">Update</a>';
					echo '&nbsp;';
					echo '<a class="btn btn-danger" href="index.php?page=controller_user&op=delete&user='.$row['user'].'">Delete</a>';
					echo '</td>';
					echo '</tr>';
				}
			connectmysql::close($conexion);
		}
		
		function read_users($user){
			$connection = new connectmysql();
			$con = $connection->con();
			$sql = 'SELECT * FROM users WHERE user = "'.$user.'"';
			$res = mysqli_query($con,$sql);
			$connection->close($con);
			return mysqli_fetch_object($res);
		}
		
		function update_user($user){
			$conexion = connectmysql::con();
			$sql = 'UPDATE users SET dni="'.$user['dni'].'", name="'.$user['nombre'].'", surname="'.$user['apellidos'].'", date_birthday="'.$user['datebirthday'].'", sexo="'.$user['sexo'].'", mobile="'.$user['tlf'].'", email="'.$user['email'].'", user="'.$user['usuario'].'", pass="'.$user['pass'].'" WHERE user = "'.$user['usuario'].'"';
			$res = mysqli_query($conexion,$sql);
			connectmysql::close($conexion);
		}
		
		function delete_user($user){
			$connection = new connectmysql();
			$con = $connection->con();
			$sql = 'DELETE FROM users WHERE user = "'.$user.'"';
			$res = mysqli_query($con,$sql);
			$connection->close($con);
		}
	}