<?php
session_start();
?>

<?php
    require_once "../sesion/users.php";
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
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/profile.css" type="text/css" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </head>
        <?php require_once "../header/header.php"; ?>
    <body>
        <div class="wraper">
            <div class="container" id="cont" >
                <div class="col-lg-3 col-sm-6">
                    <div class="card hovercard">
                        <div class="cardheader"></div>
                        <div class="avatar">
                            <img alt="" src="https://images.ctfassets.net/o59xlnp87tr5/Xu49VLbm80ey028O0OEQS/2d3addd06f9d769d8db3d50ef3f5e95f/feeling_down.jpg?w=360&h=240&fit=fill">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a target="_blank" href="../sesion/logout.php"><?php Uname(); ?></a>
                            </div>
                            <div class="desc"><?php var_dump($_SESSION["user"]); Name(); ?></div>
                        </div>
                        <div class="bottom">
                            <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" rel="publisher" href="../sesion/logout.php">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a class="btn btn-primary btn-sm" rel="publisher" href="https://plus.google.com/">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div> 
            </div>
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
                                foreach($producto as $pr){
                                    echo "<tr>";
                                    echo "<td>".$pr["nombre"]."<td>"; 
                                    echo "<td>".$pr["url"]."<td>";
                                    echo "<tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
                <div id="config">
                    <p>Cambiar Constraseña</p>
                    <p>Cambiar Nombre</p>
                    <p>Cambiar foto de perfil</p>
                </div>
            </div>
        </div>
    </body>
</html>