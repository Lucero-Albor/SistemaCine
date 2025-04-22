<?php
include'abrir_conexion.php';

//mandar datos a bd asientos
if(isset($_POST['submit'])){
    $datas=$_POST['data'];

    $allData=implode(",",$datas);
    //echo $allData;

    $sql="insert into `asientos` (num_asiento,sala,estatus)
     values('$allData','sala 1', 'ocupado')";

   $result = mysqli_query($conn, $sql);
    
    if($result){
        echo "se registro con exito";
    } 
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Asientos</title>
    <link rel="stylesheet" href="css/style_sala.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <!-- <style type="text/css">
        .loader{
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url("./imagenes/Iconos/alien.gif") 50% 50% no-repeat rgb(249,249,249);
        }
        .loader::before{
            position: fixed;
            left: 50%;
            top: 50%;
        }
        @keyframes hide {
            0%{
                opacity: 1;
            }
            100%{
                opacity: 0;
            }
        } -->



    </style>
</head>
<div class="loader"></div>

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
    <nav style="background-color:#BA1C3F;" class="navbar navbar-expand-lg bg-body-tertiary">
    </nav>
    
    <div class="container">

    <center>
        <div class="asientos">
            <center>
            <div class="pantalla">
                Pantalla
            </div>
        
        <div class="Filas">
            <li>A</li>
            <li>B</li>
            <li>C</li>
            <li>D</li>
            <li>E</li>
            <li>F</li>
            <li>G</li>
            <li>H</li>
            
        </div>
        <div id="butacas" class="sillas">
            <form method="post" >
            <div >
                <input type="checkbox" name="data[]" value="A1" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="A2" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="A3" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="A4" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="A5" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="A6" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="A7" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="A8" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                </div>
            <div>
                <input type="checkbox" name="data[]" value="B1" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="B2" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="B3" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="B4" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="B5" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="B6" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="B7" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="B8" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                
           </div>
           <div >
                <input type="checkbox" name="data[]" value="C1" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="C2" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="C3" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="C4" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="C5" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="C6" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="C7" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="C8" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
               
            </div>
            <div >
                <input type="checkbox" name="data[]" value="D1" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="D2" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="D3" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="D4" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="D5" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="D6" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="D7" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="D8" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                
            </div>
            <div >
                <input type="checkbox" name="data[]" value="E1" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="E2" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="E3" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="E4" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="E5" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="E6" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="E7" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="E8" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                
            </div>
            <div >
                <input type="checkbox" name="data[]" value="F1" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="F2" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="F3" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="F4" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="F5" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="F6" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="F7" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="F8" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                
                </div>
             <div >
                <input type="checkbox" name="data[]" value="G1" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="G2" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="G3" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="G4" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="G5" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="G6" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="G7" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="G8" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>

            </div>    
            <div >
                
                <input type="checkbox" name="data[]" value="H1" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="H2" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="H3" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="H4" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="H5" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="H6" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="H7" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="H8" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
    
               </div>
            
        </center>
        <div class="cupo">
            <img src="imagenes/Iconos/colorRojo.png" alt=""> Asiento libre
            &nbsp;&nbsp;&nbsp;
            <!-- <li style="list-style: url('imagenes/Iconos/colorRojo.png');" >Asiento libre </li> -->
            <!-- <li style="list-style: url('imagenes/Iconos/colorOpaco.png');">Asiento ocupado</li> -->
            <img src="imagenes/Iconos/colorOpaco.png" alt=""> Asiento ocupado
        </div>
        <!-- <button name="submit" type="submit">Guardar</button> -->
       </form>
        </div>


        <div class="container2">
            <div class="cartel">
                <center>
                    <font face="impact">
                    <h2 style="color:#000000; ">Deadpool y Wolverine</h2>
                    </font>
                
                <img src="imagenes/Inicio/Poster(2).jpg"  width="180">
                
                <font face="arial narrow">
                <div class="infoPelicula">
                    <p style="color:#817c7c; font-size: 24px"><b>Español</b></p>
                    <p style="color:#817c7c; font-size: 18px;"><b>Plaza el parque</b></p>
                    <p style="color:#817c7c; font-size: 18px;"><b>Lunes 4 de enero</b></p>
                    <p style="color:#817c7c; font-size: 18px;"><b>4:30 pm</b></p>
                    <p style="color:#817c7c; font-size: 18px;"><b>Sala 1</b></p>

                    <a href="datos_pago.php">
                        <button>Pago</button>
                    </a>
                </div>
                </font>
                </center>
        </div>
        </div>
        </div>
    </center>
    </div>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js "> </script>
    <script>
        $(window).load(function(){
            $(".loader").fadeOut("slow");
        })
    </script>
   
</html>