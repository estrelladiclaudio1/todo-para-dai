<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }
        .gallery img {
            margin: 10px;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
        .upload-form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Galería de Imágenes</h2>
    
    <!-- Formulario de subida de imágenes -->
    <form class="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Seleccionar imagen:</label>
        <input type="file" name="file" id="file" required>
        <button type="submit">Subir</button>
    </form>
    
    <!-- Galería de imágenes -->
    <div class="gallery">
        <?php
        // Directorio donde se almacenan las imágenes
        $dir = "images/";
        
        // Obtener todos los archivos del directorio
        $files = scandir($dir);
        
        // Mostrar cada imagen
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                echo "<img src='$dir$file' alt='$file'>";
            }
        }
        ?>
    </div>
</body>
</html>