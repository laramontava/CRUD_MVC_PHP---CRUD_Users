        <center>
        <div id="todoformulario">
            <fieldset id="titleborder">
                <div id="titul">Sign Up</div>
            </fieldset>
            <form id="formuser" name="formuser" method="post" autocomplete="on" onsubmit="return validate_user();" action="index.php?page=controller_user&op=sign_up">
                <fieldset id="formularioborde">
                <table>
                    <tr>
                        <td>DNI: </td>
                        <td><input type="text" id="dni" name="dni" placeholder="12345678Z"/><br>
                        <span id="e_dni" class="styerror" style="font-size: 12;"></span>
                        <?php
            				if (!val_dni($_POST['dni']))
            		      		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_dni . "</SPAN>");
            			?>
            			</td>
                    </tr>
                    <tr>
                        <td>Nombre: </td>
                        <td><input type="text" id="nombre" name="nombre" placeholder="Nombre"/>
                        <br>
                        <span id="e_nombre" class="styerror" style="font-size: 12;"></span>
                        <?php
            				if (!val_nombre($_POST['nombre']))
            		      		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_nombre . "</SPAN>");
            			?>
            		</td>
                    </tr>
                    <tr>
                        <td>Apellidos: </td>
                        <td><input type="text" id="apellidos" name="apellidos" placeholder="Apellidos"/>
                        <br>
                        <span id="e_apellidos" class="styerror" style="font-size: 12;"></span>
                        <?php
            				if (!val_apellidos($_POST['apellidos']))
            		      		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_apellidos . "</SPAN>");
            			?>
            		</td>
                    </tr>
                    <tr>
                        <td>Fecha nacimiento: </td>
                        <td><input type="text" id="datebirthday" name="datebirthday" placeholder="24/04/1995" readonly>
                        <br>
                        <span id="e_birthday" class="styerror" style="font-size: 12;"></span>
                        <?php
            				if (!val_birthday($_POST['datebirthday']))
            		      		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_nacimiento . "</SPAN>");
            			?>
            		</td>
                    </tr>
                    <tr>
                        <td>Sexo: </td>
                        <td>
                            <input type="radio" name="sexo" value="Hombre"/>Hombre
                            <input type="radio" name="sexo" value="Mujer"/>Mujer
                            <input type="radio" name="sexo" value="Otro" checked/>Otro
                        </td>
                    </tr>
                    <tr>
                        <td>Tel&eacute;fono: </td>
                        <td><input type="text" id="tlf" name="tlf" placeholder="123456789"/><br>
                        <span id="e_tlf" class="styerror" style="font-size: 12;"></span>
                        <?php
            				if (!val_phone($_POST['tlf']))
            		      		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_telefono . "</SPAN>");
            			?>
            		</td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="text" id="email" name="email" placeholder="ejemplo&#64;gmail.com"/>
                        <br>
                        <span id="e_email" class="styerror" style="font-size: 12;"></span>
                        <?php
            				if (!val_email($_POST['email']))
            		      		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_email . "</SPAN>");
            			?>
            		</td>
                    </tr>
                    <tr>
                        <td>Usuario: </td>
                        <td><input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario"/>
                        <br>
                        <span id="e_user" class="styerror" style="font-size: 12;"></span>
                        <?php
            				if (!val_user($_POST['usuario']))
            		      		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_user . "</SPAN>");
            			?>
            		</td>
                    </tr>
                    <tr>
                        <td>Contrase&ntilde;a: </td>
                        <td><input type="password" id="pass" name="pass"  placeholder="Contrase&ntilde;a"/>
                        <br>
                        <span id="e_pass" class="styerror" style="font-size: 12;"></span>
                        <?php
            				if (!val_pass($_POST['pass']))
            		      		print ("<SPAN CLASS='styerror' color: #ff0000;>" . $error_pass . "</SPAN>");
            			?>
            		</td>
                    </tr>
                </table>
                <br><hr>
                <input type="submit" name="Enviar" value="Enviar"/> <a href="#" id="asignin">¿Ya tienes una cuenta? Iniciar sesión</a>
                </fieldset>
                <br><br>
            </form>
        </div>
        </center>