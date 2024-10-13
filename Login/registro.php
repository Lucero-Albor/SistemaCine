<?php
// credenciales para el acceso correcto a la BD
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "thezine"; 

//Inicia la conexión a la BD
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verifica si los datos se estan enviando correctamente
if (isset($_POST['nombre'], $_POST['apellido'], $_POST['usuario'], $_POST['password'])) {
    // Obtener los datos del formulario
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellido = $conn->real_escape_string($_POST['apellido']);
    $usuario = $conn->real_escape_string($_POST['usuario']);
    $password = $_POST['password'];

    // ENCRIPTACION DE CONTRASEÑA
    $password_encrypted = password_hash($password, PASSWORD_DEFAULT);
var_dump($password_encrypted);


    // QUERY PARA INSERTAR LOS DATOS A LA TABLA 
    $sql = "INSERT INTO usuarios (nombre, apellido, usuario, password) VALUES ('$nombre', '$apellido', '$usuario', '$password_encrypted')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado correctamente";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }
} else {
    echo "No se recibieron todos los datos necesarios del formulario";
}

// Cerrar la conexión
$conn->close();
?>
