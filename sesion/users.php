<?php
    require_once dirname(__FILE__) . "/json.php";
    $file = "../data/log.json";
    $filet = "../data/user.json";
    $Usuarios;
    $id;
    $aux = false;

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
                if($_SESSION["email"]==$Usuarios[$usr]["email"]){
                    $id=$usr;
                }
            }
        }
    }

    function Bday(){
        getUser();
        global $id;
        getKey();

       
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

    if(isset($_POST["sub"]))
    {
        $email = $_POST["email"];
        getUser();
        foreach($Usuarios as $usr => $value){
            if($Usuarios[$usr]["email"] == $email){
                $aux = true;
                echo "<br/>"."The user ".$email." is already taken, please try another one";
                header ("refresh:5; url=entrada_formulario.php");
                break;
            }
        }

        if($aux == false){
            $uname = 
            saveUser($_POST);
            session_start();
            $_SESSION["start_time"] = time();
            $_SESSION["user"] = $uname;
            $_SESSION["type"] = "2";
            header("Location: ../index.php");
        }
       
    }

?>