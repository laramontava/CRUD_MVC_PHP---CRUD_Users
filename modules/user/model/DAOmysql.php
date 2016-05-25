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
					echo '<td>'. $row['name'] . '</td>';
					echo '<td>'. $row['email'] . '</td>';
					echo '<td>'. $row['mobile'] . '</td>';
					echo '<td width=250>';
					echo '<a class="btn" href="read.php?name='.$row['name'].'">Read</a>';
					echo '&nbsp;';
					echo '<a class="btn btn-success" href="update.php?name='.$row['name'].'">Update</a>';
					echo '&nbsp;';
					echo '<a class="btn btn-danger" href="delete.php?name='.$row['name'].'">Delete</a>';
					echo '</td>';
					echo '</tr>';
				}
			connectmysql::close($conexion);
		}
		
	}