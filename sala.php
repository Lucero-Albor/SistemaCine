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
    <link rel="stylesheet" href="css/styleBarra.css">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="stylesheet" href="css/style_sala.css">

    <style type="text/css">
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
        }



    </style>
</head>
<div class="loader"></div>

<body>
    <div class="container">
       
    <header style="display: flex; flex-wrap: wrap;">
        <div class="rectanguloNegro"></div>
        <div class="rectanguloRojo"></div>

        <div class="letrasBarra">
            <font face="Arial Narrow">
                <a class="letras1"  href="">Inicio</a>
                <a class="letras1"  href="">Promociones</a>
                <a class="letras1"  href="">Preventas</a>
                <a class="letras1"  href="">Futuros estrenos</a>
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
                <input type="checkbox" name="data[]" value="A9" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="A10" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
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
                <input type="checkbox" name="data[]" value="B9" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="B10" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
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
                <input type="checkbox" name="data[]" value="C9" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="C10" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
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
                <input type="checkbox" name="data[]" value="D9" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="D10" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
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
                <input type="checkbox" name="data[]" value="E9" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="E10" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
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
                <input type="checkbox" name="data[]" value="F9" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="F10" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                
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
                <input type="checkbox" name="data[]" value="G9" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="G10" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>

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
                <input type="checkbox" name="data[]" value="H9" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
                <input type="checkbox" name="data[]" value="H10" class="img-mover"><img src="imagenes/Iconos/silla.png" width="40px"alt=""></input>
               </div>
            
        </center>
        <div class="cupo">
            <li style="list-style: url('imagenes/Iconos/colorRojo.png');" >Asiento libre </li>
            <li style="list-style: url('imagenes/Iconos/colorOpaco.png');">Asiento ocupado</li>
        </div>
        <button name="submit" type="submit">Guardar</button>
       </form>
        </div>


        <div class="container2">
            <div class="cartel">
                <center>
                <h2 style="color:#000000; ">Deadpool and Wolverine</h2>
                <img src="imagenes/Inicio/Poster(2).jpg"  width="200">
                
                <p style="color:#625D5D;">Español</p>
                <p style="color:#625D5D;">Plaza el parque</p>
                <p style="color:#625D5D;">Lunes 4 de enero</p>
                <p style="color:#625D5D;">4:30 pm</p>
                <p style="color:#625D5D;">Sala 1</p>

                <button><a href="datos_pago.html">Pago</a></button>
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