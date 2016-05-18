<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            include('../utils/funct.inc.php');
            session_start();
            debug($_SESSION['user']);
            
            
            $host = '127.0.0.1';
    		$user = "laramontava";
    		$pass = "";
    		$db = "usersapp";
    		$port = 3306;                           //The port #. It is always 3306
    		$tabla="users";

			$conexion = mysql_connect($host,$user,$pass);
			if (!$conexion)
				echo "Error conectando con el servidor $host.";
			else{
				$resultado=mysql_select_db($db,$conexion);
				if (!$resultado)
					echo "Error seleccionando la base de datos $db.";
				else{
					// Comprobaremos si existe un articulo con ese codigo y ese tipo.
					$sql = "INSERT INTO users\n"
                    . "VALUES ('".$_SESSION['dni']."','".$_SESSION['nombre']."','".$_SESSION['apellidos']."','".$_SESSION['datebirthday']."','".$_SESSION['sexo']."','".$_SESSION['tlf']."','".$_SESSION['email']."','".$_SESSION['usuario']."','".$_SESSION['pass']."')";
                    //. "VALUES (\'$dni\',\'$nombre\',\'$apellidos\',\'$datebirthday\',\'$sexo\',\'$tlf\',\'$email\',\'$user\',\'$pass\')";
                    echo $sql;
					$resultado = mysql_query($sql,$conexion);
					if (!$resultado)
						echo "Se produjo un error al intentar consultar $tabla";
					else{
						echo "Se ha guardado el usuario correctamente";
					}
				}
				mysql_close($conexion);
			}
        ?>
        <br><br><a href="../index.php">Volver</a>
    </body>
</html>