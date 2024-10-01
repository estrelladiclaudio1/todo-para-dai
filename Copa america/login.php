<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form >
        <label for="username">Usuario:</label><br>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br>
        
        <label for="dni">DNI:</label><br>
        <input type="text" id="dni" name="dni" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="color_favorito">Color Favorito:</label><br>
        <input type="text" id="color_favorito" name="color_favorito"><br>
        
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
<?php

$inc = include("conexion.php");
$username = $_POST['username'];
$password = $_POST['password'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$color_favorito = $_POST['color_favorito'];
}

$sql = "INSERT INTO login (username, password, dni, email, color_favorito)
        VALUES ('$username', '$password', '$dni', '$email', '$color_favorito')";

?>