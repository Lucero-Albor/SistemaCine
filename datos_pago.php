<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StylePago.css">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="stylesheet" href="css/styleBarra.css">
    <title>Datos de pago</title>

    <style type="text/css">
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
        }
    </style>
</head>
<div class="loader"></div>
<body>
    <header style="display: flex; flex-wrap: wrap;">
        <div class="rectanguloNegro"></div>
        <div class="rectanguloRojo"></div>

        <div class="letrasBarra">
            <font face="Arial Narrow">
                <a class="letras1" style="color: white;" href="">Inicio</a>
                <a class="letras1" style="color: white;" href="">Promociones</a>
                <a class="letras1" style="color: white;" href="">Preventas</a>
                <a class="letras1" style="color: white;" href="">Futuros estrenos</a>
            </font>
        </div>
        
        <img class="logoCine" src="imagenes/Iconos/LogoCine.png" width="200px"alt="">

         <div class="imgUsuario">
            <a href="inicio_sesion.html">
                <img src="imagenes/Iconos/usuarioB.png" width="50px">
            </a>
        </div>

        <div style="margin-top: -100px;">
            <form action="" method="get">
                <input type="text" name="buscar" id="buscar">
                <input class="input" type="submit" value="Buscar">
            </form>
        </div>
    </header>
    
    <form method="POST">
        <div class="container">
            <div class="menu_pago">
                <div class="datos">
                    <font face="Arial Narrow">
                        <h1 class="tit" style="font-size: 40px;">Datos de pago</h1>
                    
                        <div class="titular">
                            <b style="font-size: 22px;">Nombre del titular</b><br>
                            <input type="text" placeholder="Juan Pérez" class="card" style="font-size: 16px;" id="nombre" name="nombre" required>
                        </div>
                    </font>

                    <div class="numeros">
                        <div class="num_num">
                            <font face="Arial Narrow">
                                <b style="font-size: 22px;">Número de tarjeta</b>
                            </font>
                            <font face="Century">
                                <input type="text" placeholder="1111-2222-3333-4444" class="card" name="card" style="font-size: 16px;" id="num_card" maxlength="16" required>
                            </font>
                        </div>
                        <div class="cvv_num">
                            <font face="Arial Narrow">
                                <b style="font-size: 22px;">CVV</b>
                            </font>
                            <font face="Century">
                                <input type="text" placeholder="123" style="font-size: 16px;" class="card" id="cvv" name="cvv" maxlength="3" required>
                            </font>
                        </div>
                    </div>

                    <font face="Arial Narrow"><b style="font-size: 22px;"> Fecha de expiración </b><br></font>
                    <font face="Century">
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
                        <input type="text" placeholder="2024" style="font-size: 16px;" class="card" id="anio" name="anio" maxlength="4" required>
                    </font>
                    <img class="tarjeta" src="imagenes/Iconos/tarjetas.png" alt="">
                    <button class="pagar" name="pagar" type="submit" style="font-size: 25px;">Realizar pago</button>
                </div>
            </div>
            
            <div class="detalles">
                <img class="cartelera" src="imagenes/Inicio/Poster(2).jpg" width="150px" height="220px">
                
                <div class="info">
                    <font face="Arial Narrow">
                        <h2 style="font-size: 30px;">Detalles</h2>
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
                        <h3 style="font-size: 30px;">$98.38 MXN</h3>    
                    </font>
                </div>
            </div>
        </div>
    </form>
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
    include'abrir_conexion.php';
    if(isset($_POST['pagar'])){
        $nombre = $_POST['nombre'];
        $card = $_POST['card'];
        $cvv = $_POST['cvv'];
        $fecha = $_POST['mes'];
        $anio = $_POST['anio'];

        $sql = "INSERT INTO datos_pago (titular, num_tarjeta, cvv, mes, anio)
                VALUES ('$nombre','$card','$cvv','$fecha','$anio')";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Registro correcto";
            header("Location: boletos.html");
        } 
    }
    else{
        echo "Error";
    }
?>