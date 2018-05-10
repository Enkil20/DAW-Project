<?php
    require_once dirname(__FILE__) . "/json.php";
    $file = "../data/log.json";
    $Usuarios;
    $id;
    $aux = false;
    $producto;
    function getUser()
    {
        global $file;
        global $Usuarios;
        $Usuarios = readJson($file);
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
    }

    function getKey(){
        getUser();
        global $id;
        global $Usuarios;
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
        global $producto;
        getKey();
        $producto = $id["producto"];
    }

    function Name(){
        getUser();
        global $id;
        getKey();
        echo $id["name"] . " " . $id["last"];
    }

    function UName(){
        getUser();
        global $id;
        getKey();
        echo $id["uname"];
    }
    if(!isset($_SESSION["session_started"])){
        if(isset($_POST["sub"]))
        {
            $email = $_POST["inputEmail"];
            getUser();         
            foreach($Usuarios as $usr => $value){
                if($usr["email"] == $email){
                    $aux = true;
                    echo "<script>
                    alert('Email registrado. Intente con uno diferente.');
                    window.location.href='../sing/singin.php';
                    </script>";
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
    }
?>


