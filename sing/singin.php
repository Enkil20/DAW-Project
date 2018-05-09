<!--
    ITESM
    Ivan Ochoa 
    Pagina login 

    En esta página el usuario se registrá, ya sea con nosotros (correo y contrasena) 
    o por medio de Google 

    Temporalmente no funciona el log con Google ya que no tenemos un dominio público que nos permita
    inscribir. 
-->

<?php

session_start();
if(isset($_SESSION["start_time"]) && ($_SESSION["start_time"]>0)){
    if($_SESSION["type"]=="2")
        header ("Location: ../profile/profile.html");
    else if ($_SESSION["type"]=="1")
        header ("Location: ./listado_usuarios.php");
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title> Log in</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

        <!-- CSS Externa -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/logstyle.css" type="text/css" />

        <script>

            function validpass(){
                console.log("holi")

                var pass1 = document.getElementById('inputPassword');
                var pass2 = document.getElementById('inputPassword2');
                
                if(pass1.value == pass2.value){
                    pass2.style.backgroundColor = goodColor;
                    document.getElementById('form').submit();
                }else{
                    alert = "Password don't math";
                    pass2.innerHTML = "";
                    window.location.href = "../index.html";
                }
            }
        </script>

    </head>

    <body>
        <form action="../sesion/users.php" class="form-signin" method="POST">
            <div class="text-center mb-4">
                <img class="mb-4 img" src="/images/logo.png" alt="">
                <h1 class="h3 mb-3 font-weight-normal">Regístrate</h1>
                <p>Aún con dudas?... <a href="/index.html">Realizar más búsquedas.</a></p>
            </div>

            <div class="form-label-group">
                <input id="inputFirstName" name="inputFirstName" class="form-control border-primary is-valid" placeholder="First Name" type="text" required>
                <label for="inputFirstName">Nombre</label>
            </div>

            <div class="form-label-group">
                <input id="inputLasttName" name="inputLasttName" class="form-control border-primary is-valid" placeholder="First Name" type="text" required>
                <label for="inputLasttName">Apellidos</label>
            </div>

            <div class="form-label-group">
                <input id="inputEmail" name="inputEmail" class="form-control border-primary is-valid" placeholder="Email address" type="email" required>
                <label for="inputEmail">Correo electrónico</label>
            </div>
        
            <div class="form-label-group">
                <input id="inputPassword" name="inputPassword" class="form-control border-primary is-valid" placeholder="Password" type="password" required>
                <label for="inputPassword">Contrasenna</label>
            </div>

            <div class="form-label-group">
                <input id="inputPassword2" name"inputPassword2" class="form-control border-primary is-valid" placeholder="Password" type="password" required>
                <label for="inputPassword2">Repetir Contrasenna</label>
            </div>
        
            <div class="checkbox mb-3">
                <label  class="form-check-label">
                    <input value="remember-me" class="is-valid" type="checkbox" required> He leido y acepto <a href="https://policies.google.com/terms?hl=es" target="_blank"> terminos y condiciones</a> 
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub" >Sign in</button>
            <br/>
            <p class="text-center mb-4">O puedes registrarte con</p>
            
            <!--Boton de Google para registrar :D -->
            <div id="customBtn"></div>
            <script>
                function onSuccess(googleUser) {
                    console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                }
                function onFailure(error) {
                    console.log(error);
                }
                function renderButton() {
                    gapi.signin2.render('customBtn', {
                        'scope': 'profile email',
                        'width': 390,
                        'height': 60,
                        'longtitle': false,
                        'theme': 'dark',
                        'onsuccess': onSuccess,
                        'onfailure': onFailure
                    });
                }
            </script>
            <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

            <br/>
              
            <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
        </form>    
    </body>
</html>
