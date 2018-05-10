<?php
    session_start();
    require_once  "../sesion/json.php";
    $dat[0] = "../data/amazonData.json";
    $dat[1] = "../data/linioData.json";
    $dat[2] = "../data/mercadoLibreData.json";
    $pro;
    $res = array();
    function getProduct($file){
        global $pro;
        $pro = readJson($file);
    }
    var_dump($_SESSION);
    if(isset($_SESSION["session_started"])){
        if(isset($_POST["sub"])){
            $srch = explode(" ",$_POST["key"]);
            var_dump($srch);
            for($i=0;$i<3;$i++){
                echo $i;
                getProduct($dat[$i]);
                var_dump($pro);
                foreach($pro as $j){
                    for($k;$k<3;$k++){
                        if(isset($srch[k])){
                            if(($j["keyWord1"]==$srch[k])||($j["keyWord2"]==$srch[k])||($j["keyWord2"]==$srch[k])){
                                array_push($res,$j);
                                var_dump($j);
                            }
                        }
                    }
                }
            }
        }
    }else{
        //header("Location: ../log/login.php");
        echo "holi pruuu no estas chido .|.";
    }

?>