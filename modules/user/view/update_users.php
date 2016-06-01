<div class="container">
<h3>Modificar usuario <?php echo $user->user;?></h3>
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">DNI:</label>
    <div class="col-sm-10">
      <input type="dni" class="form-control" id="name" value="<?php echo $user->dni;?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="name" value="<?php echo $user->name;?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Surname:</label>
    <div class="col-sm-10">
      <input type="surname" class="form-control" id="name" value="<?php echo $user->surname;?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Date Birthday:</label>
    <div class="col-sm-10">
      <input type="date_birthday" class="form-control" id="name" value="<?php echo $user->date_birthday;?>">
    </div>
  </div>
  <?php
  if($user->sexo === "Otro"){
      ?>
        <div class="form-group">
        <label class="control-label col-sm-2" for="name">Gender:</label>
        <div class="col-sm-10">
          <input type="radio" name="sexo" value="Hombre"/> Hombre
          <input type="radio" name="sexo" value="Mujer"/> Mujer
          <input type="radio" name="sexo" value="Otro" checked/> Otro
        </div>
      </div>
    <?php      
  }elseif($user->sexo === "Mujer"){
      ?>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Gender:</label>
        <div class="col-sm-10">
          <input type="radio" name="sexo" value="Hombre"/> Hombre
          <input type="radio" name="sexo" value="Mujer" checked/> Mujer
          <input type="radio" name="sexo" value="Otro"/> Otro
        </div>
      </div>
      <?php
  }else{
      ?>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Gender:</label>
        <div class="col-sm-10">
          <input type="radio" name="sexo" value="Hombre" checked/> Hombre
          <input type="radio" name="sexo" value="Mujer"/> Mujer
          <input type="radio" name="sexo" value="Otro"/> Otro
        </div>
      </div>
      <?php
  }
  ?>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Mobile:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="name" value="<?php echo $user->mobile;?>">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" value="<?php echo $user->email;?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">User:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="name" value="<?php echo $user->user;?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="pass" class="form-control" id="pwd" value="<?php echo $user->pass;?>">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <a class="btn btn-success" href="index.php?page=controller_user&op=read&user='.$row['user'].'">Update</a>
      <a class="btn" href="index.php?page=controller_user&op=list">Cancel</a>
    </div>
  </div>
</form>
</div>