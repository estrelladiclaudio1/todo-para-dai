<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'comentarios');

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener el ID del comentario a modificar
$id = $_GET['id'];

// Obtener los datos del comentario
$sql = "SELECT * FROM opiniones WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Verificar si se encontró el comentario
if ($result->num_rows > 0) {
?>
    <h1>Modificar Comentario</h1>
    <form action="actualizar_comentario.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo htmlspecialchars($row['nombre']); ?>" required><br><br>
        <label for="comentario">Comentario:</label>
        <textarea name="comentario" id="comentario" rows="5" required><?php echo htmlspecialchars($row['comentario']); ?></textarea><br><br>
        <input type="submit" value="Actualizar Comentario">
    </form>
<?php
} else {
    echo "Comentario no encontrado.";
}

// Cerrar la conexión
$conn->close();
?>