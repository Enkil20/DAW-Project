<?php   
    session_start();
    if(isset($_SESSION["start_time"]) && ($_SESSION["start_time"]>0)){
        require_once "./users.php";
    if($_SESSION["type"]=="1") 
    header ("Location: ../index.php");
}
else 
    header ("Location: ./new.php");
?>

<!doctype html>

<html>

    <head>
        <title>Perfil</title>
        <meta charset="utf-8" />
        <!-- CSS EXTERNA -->
        <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    </head>

    <body>
        <div class="wrapper">
            <?php require_once dirname(__FILE__) . "/header.php"; ?>
            <section id="tabla">
                <h1> Bienvenido
                    <?php
                        echo $_SESSION["user"];
                    ?>
                </h1>
                </br>
                <h2>Tus Datos :D</h2>
                <h3>Tipo: 
                    <?php
                        echo $_SESSION["type"];
                    ?>
                </h3>
                <h3>Name: <?php Name(); ?> </h3>
                </br>
                <h3>Birth Day <?php Bday(); ?></h3>
                </br>
				<li><a href="./logout.php">Logout</a></li>	
            </section>
        </div>
        <footer>
            <p id="name">Ivan Ochoa</p>
        </footer>
    </body>

</html>