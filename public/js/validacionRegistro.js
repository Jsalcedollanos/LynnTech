function errorR() {
    var contraseña1 =  document.getElementById('pass1').value;
    var contraseña2 =  document.getElementById('pass2').value;
    
    if (contraseña1 != contraseña2) {
        $('#error-Modal').modal('show');
    }
}
