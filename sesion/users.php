<?php
    require_once dirname(__FILE__) . "/json.php";
    $file = "../data/log.json";
    $filet = "../data/user.json";
    $Usuarios;
    $id;
    $aux = false;
    $producto;

    function getUser()
    {
        global $file;
        global $Usuarios;
        $Usuarios = readJson($file);
        $Utype = readJson($filet);
    }

    function saveUser($data)
    {
        global $Usuarios;
        global $file;
        getUser();
        $newUsuario = array(
                        "id" => uniqid(),
                        "uname" => $data["inputFirstName"],
                        "type"=> "2",
                        "password" => $data["inputPassword"],
                        "name" => $data["inputFirstName"],
                        "last" => $data["inputLasttName"],
                        "email" => $data["inputEmail"]
                    );
        $Usuarios[] = $newUsuario;
        saveJson($Usuarios, $file);
        echo "<pre>";
        var_dump($Usuarios);
        echo "</pre>";
    }

    function getKey(){
       getUser();

        global $id;

        if(sizeof($Usuarios)!=0){
            foreach($Usuarios as $usr){
                if($_SESSION["user"]==$usr["email"]){
                    $id=$usr;
                }
            }
        }
    }

    function Products(){
        getUser();
        global $id;
        getKey();
        $producto = $Usuarios[$id]["producto"];
        
    }

    function Name(){
        getUser();
        global $id;
        getKey();
        echo $Usuarios[$id]["name"] . " " . $Usuarios[$id]["last"];
    }

    function UName(){
        getUser();
        global $id;
        getKey();
        echo $Usuarios[$id]["uname"];
    }

    var_dump($_POST["sub"]);
    if(isset($_POST["sub"]))
    {
        var_dump($_POST);
        $email = $_POST["email"];
        getUser();
        foreach($Usuarios as $usr => $value){
            if($Usuarios[$usr]["email"] == $email){
                $aux = true;
                echo "<br/>"."Alerta: ".$uname." el correo ya está dado de alta. Ingresa con un correo diferente. ";
                header ("../sing/singin.html");
                break;
            }
        }

        if($aux == false){
            saveUser($_POST);
            session_start();
            $_SESSION["start_time"] = time();
            $_SESSION["user"] = $email;
            $_SESSION["type"] = "2";
            header("Location: ../profile/profile.php");
        }
       
    }

?>


