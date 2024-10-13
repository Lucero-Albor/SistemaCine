<?php
// credenciales para el acceso correcto a la BD
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "thezine"; 

// Inicia la conexion a la BD
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si los datos están siendo recibidos correctamente
if (isset($_POST['loginUsuario'], $_POST['loginPassword'])) {
    $usuario = $conn->real_escape_string($_POST['loginUsuario']);
    $password = $_POST['loginPassword'];

    // Consulta para obtener el hash de la contraseña del usuario
    $sql = "SELECT password FROM usuarios WHERE usuario = '$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verificar la contraseña
        if (password_verify($password, $hashed_password)) {
            echo "La contraseña es correcta."; 
        } else {
            echo "La contraseña es incorrecta."; 
        }
    } else {
        echo "Usuario no encontrado."; 
    }
} else {
    echo "No se recibieron todos los datos necesarios."; 
}

// Cerrar la conexión
$conn->close();
?>
