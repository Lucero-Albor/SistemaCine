<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <title>Imagenes Cartelera</title>
</head>
<body>
  <h5>Imagenes cartelera</h5>
  
<?php
    if(isset($_POST ['btnEnviar'])){
        if($_FILES['foto']['name']){
            $sizeFile=$_FILES['foto']['size'];

            $subidaImagen= fopen($_FILES['foto']['tmp_name'], "r");
            $imagenBinaria= fread($subidaImagen,$sizeFile);
            $conexion= new mysqli("localhost","root","","theZine");
            $imagenBinaria=mysqli_escape_string($conexion, $imagenBinaria);
            $sql="INSERT INTO carteleras(image) VALUES ('".$imagenBinaria."')";

            $resultado=$conexion->query ($sql);
            if($resultado){
?>
    <h5>Imagen subida de manera exitosa</h5>
    <a href="" class="btn btn-primary">Ver imagenes</a>

<?php      
             }else {
?>
    <h5>Algo salió mal</h5>
<?php
            }
        }
    }
    
?>

<?php
        $conexion= new mysqli ("localhost", "root","", "theZine");
        if ($conexion){
            $sql="SELECT * FROM carteleras";
            $resultado=$conexion->query($sql);

            if ($resultado){
                while($fila=$resultado-> fetch_assoc()){
                    echo '<img src="data:'.';base64,'.base64_encode($fila['foto']).'"></img>';;

                }
                echo "";
                
            }
        }
    
    ?>

</div>
</body>
</html>