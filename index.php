<?php
  session_start();
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/ico.png">

    <title>TuTienda</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../css/carrusel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="./index.php">Tu Tienda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./about/About.HTML">About us <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./log/login.php">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./sing/singin.php">Registrarse</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="./images/primera.png" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Encuentra los mejores precios.</h1>
                <p>Busca lo que que te gusta y encuentra el mejor precio para ti.</p>
                <p><a class="btn btn-lg btn-primary" href="./sing/singin.html" role="button">Únete ya </a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="./images/segunda.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="text-primary">Mercado libre.</h1>
                <p>Tus productos por los mejores ofertadores del país.</p>
                <p><a class="btn btn-lg btn-primary" href="https://www.mercadolibre.com.mx" role="button">Visita</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="./images/tres.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Amazon Mexico.</h1>
                <p>Calidad garantizada en todos los productos.</p>
                <p><a class="btn btn-lg btn-primary" href="https://www.amazon.com.mx" role="button">Dar una vuelta</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="./images/hp.png" alt="Generic placeholder image" width="140" height="140">
            <h2>HP</h2>
            <p>Una nueva era de atletas merece un nuevo nivel de equipamiento. Obtén el rendimiento que exige la competencia con los accesorios profesionales, los nuevos factores de forma innovadores y un hardware de vanguardia que entiende que tu ascenso a la cumbre reside en el poder que no te frenará.</p>
            <p><a class="btn btn-secondary" href="http://www8.hp.com/mx/es/campaigns/gamingpcs/overview.html" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="./images/razer.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Razer</h2>
            <p>NO CONOCE LOS LIMITES. Una mini torre compacta con capacidad para doble tarjeta de gráficos. Diseñada y creada para lo último en realidad virtu.</p>
            <p><a class="btn btn-secondary" href="https://www.razer.com" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="./images/Lg.png" alt="Generic placeholder image" width="140" height="140">
            <h2>LG</h2>
            <p>Con los celulares LG, la vanguardia, diseño e innovación van siempre a tu lado. Queremos conectarte al resto del mundo con lo mejor de la tecnología disponible, para que tu único problema sea decidirte por uno de nuestros modelos..</p>
            <p><a class="btn btn-secondary" href="https://www.lg.com" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="./about/About.HTML">Privacy</a> &middot; <a href="https://policies.google.com/terms">Terms</a></p>
      </footer>
    </main>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
