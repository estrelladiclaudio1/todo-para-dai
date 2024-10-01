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
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $departamento = $_POST['departamento'];
    $salario = $_POST['salario'];

    $sql = "UPDATE empleados SET nombre='$nombre', apellido='$apellido', edad=$edad, departamento='$departamento', salario=$salario WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        echo "Empleado actualizado con éxito";
    } else {
        echo "Error: " . $con->error;
    }
}
?>

<form method="POST" action="">
    ID: <input type="text" name="id"><br>
    Nombre: <input type="text" name="nombre"><br>
    Apellido: <input type="text" name="apellido"><br>
    Edad: <input type="number" name="edad"><br>
    Departamento: <input type="text" name="departamento"><br>
    Salario: <input type="text" name="salario"><br>
    <input type="submit" name="update" value="Actualizar Empleado">
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