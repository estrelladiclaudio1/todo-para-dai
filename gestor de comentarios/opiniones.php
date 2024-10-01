<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Comentarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Deja tu comentario</h1>
    <form action="procesar_comentario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        <label for="comentario">Comentario:</label>
        <textarea name="comentario" id="comentario" rows="5" required></textarea><br><br>
        <input type="submit" value="Enviar Comentario">
    </form>

    <h2>Comentarios recientes:</h2>
    <?php
        // Incluir los comentarios
        include 'mostrar_comentarios.php';
    ?>
</body>
</html>