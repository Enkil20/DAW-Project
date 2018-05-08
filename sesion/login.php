<!--
    Iván Ochoa
    Laboratorio 7 
    se hará uso de JSON,PHP y HTML5 
-->
<?php

    session_start();
    if(isset($_SESSION["start_time"]) && ($_SESSION["start_time"]>0)){
        if($_SESSION["type"]=="2")
            header ("Location: ./perfil_usuario.php");
        else if ($_SESSION["type"]=="1")
            header ("Location: ./listado_usuarios.php");
}
?>
<?php
    require_once "./users.php";
?>

<!doctype html>

<html>
    <head>
        <title>Laboratorio 8: Sesiones</title>
        <meta charset="utf-8"/>
        <!-- CSS EXTERNA -->
        <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    </head>

    <body>
        <div class="wrapper">
        <?php require_once dirname(__FILE__) . "/header.php"; ?> 
            <div class="formulario">
                <h1 id"titulo"> Ingresa Tus Datos</h1>

                <form action="./controlog.php" method="POST">
                    <input type="text" name="uname" id="uname" placeholder="User Name" autofocus required/>
                    <br/>
                    <br/>
                    <input type="password" name="pswd" id="pswd" placeholder="Password" required/>
                    <br/>
                    <br/>
                    <input type="submit" name="sub" value="ok">
                    <input type="reset">
                </form>
            </div>
        </div>
    </body>
    <footer>
        <p id="name">Ivan Ochoa</p>
    </footer>
</html>