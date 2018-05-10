var usrs;

function getJsonFile(url,callback){

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if( (this.readyState === 4) && ( (this.status === 200) || (this.status === 304) ) ){
                callback(JSON.parse(this.responseText));
        }
    };

    xhttp.open("GET", url, true);
    xhttp.send();

}

function loadpage(data){
    usrs = data;
}

function getfile(){
    getJsonFile("../data/log.json",loadpage);
}
function passvalid(){
    var ok = false;
    var aux;
    var flag = 0;
    var pass =  document.getElementById("inputPassword").value;
    var emailu= document.getElementById("inputEmail").value;
    for(var i=0; i<usrs.length;i++){
        aux = usrs[i];
        if(aux.email == emailu){
            if(aux.password == pass){
                ok = true;
                flag = 1;
                break;
            }else{
                alert("Contraseña Incorrecta");
                flag = 1;
                ok = false;
                break
            }
        }
    }
    if(!flag){
        alert("Usuario no registrado :(");
        window.location.href='../sing/singin.php';
    }

    return ok;
}