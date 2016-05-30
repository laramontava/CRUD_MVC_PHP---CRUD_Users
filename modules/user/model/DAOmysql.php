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
					echo '<a class="btn btn-success" href="update.php?user='.$row['user'].'">Update</a>';
					echo '&nbsp;';
					echo '<a class="btn btn-danger" href="delete.php?user='.$row['user'].'">Delete</a>';
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
	}