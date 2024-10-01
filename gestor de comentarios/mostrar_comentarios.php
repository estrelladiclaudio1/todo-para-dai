<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'comentarios');

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Consulta para obtener los comentarios
$sql = "SELECT id, nombre, comentario, fecha FROM opiniones ORDER BY fecha DESC";
$result = $conn->query($sql);

// Mostrar los comentarios si existen
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . htmlspecialchars($row['nombre']) . "</strong> dijo: <br>" . htmlspecialchars($row['comentario']) . "<br><small>" . $row['fecha'] . "</small></p>";
        echo "<a href='editar_comentario.php?id=" . $row['id'] . "'>Modificar</a>";
        echo "<hr>";
    }
} else {
    echo "No hay comentarios todavía.";
}

// Cerrar la conexión
$conn->close();
?>