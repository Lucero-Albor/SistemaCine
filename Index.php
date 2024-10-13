<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="stylesheet" href="css/styleBarra.css">
    <link rel="stylesheet" href="manifest.json">
    <title>Inicio</title>

    <style type="text/css">
        .loader{
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('./imagenes/Iconos/deadpool.gif')50% 50% no-repeat rgb(249, 249, 249);
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
        }
    </style>
</head>
    <div class="loader"></div>

<body class="container">

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
        
        <img class="logoCine" src="imagenes/Iconos/LogoCine.png" width="200px" alt="">

        <div class="imgUsuario">
            <a href="inicio_sesion.html">
                <img src="imagenes/Iconos/usuarioB.png" width="50px" alt="">
            </a>
        </div>

        <div style="margin-top: -100px;">
            <form action="" method="get">
                <input type="text" name="buscar" id="buscar">
                <input class="input" type="submit" value="Buscar">
            </form>
        </div>
    </header>

    <nav>
        <div>
            <font face="Century Gothic">
                <ul class="menu-horizontal">
                    <li>
                        <a href="#"><b>Seleccione su ciudad</b></a>
                        <ul class="menu-vertical">
                            <li><a href="#">Guanajuato</a></li>
                            <li><a href="#">León</a></li>
                            <li><a href="#">Silao</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><b>Seleccione su cine</b></a>
                        <ul class="menu-vertical">
                            <li><a href="#">Alaia</a></li>
                            <li><a href="#">Altacia</a></li>
                            <li><a href="#">La joya</a></li>
                        </ul>
                    </li>
                </ul>
            </font>
        </div>
    </nav>

    <article>
        <div>
            <img class="banner" src="imagenes/Inicio/Banner.jpg" width="1220" alt="">
        </div>

        <div class="textoBanner">
            <div class="tituloBanner">
                <font face="Impact">
                    <p>Deadpool y Wolverine</p>
                </font>
                <img class="imgPoster1" src="imagenes/Inicio/Poster(2).jpg" width="220" alt="">
            </div>

            <div class="sinopsisBanner">
                <font face="Arial Narrow">
                    <p>Un apático Wade Wilson se esfuerza por adaptarse a la vida civil. Sus días como el mercenario moralmente flexible, Deadpool, han quedado atrás. Cuando su mundo se enfrenta a una amenaza existencial, reaciamente Wade debe ponerse el traje de nuevo.</p>
                </font>

                <button class="btnTrailer">Tráiler</button>
                <a href="horarios.html">
                    <button class="btnComprar">Compra tus boletos</button>
                </a>
            </div>
        </div>

        <div class="cartelera">
            <?php
                $conexion = new mysqli("localhost", "root", "", "thezine");
                
                if ($conexion->connect_error) {
                    die("Conexión fallida: " . $conexion->connect_error);
                }
                $sql = "SELECT foto FROM carteleras";
                $resultado = $conexion->query($sql);

                if ($resultado && $resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        echo '<img class="imgPoster2" src="data:image/jpeg;base64,' . base64_encode($fila['foto']) . '" width="220" height="330px" alt="Cartelera">';
                    }
                } else {
                    echo "";
                }
                $conexion->close();
            ?>
        </div>

        <div>
            <img class="publicidad1" src="imagenes/Inicio/Publicidad(1).jpg" width="1000" alt="">
        </div>
    </article>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    $(window).load(function(){
        $(".loader").fadeOut("slow");
    });
</script>
</html>
