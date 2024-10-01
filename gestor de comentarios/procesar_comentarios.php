<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'comentarios');

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Recibir los datos del formulario
$nombre = $conn->real_escape_string($_POST['nombre']);
$comentario = $conn->real_escape_string($_POST['comentario']);

// Insertar el comentario en la base de datos
$sql = "INSERT INTO opiniones (nombre, comentario) VALUES ('$nombre', '$comentario')";

if ($conn->query($sql) === TRUE) {
    echo "Comentario enviado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();

// Redireccionar de vuelta a la página principal
header('Location: opiniones.php');
exit;
?>