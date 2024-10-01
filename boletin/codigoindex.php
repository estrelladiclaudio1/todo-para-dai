<?php
include 'conexion.php';

// Manejar la inserción de un nuevo estudiante
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nuevo_estudiante'])) {
    $nombre = $_POST['nombre'];
    $sql = "INSERT INTO estudiantes (nombre) VALUES ('$nombre')";
    if ($con->query($sql) === TRUE) {
        echo "Nuevo estudiante agregado.";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Manejar la inserción de una nueva calificación
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nueva_calificacion'])) {
    $estudiante_id = $_POST['estudiante_id'];
    $materia = $_POST['materia'];
    $calificacion = $_POST['calificacion'];
    $sql = "INSERT INTO calificaciones (estudiante_id, materia, calificacion) VALUES ('$estudiante_id', '$materia', '$calificacion')";
    if ($con->query($sql) === TRUE) {
        echo "Nueva calificación agregada.";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Manejar el filtro por estudiante
$estudiante_filtrado = isset($_POST['filtrar_estudiante']) ? $_POST['estudiante_filtrado'] : '';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Boletín de Calificaciones</title>
</head>
<body>
    <h1>Boletín de Calificaciones</h1>
    
    <h2>Agregar Estudiante</h2>
    <form method="POST" action="">
        Nombre: <input type="text" name="nombre" required>
        <button type="submit" name="nuevo_estudiante">Agregar Estudiante</button>
    </form>
    
    <h2>Agregar Calificación</h2>
    <form method="POST" action="">
        Estudiante:
        <select name="estudiante_id" required>
            <?php
            $sql = "SELECT * FROM estudiantes";
            $result = $con->query($sql);
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
            }
            ?>
        </select>
        Materia: <input type="text" name="materia" required>
        Calificación: <input type="number" step="0.01" name="calificacion" required>
        <button type="submit" name="nueva_calificacion">Agregar Calificación</button>
    </form>

    <h2>Filtrar Calificaciones por Estudiante</h2>
    <form method="POST" action="">
        Estudiante:
        <select name="estudiante_filtrado">
            <option value="">Todos</option>
            <?php
            $sql = "SELECT * FROM estudiantes";
            $result = $con->query($sql);
            while($row = $result->fetch_assoc()) {
                $selected = $row['id'] == $estudiante_filtrado ? 'selected' : '';
                echo "<option value='" . $row['id'] . "' $selected>" . $row['nombre'] . "</option>";
            }
            ?>
        </select>
        <button type="submit" name="filtrar_estudiante">Filtrar</button>
    </form>
    
    <h2>Calificaciones</h2>/crea una tabla para visualizar los resultados/
    <table border="1">
        <tr>
            <th>Estudiante</th>
            <th>Materia</th>
            <th>Calificación</th>
        </tr>
        <?php
        //permite hacer un cruce entre tabla para poder devolver la calificacion del estudiante
        $sql = "SELECT estudiantes.nombre, calificaciones.materia, calificaciones.calificacion
                FROM calificaciones
                JOIN estudiantes ON calificaciones.estudiante_id = estudiantes.id";
        
        if ($estudiante_filtrado) {
            $sql .= " WHERE estudiantes.id = $estudiante_filtrado";
        }
        // muestra el resultado de la consulta realizada en una tabla 
        $result = $con->query($sql);
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['nombre'] . "</td>
                    <td>" . $row['materia'] . "</td>
                    <td>" . $row['calificacion'] . "</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$con->close();//cierra la conexion a la base de datos
?>