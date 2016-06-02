<div class="container">
	<h1>Lista de usuarios</h1>
	<table class="table table-hover">
        <thead>
		    <tr>
                <th>User Name</th>
		        <th>Email Address</th>
		        <th>Mobile Number</th>
		        <th>Action</th>
		    </tr>
		</thead>
		<tbody>
		    <?php
			    foreach ($user as $row) {
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
		    ?>
		</tbody>
		</table>
</div>