<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StyleHorario.css">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="stylesheet" href="css/styleBarra.css">
    <title>Selección de horarios</title>

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


    <!-- <header style="display: flex; flex-wrap: wrap;">
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
    </header> -->
    <!-- <nav class="barra">
        <ul>
            <img class="titulo" src="imagenes/Iconos/LogoCine.png" width="200px"alt="">
            <li><a href="#">Ayuda</a></li>
            <div class="imgUsuario">
                <a href="inicio_sesion.html">
                    <img src="imagenes/Iconos/usuarioB.png" width="50px">
                </a>
            </div>
        </ul>    
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Promociones</a></li>
            <li><a href="#">Preventas</a></li>
            <li><a href="#">Futuros estrenos</a></li>
        </ul>
    </nav> -->

    <div class="container">
        <div class="detalles">
            <div class="fechas">
                <font face="Arial Narrow"><h2 class="titulos">Fechas</h2></font>
                <font face="Century">
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
                    <h2 class="titulos">Películas</h2>
                    <input type="radio" name="peli" value="deadpool"><label for="deadpool" class="movie" style="font-size: 20px;">Deadpool & Wolverine</label><br>
                    <input type="radio" name="peli" value="shrek"> <label for="shrek" class="movie" style="font-size: 20px;">Shrek 2</label><br>
                    <input type="radio" name="peli" value="alien"> <label for="alien" class="movie" style="font-size: 20px;">Alien</label><br>
                    <input type="radio" name="peli" value="todas" checked> <label for="todas" class="movie" style="font-size: 20px;">Todas</label> 
                </font>
            </div>

            <div class="idioma">
                <font face="Arial Narrow">
                    <h2 class="titulos">Idiomas</h2>
                    <input type="radio" name="lenguaje" value="sub"> <label for="sub" class="leng" style="font-size: 20px;">Subtitulada</label><br>
                    <input type="radio" name="lenguaje" value="esp"> <label for="esp" class="leng" style="font-size: 20px;">Español</label><br>
                    <input type="radio" name="lenguaje" value="todas" checked> <label for="todas" class="leng" style="font-size: 20px;">Todas</label>
                </font>
            </div>
            
            <font face="Century">
                <center><button class="boton">Sigue con tu compra</button></center>
            </font>
        </div>

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
                    <font face="Arial Narrow">
                        <h1 class="nombre" name="nombre">
                            <?php
                                include'abrir_conexion.php';
                                $sql="SELECT * FROM carteleras";
                                $resultado=$conn->query($sql);
                            
                                if ($resultado){
                                    while($fila = $resultado-> fetch_assoc()){
                                        $nombres[] = htmlspecialchars($fila['nombre']);
                                    }
                                    echo($nombres[0]);
                                }
                            ?>
                        </h1>
                        <b>Español:</b>
                    </font>
                    <button class="hora">2:10 pm</button>
                    <button class="hora">3:00 pm</button>
                    <button class="hora">4:30 pm</button>
                    <button class="hora">5:50 pm</button>
                    <button class="hora">7:20 pm</button>
                    <br><br>
                    <font face="Arial Narrow"><b>Subtitulada:</b></font>
                    <button class="hora">1:15 pm</button>
                    <button class="hora">2:40 pm</button>
                    <button class="hora">5:30 pm</button>
                    <button class="hora">6:50 pm</button>   
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
                    <font face="Arial Narrow">
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
                    </h1>
                    <b>Español:</b></font>
                    <font face="Century">
                        <button class="hora">2:10 pm</button>
                        <button class="hora">3:00 pm</button>
                        <button class="hora">4:30 pm</button>
                        <button class="hora">5:50 pm</button>
                        <button class="hora">7:20 pm</button>
                    </font>
                    
                    <br><br>
                    <font face="Arial Narrow"><b>Subtitulada:</b></font>
                    <font face="Century">
                        <button class="hora">1:15 pm</button>
                        <button class="hora">2:40 pm</button>
                        <button class="hora">5:30 pm</button>
                        <button class="hora">6:50 pm</button> 
                    </font>
                    
                </div>     
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

