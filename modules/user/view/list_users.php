<?php
    include ('modules/user/model/DAOmysql.php');
?>
<h1>Lista de usuarios</h1>
<div class="container">
	<table class="table table-hover">
        <thead>
		    <tr>
                <th>Name</th>
		        <th>Email Address</th>
		        <th>Mobile Number</th>
		        <th>Action</th>
		    </tr>
		</thead>
		<tbody>
		    <?php
		        $daosql = new DAOmysql();
			    $daosql->list_users();
		    ?>
		</tbody>
		</table>
</div>