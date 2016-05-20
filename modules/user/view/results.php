<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            include('../../../utils/funct.inc.php');
            include ('../model/DAOmysql.php');
            session_start();
            $user = ($_SESSION['user']);
            debug($_SESSION['user']);
            
            
            $daosql = new DAOmysql();
			$rdo = $daosql->new_user($user);
			if($rdo){
				echo 'ok';
			}else{
				echo 'error';
			}
        ?>
        <br><br><a href="../index.php">Volver</a>
    </body>
</html>