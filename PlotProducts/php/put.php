<?php
require_once "modelo_usuarios.php";

session_start();

//Ruta del archivo
$file1 = "../data/amazonData.json";
$file2 = "../data/linioData.json";
$file3 = "../data/mercadoLibreData.json";
$fileSave = "../data/buscados.json";
$amazon;
$linio;
$mercado;


//Guarda los productos en una estructura de datos
$products;

function getAmazon(){

    global $file1;
    global $amazon;
    $amazon = readJson($file1);
	//var_dump($amazon);
}

function getLinio(){

    global $file2;
    global $linio;

    $linio = readJson($file2);
	//var_dump($linio);
}

function getMercado(){

    global $file3;
    global $mercado;

    $mercado = readJson($file3);

}

function BuscaProductos($data){

    global $file1;
    global $amazon;
	global $file2;
    global $linio;
	global $file3;
    global $mercado;

    //Obtener el arreglo de productos
    getAmazon();
	getLinio();
	getMercado();
	
	$productos;
	
	var_dump($data);
	
	//var_dump($amazon);
    //Generar el nuevo elemento a añadir
    foreach($amazon as $usuar){
        if ($data["Search"] == $usuar["productName"] || $data["Search"] == $usuar["keyWord1"] || $data["Search"] == $usuar["keyWord2"] || $data["Search"] == $usuar["keyWord2"] || $data["Search"] == $usuar["keyWord3"]){
			//array_push($productos,$usuar);
			$productos[] = $usuar;
			echo "si Machea" . "<br/>";
		}
	}
	
	var_dump($productos);
	echo "<br/>" . "<br/>" . "<br/>";
	
	foreach($linio as $usuar){
        if ($data["Search"] == $usuar["productName"] || $data["Search"] == $usuar["keyWord1"] || $data["Search"] == $usuar["keyWord2"] || $data["Search"] == $usuar["keyWord2"] || $data["Search"] == $usuar["keyWord3"]){
			array_push($productos,$usuar);
		}
	}
	
	var_dump($productos);
	echo "<br/>" . "<br/>" . "<br/>";
	
	foreach($mercado as $usuar){
        if ($data["Search"] == $usuar["productName"] || $data["Search"] == $usuar["keyWord1"] || $data["Search"] == $usuar["keyWord2"] || $data["Search"] == $usuar["keyWord2"] || $data["Search"] == $usuar["keyWord3"]){
			array_push($productos,$usuar);
		}
	}
	var_dump($productos);

    //Agregarlo a la estructura
    //$usuarios[] = $newUsuario;

    //Guardar en archivo
	
    saveJson($productos, $fileSave);
	
	//header('Location: /DAW-Project/PlotProducts/busqueda.php');

}
    

BuscaProductos($_POST);    

?>
