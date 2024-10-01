<?php
include("nivel.php");
include("conexion.php"); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $respuesta = $_POST['respuesta'];
    $id = $_POST['id'];

    $sql = "SELECT respuesta FROM preguntas WHERE id = $id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    if ($respuesta == $row['respuesta']) {
        echo "¡Correcto!";
        $row = $resultado->fetch_assoc();
    if ($row) {
        $pregunta = $row['pregunta'];
        $opciones = [
            $row['opcion1'],
            $row['opcion2'],
            $row['opcion3'],
            $row['opcion4'],
            $row['opcion5']
        ];
        $id = $row['id'];
    }
} 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="diseño.css">
</head>
<body>
    <form method="post" action="niveltres.php">
        <fieldset>
            <legend><?php echo htmlspecialchars($pregunta); ?></legend>
            <?php foreach ($opciones as $opcion): ?>
                <label>
                    <input type="radio" name="respuesta" value="<?php echo htmlspecialchars($opcion); ?>"> <?php echo htmlspecialchars($opcion); ?>
                </label><br>
            <?php endforeach; ?>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
            <br>
            <input type="submit" value="Responder">
        </fieldset>
    </form>
</body>
</html>        <?php 
    } else {
        echo "Incorrecto. ";
    }


?>