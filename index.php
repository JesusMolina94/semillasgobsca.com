<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trip trip</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <!-- CDN Font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- CSS Main -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>
    
  <body>
      <!--Header -->
      <header class="header">
          <div class="container" vh-50>
              <!--Navbar-->
              <nav class="row text-white justify-content-between align-items-center text-uppercase pt-4">
               <!--logo-->
                  <a href="#" class="col-auto text-reset">
                      <img src="./img/logo-white.svg" alt="Logo Weston" class="img-logo">
                      Weston
                  </a>
                <!--anclas-->
                  <div class="col-auto text-reset">
                      <a href="#" class="text-white pt-3">Home</a>
                      <a href="#" class="text-white pt-3">Testimonios</a>
                      <a href="#" class="text-white pt-3">Productos</a>
                      <a href="#" class="text-white">Sobre nosotros</a>
                  </div>
              </nav>
              <!--Description-->
              <div class="row h-100 align-items-center">
                  <div class="col-6 text-white">
<!--                      titulo-->
                      <h1 class="text-capitalize"><span class="text-warning h5">Las originales semillas de </span><br>brazil</h1>
                      <!--descripcion-->
                      
                      <p>La original semilla de Brazil, al alcance en un sólo click o una llamada.
                      
                      
                      </p>
                      <!--boton-->
                      <a href="#" class="text-reset btn btn-warning">-</a>
                  </div>
              </div>
          </div>
          <img src="img/cuts/cut-header.svg">
      </header>
    <!-- Jquery -->
    <script src="./js/jquery-3.5.0.min.js"></script>
    <!-- Popper -->
    <script src="./js/popper.min.js"></script>
    <!-- JS Bootstrap -->
    <script src="./js/bootstrap.min.js"></script>
  </body>

    <!--importaciones -->
    <?php include_once('components/imports.php') ?>   
    <?php include_once("components/ButtonFloat.php") ?>

</html>
