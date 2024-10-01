<?php
$puntaje_equipo1 = 0;
$puntaje_equipo2 = 0;
$puntaje_equipo3 = 0;
$jugador_equipo1 = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resultado1 = intval($_POST['resultado1']);
    $resultado2 = intval($_POST['resultado2']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Puntaje de Equipos</title>
</head>
<body>
    <h1>Puntaje de Equipos</h1>
    
    <form method="POST">
        <label for="equipo1">Equipo 1:</label>
        <input type="number" id="equipo1" name="equipo1" value="<?php echo $puntaje_equipo1; ?>"><br><br>
        
        <label for="equipo2">Equipo 2:</label>
        <input type="number" id="equipo2" name="equipo2" value="<?php echo $puntaje_equipo2; ?>"><br><br>
        
        <label for="equipo3">Equipo 3:</label>
        <input type="number" id="equipo3" name="equipo3" value="<?php echo $puntaje_equipo3; ?>"><br><br>
    
        <input type="submit" value="Actualizar Puntajes">
    </form>
    
    <h2>Puntajes actuales:</h2>
    <p>Equipo 1: <?php echo $puntaje_equipo1; ?> puntos</p>
    <p>Equipo 2: <?php echo $puntaje_equipo2; ?> puntos</p>
    <p>Equipo 3: <?php echo $puntaje_equipo3; ?> puntos</p>
</body>
</html>
