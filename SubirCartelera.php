<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <title>Subir cartelera</title>
</head>
<body background="imagenes/Fondos/FondoSubirC.jpg" style="background-repeat: no-repeat;  background-position: center; background-attachment: fixed; background-size: 100% 100%;">
    <div style="padding-left: 150px; padding-right: 150px;">
        <center>
            <br><br><br>
            <h1>Datos cartelera</h1>
            <br><br>
        <form action="guardarCartelera.php" method="POST" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text"  name="nombre" class="form-control" id="floatingInput" placeholder="Nombre">
            <label for="floatingInput">Nombre de la película</label>
        </div>

        <div class="form-floating">
            <input type="text" name="idioma" class="form-control" id="floatingPassword" placeholder="Español/Subtitulada">
            <label for="floatingPassword">Idioma de la película</label>
        </div>
            <br>
        <div class="mb-3">
            <label for="formFile" class="form-label">Selecciona la imagen de la cartelera (1MB)</label>
            <br>
            <input type="file" name="foto" class="form-control"  id="formFile">
        </div>
        <button type="submit" name="btnEnviar" class="btn btn-danger">Guardar</button>
    </form>
        </center>
    </div>
    
</body>
</html>