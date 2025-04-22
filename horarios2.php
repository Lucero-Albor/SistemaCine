<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/StyleHorario.css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <title>Horarios</title>
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
        
          <a class="iniciaSesion" href="login/inicio_sesion.html">
          <img src="imagenes/Iconos/usuarioB.png" width="50px" alt="">
          </a>&nbsp;&nbsp;
        </div>
      </div>
      
    </nav>

    <!-- Peliculas -->
    <div class="menu">
    <div class="info">
        <div class="fotos">
                <?php
                    include'abrir_conexion.php';
                    $sql="SELECT * FROM carteleras";
                    $resultado=$conn->query($sql);

                    if ($resultado){
                        while($fila = $resultado-> fetch_assoc()){
                            $foto[] = base64_encode($fila['foto']);
                        }
                        echo '<img class="cartelera" name = "cartelera" src="data:'.';base64,'.$foto[0].'" width="150px"alt="">';
                    }
                ?>
                    <!-- <img class="cartelera" name="cartelera" src="imagenes/Inicio/Poster(2).jpg" width="150px"alt=""> -->
        </div>

        <div class="horarios">
            <font face="Impact">
                <h1 class="nombre" name="nombre">
                     <?php
                        include'abrir_conexion.php';
                         $sql="SELECT * FROM carteleras";
                        $resultado=$conn->query($sql);
                            
                            if ($resultado){
                                
                                while($fila = $resultado-> fetch_assoc()){
                                     $nombres[] = htmlspecialchars($fila['nombre']);
                                        }
                                    echo ($nombres[0]);
                                }
                            ?>
                        </h1>
            </font>
               <div style="font-size:20px">     
            <font face="arial narrow">
                <b>Español:</b>
                <button class="hora">2:10 pm</button>
                <button class="hora">3:00 pm</button>
                <button class="hora">4:30 pm</button>
                <button class="hora">5:50 pm</button>
                <button class="hora">7:20 pm</button>
                <br><br>

                <b>Subtitulada:</b>
                <button class="hora">1:15 pm</button>
                <button class="hora">2:40 pm</button>
                <button class="hora">5:30 pm</button>
                <button class="hora">6:50 pm</button>  
            </font> 
            </div>
        </div>
    </div>
    

            <div class="info">
                <div class="fotos">
                    <?php
                        include'abrir_conexion.php';
                        $sql="SELECT * FROM carteleras";
                        $resultado=$conn->query($sql);

                        if ($resultado){
                            while($fila = $resultado-> fetch_assoc()){
                                $foto[] = base64_encode($fila['foto']);
                            }
                            echo '<img class="cartelera" name = "cartelera" src="data:'.';base64,'.$foto[1].'" width="150px"alt="">';
                        }
                    ?>
                </div>

                <div class="horarios">
                    
                <font face="Impact">
                    <h1 class="nombre" name = "nombre">
                        <?php
                            include'abrir_conexion.php';
                            $sql="SELECT * FROM carteleras";
                            $resultado=$conn->query($sql);

                            if ($resultado){
                                while($fila = $resultado-> fetch_assoc()){
                                    $nombres[] = htmlspecialchars($fila['nombre']);
                                }
                                echo($nombres[1]);
                            }
                        ?>
                        
                </font>
                    </h1>
                <div style="font-size:20px">
                <font face="arial narrow">
                    <b>Español:</b>
                        <button class="hora">2:10 pm</button>
                        <button class="hora">3:00 pm</button>
                        <button class="hora">4:30 pm</button>
                        <button class="hora">5:50 pm</button>
                        <button class="hora">7:20 pm</button>
                    <br><br>
                    <b>Subtitulada:</b>
                        <button class="hora">1:15 pm</button>
                        <button class="hora">2:40 pm</button>
                        <button class="hora">5:30 pm</button>
                        <button class="hora">6:50 pm</button> 
                    </font>
                    </div>
                </div>     
            </div>
</div>

    <!-- Barra roja -->
    <!-- <nav style="background-color:#BA1C3F;" class="navbar navbar-expand-lg bg-body-tertiary">
    </nav> -->



<!-- HORARIOS -->
 <div class="container">

        <div class="detalles">

            <div class="fechas">
                <font face="Arial Narrow"><h2 class="titulos"><b>Fechas</b></h2></font>
                <font face="Arial Narrow">
                    <button class="fecha">Mañana</button>
                    <button class="fecha">Vie 1 ene.</button><br>
                    <button class="fecha">Sáb 2 ene.</button>
                    <button class="fecha">Dom 3 ene.</button><br>
                    <button class="fecha">Lun 4 ene.</button>
                    <button class="fecha">Mar 5 ene.</button>
                </font>
            </div>

            <div class="movies">
                <font face="Arial Narrow">
                    <h2 class="titulos"><b>Películas</b></h2>
                    <input type="radio" name="peli" value="deadpool"><label for="deadpool" class="movie" style="font-size: 20px;">Deadpool & Wolverine</label><br>
                    <input type="radio" name="peli" value="shrek"> <label for="shrek" class="movie" style="font-size: 20px;">Shrek 2</label><br>
                    <input type="radio" name="peli" value="alien"> <label for="alien" class="movie" style="font-size: 20px;">Alien</label><br>
                    <input type="radio" name="peli" value="todas" checked> <label for="todas" class="movie" style="font-size: 20px;">Todas</label> 
                </font>
            </div>

            <div class="idioma">
                <font face="Arial Narrow">
                    <h2 class="titulos"><b>Idiomas</b></h2>
                    <input type="radio" name="lenguaje" value="sub"> <label for="sub" class="leng" style="font-size: 20px;">Subtitulada</label><br>
                    <input type="radio" name="lenguaje" value="esp"> <label for="esp" class="leng" style="font-size: 20px;">Español</label><br>
                    <input type="radio" name="lenguaje" value="todas" checked> <label for="todas" class="leng" style="font-size: 20px;">Todas</label>
                </font>
            </div>
            
            <font face="Arial narrow">
                <a href="sala.php">
                <center><button class="boton"><b>Sigue con tu compra</b></button></center>
                </a>
            </font>
        </div>   
</div>
</div>

    
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    // Todo lo que carga, ejecuta una acción
    $(window).load(function(){
        $(".loader").fadeOut("slow");
    })
</script>
</html>