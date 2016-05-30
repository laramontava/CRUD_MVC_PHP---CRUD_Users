<div class="container">
  <h3>Información del usuario <?php echo $user->user;?></h3>
  <table class="table table-striped">
    <tbody>
  		<tr>
        <th>DNI</th>
  		  <th><?php echo $user->dni;?></th>
  		</tr>
  		<tr>
        <th>Name</th>
  		  <th><?php echo $user->name;?></th>
  		</tr>
  		<tr>
        <th>Surname</th>
  		  <th><?php echo $user->surname;?></th>
  		</tr>
  		<tr>
        <th>Date Birthday</th>
  		  <th><?php echo $user->date_birthday;?></th>
  		</tr>
  		<tr>
        <th>Gender</th>
  		  <th><?php echo $user->sexo;?></th>
  		</tr>
  		<tr>
        <th>Mobile</th>
  		  <th><?php echo $user->mobile;?></th>
  		</tr>
  		<tr>
        <th>Email</th>
  		  <th><?php echo $user->email;?></th>
  		</tr>
  		<tr>
        <th>User</th>
  		  <th><?php echo $user->user;?></th>
  		</tr>
		</tbody>
	</table>
</div>