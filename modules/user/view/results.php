        <?php
            include('../../../utils/funct.inc.php');
            include ('../model/DAOmysql.php');
            session_start();
            $user = ($_SESSION['user']);
            debug($_SESSION['user']);
            
            
            $daosql = new DAOmysql();
			$rdo = $daosql->new_user($user);
			if($rdo){
			    ?>
				<div class="panel panel-success">
                  <div class="panel-heading">¡Exito!</div>
                  <div class="panel-body">El usuario se ha registrado correctamente</div>
                </div>
				<?php
			}else{
				?>
				<div class="panel panel-danger">
                    <div class="panel-heading">¡Error!</div>
                    <div class="panel-body">Ha ocurrido un problema al registrar el usuario</div>
                </div>
                <?php
			}
        ?>
        
        <br><br><a href="../../../index.php">Volver</a>