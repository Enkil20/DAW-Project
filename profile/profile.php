<?php
session_start();
?>



<!doctype html>
<html>
    <head>
        <title>Profile</title>
        
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

        <!-- CSS EXTERNA -->   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/profile.css">

        <?php
        require_once "../sesion/users.php";
        ?>              
        
        

    </head>
        <?php require_once "../header/header.php"; ?>
    <body>
        <div class="wrapper">
            <ul>
                <li style="width: 250px;">
                    <div class="container" id="cont" >
                        <div class="col-lg-3 col-sm-6">
                            <div class="card hovercard">
                                <div class="cardheader"></div>
                                <div class="avatar">
                                    <img alt="" src="https://images.ctfassets.net/o59xlnp87tr5/Xu49VLbm80ey028O0OEQS/2d3addd06f9d769d8db3d50ef3f5e95f/feeling_down.jpg?w=360&h=240&fit=fill">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        <a><?php Uname(); ?></a>
                                    </div>
                                    <div class="desc"><?php Name(); ?></div>
                                </div>
                                <div class="bottom">
                                    <a class="btn btn-primary btn-lg" href="../sesion/logout.php" role="button">Logout</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </li>
                <li>
                    <div class="consulta">
                        <div id="lista">
                            <h1>Productos Consultados</h1>
                            <div id="productos">
                                <table border="5">
                                    <tr>
                                        <th>Name</th>
                                        <th>URL</th>
                                    </tr>
                                    <?php
                                        Products();
                                        foreach($producto as $pr){
                                            echo "<tr>";
                                            echo "<td>".$pr["nombre"]."</td>"; 
                                            echo "<td>".$pr["url"]."</td>";
                                            echo "<tr>";
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                        <div id="config">
                            <button class="btn btn-primary btn-lg" href="" role="button" id="nameChng">Cambiar Nombre</button>
                            <button class="btn btn-primary btn-lg" href="" role="button" id="passChng">Cambiar Constraseña</button>
                            <button class="btn btn-primary btn-lg" href="" role="button" id="imgChng">Cambiar foto de perfil</button>
                            <form id="changeNameForm">
                                <label>Nombre nuevo: </label>
                                <input type="text" name="inputChangeName" placeholder="Escribe tu nuevo nombre">
                                </br>
                                <a class="btn btn-primary btn-lg" href="" role="button">Submit</a>
                            </form>
                            <form id="changePassForm">
                                <label>Contraseña nueva: </label>
                                <input type="password" name="inputChangePassword" placeholder="Escribe tu nueva contraseña">
                                </br>
                                <label>Repetir contraseña: </label>
                                <input type="password" name="checkInputChangePassword" placeholder="Vuelve a escribir la contraseña">
                                </br>
                                <button class="btn btn-primary btn-lg" href="" role="button">Submit</button>
                            </form>
                            <form id="changeImgForm">
                                <input type="text" name="inputChangeImg" placeholder="Type URL">
                                </br>
                                <button class="btn btn-primary btn-lg" href="" role="button">Submit</button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
<script type="text/javascript" src="profile.js"></script>