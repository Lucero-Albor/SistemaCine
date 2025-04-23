<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="manifest.json">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="icon" href="imagenes/Iconos/icono64.png">
    <link rel="manifest" href="manifest.json">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <title>Inicio</title>
</head>
<body>

  <!-- Barra superior -->
  <nav style="background-color:#000000;" class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        
        <font face="Arial Narrow">
        <a class="navbar-brand"  href="index.php">
        <img src="imagenes/Iconos/LogoCine.png" width="130px">&nbsp;&nbsp;
        </a>
        </font>
        
        <div  style=""  class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
          <li class="nav-item">
            <a class="nav-link active" style="color: white; font-size: 18px;" aria-current="page" href="#">Promociones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white; font-size: 18px;" href="#">Alimentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white; font-size: 18px;" href="#">Futuros estrenos</a>
          </li>
          <li class="nav-item dropdown tramite">
              <a class="nav-link dropdown-toggle " style="color: white; font-size: 18px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Más
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="">Contacto</a></li>
                <li><a class="dropdown-item" href="">Eventos</a></li>
                
            </ul>
            </li>
        </ul>  
          <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar"aria-label="Search">
              <button class="btn btn-danger" type="submit">Buscar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </form>

          <a class="iniciaSesion" href="login/inicio_sesion.html">
          <img src="imagenes/Iconos/usuarioB.png" width="50px" alt="">
          </a>&nbsp;&nbsp;&nbsp;
        </div>
      </div>
      
    </nav>

    <!-- Barra roja -->
    <nav style="background-color:#BA1C3F;" class="navbar navbar-expand-lg bg-body-tertiary">
    </nav>

  <!-- Carrusel de imagenes -->
    <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenes/Inicio/carrusel (1).jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <font face="Arial Narrow">
          <h1><b>Deadpool y Wolverine</b></h1>
          <h4>Deadpool viaja en el tiempo con la intención de reclutar a Wolverine en la batalla contra un enemigo común: Paradox.</h4>
          <div class="btnComprar">
            <a href="login/inicio_sesion.html">
              <button style="font-size: 20px" class="btn rojo">Comprar boletos</button>
              </a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="imagenes/Inicio/carrusel (2).jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1><b>Alien Romulus</b></h1>
          <h4>Un grupo de colonos espaciales se enfrenta a la criatura más aterradora del universo en una nave espacial abandonada.</h4>
          <div class="btnComprar">
            <a href="login/inicio_sesion.html">
              <button style="font-size: 20px" class="btn rojo">Comprar boletos</button>
              </a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="imagenes/Inicio/carrusel (3).jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1><b>Beetlejuice</b></h1>
          <h4>Una pareja que acaba de morir contrata a un fantasma vulgar para asustar a los nuevos ocupantes de su casa.</h4>
          <div class="btnComprar">
          <div class="btnComprar">
            <a href="login/inicio_sesion.html">
              <button style="font-size: 20px" class="btn rojo">Comprar boletos</button>
              </a>
          </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="imagenes/Inicio/carrusel (1).jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1><b>Deadpool y Wolverine</b></h1>
          <h4>Deadpool viaja en el tiempo con la intención de reclutar a Wolverine en la batalla contra un enemigo común: Paradox.</h4>
          <div class="btnComprar">
            <a href="login/inicio_sesion.html">
              <button style="font-size: 20px" class="btn rojo">Comprar boletos</button>
              </a>
          </div>
        </div>
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </font>
    </button>
  </div>
<br>


<!-- CARTELERA -->
  <div class="letrasCartelera">
    <font face="Impact">
    <h1 style="Font-size: 60px">CARTELERA</h1>
    </font>
    
  </div>
  <div>
    <center>
      <br>
    <?php
                $conexion = new mysqli("localhost", "root", "", "thezine");
                
                if ($conexion->connect_error) {
                    die("Conexión fallida: " . $conexion->connect_error);
                }
                $sql = "SELECT foto FROM carteleras";
                $resultado = $conexion->query($sql);

                if ($resultado && $resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        echo '<a href="horarios2.php">
                        <img class="imgPoster2 imagenFileteado" src="data:image/jpeg;base64,' . base64_encode($fila['foto']) . '" width="220" height="330px" >
                        </a>';
                    }
                } else {
                    echo "";
                }
                $conexion->close();
            ?>
    </center>
  </div>
  
    <!-- Carrusel publicidad -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade publicidad1 carruselPublicidad" >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagenes/Inicio/Publicidad (3).jpg"class="d-block w-100"  alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagenes/Inicio/promo1.jpg" class="d-block w-100" alt="...">
        </div>
      </div>

      <div class="publicidad2">
            <img  src="imagenes/Inicio/Publicidad(1).jpg" width="980" alt="">
        </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      

  </div>

        
</body>
</html>