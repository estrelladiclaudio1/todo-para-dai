<?php
// Verificar que el formulario se haya enviado-Esto comprueba si el formulario se envió usando el método POST.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Directorio o carpeta de subida creada en la misma carpeta del proyecto
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    //esto permite construir la ruta completa a la carpeta y construir la galeria donde se guardaron las imagenes

    // Comprobar si el archivo es una imagen real- Esta parte utiliza getimagesize() para verificar si el archivo es una imagen real.
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        echo "El archivo es una imagen - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }

    // Comprobar si el archivo ya existe dentro de la carpeta-se verifica si el archivo ya existe en el directorio de destino.
    if (file_exists($target_file)) {
        echo "Lo siento, el archivo ya existe.";
        $uploadOk = 0;
    }

    // Limitar el tamaño del archivo
    if ($_FILES["file"]["size"] > 500000) {
        echo "Lo siento, el archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Permitir ciertos formatos de archivo, preestable el formato aceptado
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
        echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    }

    // Comprobar si $uploadOk es 0 debido a un error-Si $uploadOk es 0, significa que hubo un error y el archivo no se subirá.
    if ($uploadOk == 0) {
        echo "Lo siento, tu archivo no fue aceptado.";
    // Intentar subir el archivo
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "El archivo ". htmlspecialchars(basename($_FILES["file"]["name"])). " ha sido subido.";
        } else {
            echo "Lo siento, hubo un error al subir tu archivo.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="refresh" content="2;url=index.php">
    
</head>
<body>
    <p>Redirigiendo a la galería...</p>
</body>
</html>