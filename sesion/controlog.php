<?php 
    session_start();
    require_once dirname(__FILE__) . "/json.php";
    $flag = 0;
    $file = "../data/log.json";
    $users=readJson($file);
    $email=$_POST["inputEmail"];
    $pswd=$_POST["inputPassword"];
    foreach($users as $usr => $value){
        if($users[$usr]["email"] == $email){
            if($users[$usr]["password"] == $pswd){
                $_SESSION["session_started"] = true;   
                $_SESSION["start_time"] = time();
                $_SESSION["user"] = $email;
                $_SESSION["type"] = $users[$usr]["type"];
                $_SESSION["id"]=$users[$usr]["id"];
                $flag = 1;
                header("Location: ../index.php");
                break;
            }
        }
    }
?>
