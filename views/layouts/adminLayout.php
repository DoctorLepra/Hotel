
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="_url" id="user" content="<?php echo $_SESSION['tipo_usuario'] ?>"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="images/hospital.svg">
    <title>Hotel</title>
    <style>
       .btn-1{
           width: 20px;
           margin: -20px;
           padding: 0px;
        }

    </style>
</head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Habitaciones</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php?controller=rooms&action=index">Habitaciones</a>
                <a class="dropdown-item" href="index.php?controller=typerooms&action=index">Tipo de Habitaciones</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?controller=reservation&action=index">Reversaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?controller=client&action=index">Clientes</a>
            </li>    
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Roles</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php?controller=admin&action=index">Administradores</a>
                <a class="dropdown-item" href="index.php?controller=receptionist&action=index">Recepcionistas</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      
      <div class="row">
        <div class="col">
          <?php
            include_once 'core/connection.php';
            $mysqli = new mysqli('localhost', 'root', '', 'hotel');
            require_once 'views/'.$currentView
          ?>
        </div>
      </div>
      <footer class="container-fluid backg1">
          Hotel <?php echo date("Y"); ?>
      </footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/popper.min.js"></script>
    </body>
</html>
