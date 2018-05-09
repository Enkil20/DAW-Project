
function validpass(){

    var pass1 = document.getElementById('inputPassword').value;
    var pass2 = document.getElementById('inputPassword2').value;
    console.debug(pass1);
    console.debug(pass2);
    var ok=true;
    if(pass1 != pass2){
        alert("Error de constraseña: Verificar que coincidan :D ");
        ok = false;
    }
    return ok;
} 