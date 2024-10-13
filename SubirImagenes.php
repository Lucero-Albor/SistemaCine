<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <title>Subir poster</title>
</head>
<body>

<div class="mb-3">
  <label for="formFile" class="form-label">Selecciona las imágenes de la cartelera</label>
  <br>
  <label for="formFile" class="form-label">El tamaño de imagen debe ser menor a 1MB</label>
  <br>
    <form action="guardarImagen.php" method="POST" enctype="multipart/form-data">
        <input class="form-control" type="file" name="foto" accept="imagen/*" id="formFile">
            <!-- <input type="file" name="foto" accept="imagen/*"> -->
            <button type="submit" name="btnEnviar" class="btn btn-danger">Subir</button>
            <!-- <input type="submit" name="btnEnviar"> -->
            <br>
        </form>
  
   


   
</div>
    
</body>
</html>