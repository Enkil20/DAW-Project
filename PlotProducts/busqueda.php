<?php
require_once dirname(__FILE__) . "/php/modelo_usuarios.php";

session_start();
var_dump($_SESSION);

//Ruta del archivo
$file = "../data/buscados.json";
//Guarda los productos en una estructura de datos
$products;

function getProductos(){

    global $file;
    global $products;

    $products = readJson($file);

}

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./images/ico.png">
	
	<link type = "text/css" rel = "stylesheet" href = "memorama.css"

    <title>TuTienda</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<!-- Javascript de la aplicacion-->
	<!-- <script src = "./js/memorama.js"></script> -->
	<!-- <script src = "./js/functions.js"></script> -->
	
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.html">Tu Tienda</a> 
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> 
          <span class="navbar-toggler-icon"></span> 
         </button> 
         <div class="collapse navbar-collapse" id="navbarCollapse"> 
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active"> 
               <a class="nav-link" href="./about/About.HTML">About us <span class="sr-only">(current)</span></a> 
             </li> 
             <li class="nav-item"> 
               <a class="nav-link" href="./log/login.html">Entrar</a> 
             </li> 
             <li class="nav-item"> 
               <a class="nav-link" href="./sing/singin.html">Registrarse</a> 
             </li> 
           </ul> 
           <form class="form-inline mt-2 mt-md-0" action="./php/put.php" method="POST"> 
             <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="Search" id="Search"> 
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
           </form> 
         </div> 
       </nav> 
     </header> 

    <main>
	<div id="main-container" class = "main-container">
	<section id="main-content">
                  <legend class=lista>Lista de usuarios</legend>
                  <table class="tabla">
                      <tr>
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Url</th>
                          <th>Precio</th>
                          <th>keyWord1</th>
						  <th>keyWord2</th>
						  <th>keyWord3</th>
                      </tr>
		<?php

            getProductos();
			var_dump($products);
			foreach($products as $busqueda){
                echo "<tr>";
				echo "<td>" . $busqueda["id"]. "</td>";
				echo "<td>" . $busqueda["productName"]. "</td>";
				echo "<td>" . $busqueda["url"]. "</td>";
				echo "<td>" . $busqueda["price"]. "</td>";
				echo "<td>" . $busqueda["keyWord1"]. "</td>";
				echo "<td>" . $busqueda["keyWord2"]. "</td>";
				echo "<td>" . $busqueda["keyWord3"]. "</td>";
				echo "</tr>";
				}
        ?>
		</table>
                </section>

            </div>

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="./about/About.HTML">Privacy</a> &middot; <a href="https://policies.google.com/terms">Terms</a></p>
      </footer>
    </main>

   
  </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</html>
