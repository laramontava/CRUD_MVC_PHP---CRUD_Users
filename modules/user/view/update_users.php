<div class="container">
    <h3>Modificar usuario <?php echo $user->user;?></h3>
    <form id="updateuser" name="updateuser" method="post" autocomplete="on" onsubmit="return validate_user();" action="index.php?page=controller_user&op=update&user=<?php echo $user->user;?>">
        <table>
            <tr>
                <td>DNI: </td>
                <td><input type="text" id="dni" name="dni" placeholder="12345678Z" value="<?php echo $user->dni;?>"/><br>
                    <?php
                        if (!val_dni($_POST['dni']))
                        print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_dni . "</SPAN>");
                        ?>
                    <span id="e_dni" class="styerror" style="font-size: 12;"></span>
                </td>
            </tr>
            <tr>
                <td>Nombre: </td>
                <td><input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $user->name;?>"/>
                    <br>
                    <?php
                        if (!val_nombre($_POST['nombre']))
                        print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_nombre . "</SPAN>");
                        ?>
                    <span id="e_nombre" class="styerror" style="font-size: 12;"></span>
                </td>
            </tr>
            <tr>
                <td>Apellidos: </td>
                <td><input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" value="<?php echo $user->surname;?>"/>
                    <br>
                    <?php
                        if (!val_apellidos($_POST['apellidos']))
                            		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_apellidos . "</SPAN>");
                        ?>
                    <span id="e_apellidos" class="styerror" style="font-size: 12;"></span>
                </td>
            </tr>
            <tr>
                <td>Fecha nacimiento: </td>
                <td><input type="text" id="datebirthday" name="datebirthday" placeholder="24/04/1995" value="<?php echo $user->date_birthday;?>" readonly>
                    <br>
                    <?php
                        if (!val_birthday($_POST['datebirthday']))
                            		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_nacimiento . "</SPAN>");
                        ?>
                    <span id="e_birthday" class="styerror" style="font-size: 12;"></span>
                </td>
            </tr>
            <tr>
                <td>Sexo: </td>
                <?php echo $user->sexo; ?>
                <td>
                    <?php
                    if($user->sexo === "Hombre"){
                        ?>    
                        <input type="radio" name="sexo" value="Hombre" checked/>Hombre
                        <?php
                    }else{
                        ?>    
                        <input type="radio" name="sexo" value="Hombre"/>Hombre
                        <?php
                    }
                    ?>
                    <?php
                    if($user->sexo==="Mujer"){
                        ?>    
                        <input type="radio" name="sexo" value="Mujer" checked/>Mujer
                        <?php
                    }else{
                        ?>    
                        <input type="radio" name="sexo" value="Mujer"/>Mujer
                        <?php
                    }
                    ?>
                    <?php
                    if($user->sexo==="Otro"){
                        ?>    
                        <input type="radio" name="sexo" value="Otro" checked/>Otro
                        <?php
                    }else{
                        ?>    
                        <input type="radio" name="sexo" value="Otro"/>Otro
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Teléfono: </td>
                <td><input type="text" id="tlf" name="tlf" placeholder="123456789" value="<?php echo $user->mobile;?>"/><br>
                    <?php
                        if (!val_phone($_POST['tlf']))
                            		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_telefono . "</SPAN>");
                        ?>
                    <span id="e_tlf" class="styerror" style="font-size: 12;"></span>
                </td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" id="email" name="email" placeholder="ejemplo&#64;gmail.com" value="<?php echo $user->email;?>"/>
                    <br>
                    <?php
                        if (!val_email($_POST['email']))
                            		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_email . "</SPAN>");
                        ?>
                    <span id="e_email" class="styerror" style="font-size: 12;"></span>
                </td>
            </tr>
            <tr>
                <td>Usuario: </td>
                <td><input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario" value="<?php echo $user->user;?>"/>
                    <br>
                    <?php
                        if (!val_user($_POST['usuario']))
                            		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_user . "</SPAN>");
                        ?>
                    <span id="e_user" class="styerror" style="font-size: 12;"></span>
                </td>
            </tr>
            <tr>
                <td>Contrase&ntilde;a: </td>
                <td><input type="password" id="pass" name="pass"  placeholder="Contrase&ntilde;a" value="<?php echo $user->pass;?>"/>
                    <br>
                    <?php
                        if (!val_pass($_POST['pass']))
                            		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_pass . "</SPAN>");
                        ?>
                    <span id="e_pass" class="styerror" style="font-size: 12;"></span>
                </td>
            </tr>
        </table>
        <input type="submit" name="Enviar_update" value="Update"/>
        <a class="btn" href="index.php?page=controller_user&op=list">Cancel</a>
    </form>
</div>