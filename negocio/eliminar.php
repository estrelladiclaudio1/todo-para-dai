<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <style>

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
</head>
</html>

<?php
$inc = include("conexion.php");

if (isset($_GET['delete'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];


    $stmt = $con->prepare("DELETE FROM empleados WHERE nombre = ? AND apellido = ?");
    
   
    $stmt->bind_param("ss", $nombre, $apellido);
    
    
    if ($stmt->execute()) {
        echo "Empleado eliminado con éxito";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar el statement
    $stmt->close();
}

// Cerrar la conexión
$con->close();
?>
<form method="GET" action="">
    Nombre: <input type="text" name="nombre" required><br>
    Apellido: <input type="text" name="apellido" required><br>
    <input type="submit" name="delete" value="Eliminar Empleado">
</form>
<?php
include 'conexion.php';
$sql = "SELECT * FROM empleados";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Departamento</th><th>Salario</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido"]."</td><td>".$row["edad"]."</td><td>".$row["departamento"]."</td><td>".$row["salario"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay empleados";
}
?>