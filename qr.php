<?php
include 'abrir_conexion.php';

$id_boleto = 1; 

$sql = "
    SELECT id_boleto, fecha, horario, total FROM boletos WHERE id_boleto = $id_boleto;
    SELECT num_asiento FROM asientos WHERE id_boleto = $id_boleto;
    SELECT nombre, idioma FROM carteleras WHERE id_cartelera = (SELECT id_cartelera FROM boletos WHERE id_boleto = $id_boleto);
    SELECT descripcion FROM cupones WHERE id_cupon = (SELECT id_cupon FROM boletos WHERE id_boleto = $id_boleto);
";

$fecha = $horario = $total = "";
$asientos = [];
$nombre = $idioma = "";

if (mysqli_multi_query($conn, $sql)) {
    // boletos
    if ($result = mysqli_store_result($conn)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $fecha = $row['fecha'];
            $horario = $row['horario'];
            $total = $row['total'];
        }
        mysqli_free_result($result);
    }

    // asientos
    if (mysqli_next_result($conn)) {
        if ($result = mysqli_store_result($conn)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $asientos[] = $row['num_asiento'];
            }
            mysqli_free_result($result);
        }
    }

    // carteleras
    if (mysqli_next_result($conn)) {
        if ($result = mysqli_store_result($conn)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $nombre = $row['nombre'];
                $idioma = $row['idioma'];
            }
            mysqli_free_result($result);
        }
    }
    
    // cupones
    if (mysqli_next_result($conn)) {
        if ($result = mysqli_store_result($conn)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $descripcion = $row['descripcion'];
            }
            mysqli_free_result($result);
        }
    }
} else {
    echo "Error en la consulta: " . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletos</title>
    <link rel="stylesheet" href="./css/styleqr.css">
    <style type="text/css">
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url("./200w.gif") 50% 50% no-repeat rgb(249,247,249);
        }
        .loader:before {
            position: fixed;
            left: 50%;
            top: 60%;
        }
        @keyframes hide {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="rectanguloNegro"></div>
        <div class="rectanguloRojo">
            <nav>
                <ul class="menu-horizontal">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Promociones</a></li>
                    <li><a href="">Preventas</a></li>
                    <li><a href="">Futuros Estrenos</a></li>
                </ul>
            </nav>
        </div>
        <img class="titulo" src="imagenes/Iconos/LogoCine.png" width="200px" alt="">
        <div class="imgUsuario">
            <a href="login/inicio_sesion.html">
                <img src="imagenes/Iconos/usuarioB.png" width="50px">
            </a>
        </div>
    </header>

    <div class="content">
        <div class="contenedor">
            <img class="imagen-poster" src="imagenes/Inicio/Poster(2).jpg" alt="Imagen Izquierda">
            <div class="texto">
                <p>
                    Código de compra:<br/> <?php echo $id_boleto; ?><br/><br/>
                    Fecha:<br/> <?php echo $fecha; ?> Hora: <?php echo $horario; ?><br/><br/>
                    Asientos:<br/> <?php echo implode(', ', $asientos); ?><br/><br/>
                    Tus boletos:<br/> <?php echo $nombre; ?> (<?php echo $idioma; ?>)<br/><br/>
                    Cupón:<br/> <?php echo $descripcion; ?><br/><br/>
                    Total pagado:<br/> <?php echo $total; ?><br/><br/>
                </p>
            </div>
            <div class="lado-derecho">
                <img class="imagen-logo" src="imagenes/Iconos/LogoCine.png" alt="Imagen Superior Derecha">
                <p>Código de compra</p>
                <img class="imagen-qr" src="imagenes/qr/qr.jpg" alt="Imagen Inferior Derecha">
                <button>Descargar</button>
            </div>
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
</script>
</html>
