<?php
    session_start();
    require_once  "../sesion/json.php";
    $dat[0] = "../data/amazonData.json";
    $dat[1] = "../data/linioData.json";
    $dat[2] = "../data/mercadoLibreData.json";
    $pro;
    $Usuarios;
    $id;
    $res = array();
    function getProduct($file){
        global $pro;
        $pro = readJson($file);
    }

    function getUser()
    {
        global $Usuarios;
        $Usuarios = readJson("../data/log.json");
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

     function saveProduct($data)
     {
         global $Usuarios;
         getKey();
         $newPro = array(
                         "id" => $data["id"],
                         "nombre" => $data["iproductName"],
                         "url" => $data["url"],
                         );
         $id["producto"] = $newPro;
         saveJson($Usuarios[$id["producto"]], "../data/log.json");
     }

    if(isset($_SESSION["session_started"])){
        if(isset($_POST["sub"])){
            $srch = explode(" ",$_POST["key"]);
            for($i=0;$i<3;$i++){
                getProduct($dat[$i]);
                foreach($pro as $j){
                    for($k=0;$k<3;$k++){
                        if(isset($srch[$k])){
                            if(($j["keyWord1"]==$srch[$k])||($j["keyWord2"]==$srch[$k])||($j["keyWord2"]==$srch[$k])){
                                array_push($res,$j);
                            }
                        }
                    }
                }
            }
            saveProduct($res);
        }
    }else{
        header("Location: ../log/login.php");
    }

?>