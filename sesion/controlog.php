<?php 
    session_start();
    require_once dirname(__FILE__) . "/json.php";

    $file = "../data/log.json";
    $users=readJson($file);
    $user=$_POST["uname"];
    $pswd=$_POST["pswd"];
    foreach($users as $usr => $value){
        if ($users[$usr]["uname"] == $user && $users[$usr]["password"] == $pswd) {
            $_SESSION["session_started"] = true;   
            $_SESSION["start_time"] = time();
            $_SESSION["user"] = $user;
            $_SESSION["type"] = $users[$usr]["type"];
            $_SESSION["id"]=$users[$usr]["id"];
            break;
        }
        else{
            $_SESSION["session_started"] = false;
        }
    }
    header ("Location: ../index.php");
?>
