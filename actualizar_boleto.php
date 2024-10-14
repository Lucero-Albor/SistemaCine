<?php
include 'abrir_conexion.php';

// Obtener los datos
$id_boleto = $_POST['id_boleto'];
$id_cupon = $_POST['id_cupon'];

// Actualizar id_cupon en la tabla boletos
$sql = "UPDATE boletos SET id_cupon = ? WHERE id_boleto = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $id_cupon, $id_boleto);

if ($stmt->execute()) {
    echo "Cupón actualizado correctamente.";
} else {
    echo "Error al actualizar el cupón: " . $conn->error;
}

// Cerrar la conexión
include 'cerrar_conexion.php';
?>
