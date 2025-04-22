<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StylePago.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <title>Datos de pago</title>

    <!-- <style type="text/css">
        .loader{
            position: fixed;
            left: 0px; 
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('imagenes/Iconos/shrek.gif') 50% 50% no-repeat rgb(249, 249, 249);
        }

        .loader:before{
            position: fixed;
            left: 45.5%;
            top: 60%;
        }

        /* Evento clave para ejecutarlo de acuerdo a la acción que se realiza */
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
    
    <div>
    <form method="POST">
        <div class="container">
            <div class="menu_pago">
                <div class="datos">
                    <font face="Century gothic">
                        <h1 class="tit" style="font-size: 40px;"><b>Datos de pago</b></h1>
                    
                        <div class="titular">
                            <b style="font-size: 22px;">Nombre del titular</b><br>
                            <input type="text" placeholder="Juan Pérez" class="card" style="font-size: 16px;" id="nombre" name="nombre" required>
                        </div>
                    </font>

                    <div class="numeros">
                        <div class="num_num">
                            <font face="century gothic">
                                <b style="font-size: 22px;">Número de tarjeta</b>
                            </font>
                            <font face="Century gothic">
                                <input type="text" placeholder="1111-2222-3333-4444" class="card" name="card" style="font-size: 16px;" id="num_card" maxlength="16" required>
                            </font>
                        </div>
                        <div class="cvv_num">
                            <font face="century gothic">
                                <b style="font-size: 22px;">CVV</b>
                            </font>
                            <font face="Century gothic">
                                <input type="text" placeholder="123" style="font-size: 16px;" class="card" id="cvv" name="cvv" maxlength="3" required>
                            </font>
                        </div>
                    </div>

                    <font face="Century gothic"><b style="font-size: 22px;"> Fecha de expiración </b><br></font>
                    
                    <div>
                    <font face="Century gothic">
                        <select name="mes" style="font-size: 16px;" class="card" required> 
                            <option>-- Mes --</option>
                            <option>Enero</option>
                            <option>Febrero</option>
                            <option>Marzo</option>
                            <option>Abril</option>
                            <option>Mayo</option>
                            <option>Junio</option>
                            <option>Julio</option>
                            <option>Agosto</option>
                            <option>Septiembre</option>
                            <option>Octubre</option>
                            <option>Noviembre</option>
                            <option>Diciembre</option>
                        </select>
                        </div>

                        <div class="card2">
                        <input type="text" placeholder="2024" style="font-size: 16px;" class="card" id="anio" name="anio" maxlength="4" required>
                        </div>
                        
                    </font>
                    <img class="tarjeta" src="imagenes/Iconos/tarjetas.png" alt="">

                    
                        <button class="pagar" name="pagar"  style="font-size: 25px;"><a style="color:white" href="qr.php">Realizar pago</a></button>
                    
                </div>

            </div>
            
            <div class="detalles">
                <img class="cartelera" src="imagenes/Inicio/Poster(2).jpg" width="150px" height="220px">
                <div class="tituloDetalle">
                    <font face="arial narrow">
                    <h2 style="font-size: 30px;">Detalles</h2>
                    </font>
                </div>

                <div class="info">
                    <font face="Arial Narrow">
                    <span style="font-size: 28px;">Deadpool y Wolverine</span><br>
                        <span style="font-size: 20px;">Lugar: Altacia</span><br>
                        <span style="font-size: 20px;">Fecha: Lunes 4 de enero</span><br>
                        <span style="font-size: 20px;">Hora: 4:30 pm</span><br>
                        <span style="font-size: 20px;">Sala: 007</span><br>
                        <span style="font-size: 20px;">Idioma: Español</span><br>
                    </font>
                </div>

                <div class="total">
                    <font face="Arial Narrow">
                        <h2 style="font-size: 30px;">Total a pagar</h2>
                        <h3 style="font-size: 30px; color:#F43B45">$98.38 MXN</h3>    
                    </font>
                </div>
            </div>
        </div>
    </form>
    </div>
    
    <!-- <font face="Arial Narrow">
        <h1 class="tit" style="font-size: 40px;">Datos de pago</h1>
    
        <div class="datos">
            <p style="font-size: 18px;">Nombre del titular</p>
            <input type="text" placeholder="Pepe Papas" class="card" style="font-size: 16px;">
        </div>

        <div class="datos">
            <p style="font-size: 18px;">Número de tarjeta</p>
            <input type="number" placeholder="1111-2222-3333-4444" class="card" style="font-size: 16px;"> 
            <input type="text" placeholder="123" style="font-size: 16px;" class="cvv">
        </div>
        
        <div class="datos">
            <p style="font-size: 18px;"> Fecha de expiración </p>
            <select name="mes" style="font-size: 16px;">
                <option>-- Mes --</option>
                <option>Enero</option>
                <option>Febrero</option>
                <option>Marzo</option>
                <option>Abril</option>
                <option>Mayo</option>
                <option>Junio</option>
                <option>Julio</option>
                <option>Agosto</option>
                <option>Septiembre</option>
                <option>Octubre</option>
                <option>Noviembre</option>
                <option>Diciembre</option>
            </select>
            <input type="number" placeholder="2024" style="font-size: 16px;" class="anio">
        </div>
    </font>
    
    <div class="datos">
        <img class="tarjeta" src="imagenes/Iconos/tarjetas.png" alt="">
    </div>

    <font face="Century Gothic">
        <button class="pagar" style="font-size: 25px;">Realizar pago</button>
    </font>

    <div class="pelicula">
        <div class="info">
            <img class="cartelera" src="imagenes/Inicio/Poster(2).jpg" width="150px"alt="">
        </div>    

        <div class="dato">
            <font face="Arial Narrow">
                <h2 style="font-size: 30px;">Detalles</h2>
                <span>Lugar: Altacia</span><br>
                <span>Fecha: Lunes 4 de enero</span><br>
                <span>Hora: 4:30 pm</span><br>
                <span>Sala: 007</span><br>
                <span>Idioma: Español</span><br>
            </font>
        </div>
        
        <center>
            <div class="total">
                <font face="Arial Narrow">
                    <h2 style="font-size: 30px;">Total a pagar</h2>
                    <h3 style="font-size: 30px;">$98.38 MXN</h3>    
                </font>
            </div>
        </center>
        
    </div> -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    // Todo lo que carga, ejecuta una acción
    $(window).load(function(){
        $(".loader").fadeOut("slow");
    })
</script>
</html>

<?php
    // include'abrir_conexion.php';
    // if(isset($_POST['pagar'])){
    //     $nombre = $_POST['nombre'];
    //     $card = $_POST['card'];
    //     $cvv = $_POST['cvv'];
    //     $fecha = $_POST['mes'];
    //     $anio = $_POST['anio'];

    //     $sql = "INSERT INTO datos_pago (titular, num_tarjeta, cvv, mes, anio)
    //             VALUES ('$nombre','$card','$cvv','$fecha','$anio')";

    //     $result = mysqli_query($conn, $sql);

    //     if($result){
    //         echo "Registro correcto";
    //         header("Location: boletos.html");
    //     } 
    // }
    // else{
    //     echo "Error";
    // }
?>