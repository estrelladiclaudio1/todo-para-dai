<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'comentarios');

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Recibir los datos del formulario
$id = $_POST['id'];
$nombre = $conn->real_escape_string($_POST['nombre']);
$comentario = $conn->real_escape_string($_POST['comentario']);

// Actualizar el comentario en la base de datos
$sql = "UPDATE opiniones SET nombre='$nombre', comentario='$comentario' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Comentario actualizado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();

// Redireccionar de vuelta a la página principal
header('Location: opiniones.php');
exit;
?>