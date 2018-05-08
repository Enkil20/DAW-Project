<!--
    Iván Ochoa
    Laboratorio 7 
    se hará uso de JSON,PHP y HTML5 
-->

<?php
    session_start();
    if ((isset($_SESSION["session_started"])))
    {
        header('Location: ../index.php');
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

                <form action="./users.php" method="POST">
                    <input type="text" name="uname" id="uname" placeholder="User Name" autofocus required/>
                    <br/>
                    <br/>
                    <input type="password" name="pswd" id="pswd" placeholder="Password" required/>
                    <br/>
                    <br/>
                    <input type="text" name="name" id="name" autocomplete="on" placeholder="Name" required/>
                    <br/>
                    <br/>
                    <input type="text" name="last" id="last" autocomplete="on" placeholder="Last Name" required/>
                    <br/>
                    <br/>
                    <label for="bday">Birth Day: <br/></label>
                    <input type="text" name="bday" id="bday" required placeholder="YYYY-MM-DD" required 
                        pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
                        title="Enter a date in this format YYYY-MM-DD"/>
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