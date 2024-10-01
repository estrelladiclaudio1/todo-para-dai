<?php 
include("conexion.php"); 
$consulta = "SELECT * FROM preguntas";
$resultado = mysqli_query($con, $consulta);

if ($resultado) {
  
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
    <title>Juego de Trivia</title>
    <link rel="stylesheet" href="diseño.css">
</head>
<body>
    <h1>Juego de Trivia</h1>
    <form method="post" action="nivel.php">
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
</html>