function validate_dni(dni){
    if (dni.length > 0){
        var regexp = /(^[0-9]{8})[A-Z]{1}$/;
        return regexp.test(dni);
    }
    return false;
}
function validate_mobile(tlf){
    if (tlf.length > 0){
        var regexp = /^[0-9]{9}$/;
        return regexp.test(tlf);
    }
    return false;
}
function validate_name(nombre){
    if (nombre.length > 0){
        var regexp = /^([a-z ñáéíóú]{2,60})$/i;
        return regexp.test(nombre);
    }
}
function validate_surname(apellidos){
    if (apellidos.length > 0){
        var regexp = /^([a-z ñáéíóú]{2,60})$/i;
        return regexp.test(apellidos);
    }
}
function validate_date_birthday(datebirthday){
    if (datebirthday.length > 0){
        var regexp = /^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[012])[/\\/](19|20)\d{2}$/;
        return regexp.test(datebirthday);
    }
}
function validate_email(email){
    if (email.length > 0){
        var regexp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
        return regexp.test(email);
    }
}
function validate_username(username){
    if (username.length > 0){
        return true;
    }
}
function validate_passwd(password){
    if (password.length > 0){
        return true;
    }
}
function validate_user(){
    var r = true;
    var dni = document.getElementById('dni').value;
    var tlf = document.getElementById('tlf').value;
    var name = document.getElementById('nombre').value;
    var surname = document.getElementById('apellidos').value;
    var birthday = document.getElementById('datebirthday').value;
    var email = document.getElementById('email').value;
    var username = document.getElementById('usuario').value;
    var password = document.getElementById('pass').value;
    
    if (!validate_dni(dni)) {
        document.getElementById('e_dni').innerHTML = "DNI no v&aacute;lido";
        r = false;
    } else {
        document.getElementById('e_dni').innerHTML = "";
    }
    if (!validate_mobile(tlf)) {
        document.getElementById('e_tlf').innerHTML = "T&eacute;lefono no v&aacute;lido";
        r = false;
    } else {
        document.getElementById('e_tlf').innerHTML = "";
    }
    if (!validate_name(name)) {
        document.getElementById('e_nombre').innerHTML = "Nombre no v&aacute;lido";
        r = false;
    } else {
        document.getElementById('e_nombre').innerHTML = "";
    }
    if (!validate_surname(surname)) {
        document.getElementById('e_apellidos').innerHTML = "Apellidos no v&aacute;lidos";
        r = false;
    } else {
        document.getElementById('e_apellidos').innerHTML = "";
    }
    if (!validate_date_birthday(birthday)) {
        document.getElementById('e_birthday').innerHTML = "Fecha de nacimiento no v&aacute;lida";
        r = false;
    } else {
        document.getElementById('e_birthday').innerHTML = "";
    }
    if (!validate_email(email)) {
        document.getElementById('e_email').innerHTML = "Correo no v&aacute;lido";
        r = false;
    } else {
        document.getElementById('e_email').innerHTML = "";
    }
    if (!validate_username(username)) {
        document.getElementById('e_user').innerHTML = "Usuario no v&aacute;lido";
        r = false;
    } else {
        document.getElementById('e_user').innerHTML = "";
    }
    if (!validate_passwd(password)) {
        document.getElementById('e_pass').innerHTML = "Contrase&ntilde;a no v&aacute;lida";
        r = false;
    } else {
        document.getElementById('e_pass').innerHTML = "";
    }
    return r;
}