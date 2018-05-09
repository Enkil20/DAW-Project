<!--
    ITESM
    Ivan Ochoa 
    Pagina login 

    En esta página el usuario registrado inicia sesión, ya sea con nosotros (correo y contrasena) 
    o por medio de Google 

    Temporalmente no funciona el log con Google ya que no tenemos un dominio público que nos permita
    inscribir. 
-->

<?php
session_start();
if(isset($_SESSION["start_time"]) && ($_SESSION["start_time"]>0)){
    header ("Location: ../profile/profile.php");
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
            <link rel="stylesheet" href="../css/logstyle.css" type="text/css" />
    </head>

    <body>
        <form class="form-signin" method="POST" action="../sesion/controlog.php" > 
            <div class="text-center mb-4">
                <img class="mb-4 img" src="../images/logo.png" alt="">
                <h1 class="h3 mb-3 font-weight-normal">Ingresa tus datos</h1>
                <p>Aún con dudas?... <a href="../index.php">Realizar más búsquedas.</a></p>
            </div>
        
            <div class="form-label-group">
                <input name="inputEmail" id="inputEmail" class="form-control border border-primary is-valid" placeholder="Email address" type="email" required>
                <label for="inputEmail">Correo electrónico</label>
            </div>
        
            <div class="form-label-group">
                <input name="inputPassword" id="inputPassword" class="form-control border border-primary is-valid" placeholder="Password" type="password" required>
                <label for="inputPassword">Contrasenna</label>
            </div>
        
            <div class="checkbox mb-3">
                <label>
                    <input value="remember-me" type="checkbox"> Mantener Sesión
                </label>
            </div>
            <button name="sub" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <br/>
            <p class="text-center mb-4">O puedes inisiar sesion con: </p>
            
            <!--Boton de Google para registrar :D -->
            <div id="customBtn" class="rounded"></div>
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
