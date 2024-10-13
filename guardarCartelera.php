<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <title>Cartelera</title>
</head>
<body>
<br><br>
    <center>
    <h5>Cartelera</h5>
  
  <?php
      if(isset($_POST['btnEnviar'])){
          if(isset($_POST['nombre'], $_POST['idioma'], $_FILES['foto'])){
              $nombre = $_POST['nombre'];
              $idioma = $_POST['idioma'];
              $foto = $_FILES['foto'];
  
              $sizeFile = $foto['size'];
              $subidaImagen = fopen($foto['tmp_name'], 'r');
              $imagenBinaria = fread($subidaImagen, $sizeFile);
              fclose($subidaImagen);
  
              $conexion= new mysqli("localhost","root","","thezine");
  
              $imagenBinaria=mysqli_escape_string($conexion, $imagenBinaria);
              $sql = "INSERT INTO carteleras (nombre, idioma, foto) VALUES ('$nombre', '$idioma', '$imagenBinaria')";
  
              $resultado=$conexion->query ($sql);
              if($resultado){
  ?>
       <h5>Imagen subida de manera exitosa</h5>
      <table>
      <thead>
          <td>Nombre</td>
          <td>Idioma</td>
          <td>Foto</td>
          </thead>
  
      <?php
          $conexion= new mysqli ("localhost", "root","", "thezine");
          if ($conexion){
              $sql="SELECT * FROM carteleras";
              $resultado=$conexion->query($sql);
  
              if ($resultado){
                  while($fila=$resultado-> fetch_assoc()){
                      echo "<tr>";
                      echo "<td>".$fila['nombre']."</td>";
                      echo "<td>".$fila['idioma']."</td>";
                      echo '<td><img src="data:'.';base64,'.base64_encode($fila['foto']).'"></img> </td>';;
  
                  }
                  echo "";
                  
              }
          }
      
      ?>
  
      <tbody>
      </table>
  <?php      
               }else {
  ?>
      <h5>Algo salió mal</h5>
  <?php
              }
          }
      }
      
  ?>
    </center>
  
</body>
</html>