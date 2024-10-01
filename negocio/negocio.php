
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>

    <h1>Gestión de Empleados</h1>

        <a class="boton"  href="insertar.php">Agregar Empleado</a>
        <a class="boton" href="actualizar.php">Actualizar Empleado</a>
        <a class="boton" href="eliminar.php">Eliminar Empleado</a>
        <style>
body{
    flex-direction: column;
}
        body.dark-mode {
            background-color: #333333;
            color: #ffffff;
        }

        .toggle-button {
            padding: 10px 20px;
            margin: 20px;
            cursor: pointer;
            background-color: #f23def;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .toggle-button:hover {
    background-color: #7a026a;
    transform: scale(1.05); 
}
    </style>
</head>
<body class="<?php echo isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark' ? 'dark-mode' : ''; 

?>">

    <form method="post" action="">
        <button type="submit" name="toggle" class="toggle-button">
            Cambiar a Modo <?php echo isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark' ? 'Día' : 'Nocturno'; ?>
        </button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') {
            setcookie('theme', 'light', time() + (86400 * 30), "/"); 
        } else {
            setcookie('theme', 'dark', time() + (86400 * 30), "/");
        }
        header("Refresh:0");
    }
    ?>
</body>
</html>
