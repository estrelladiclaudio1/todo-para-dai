<html lang="es" class="resultados">
    <head>
    <link rel="stylesheet" href="estilos.css">
</head>
<?php 
$inc = include("conexion.php");
if ($inc) {
	$consulta = "SELECT * FROM resultados";
	$resultado = mysqli_query($con,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $fecha = $row['fecha'];
	    $equipo1 = $row['equipo1'];
	    $equipo2=$row['equipo2'];
	    $hora=$row['hora'];
	    $resultado_equipo1=$row['resultado_equipo1'];
	    $resultado_equipo2=$row['resultado_equipo2'];

	    ?>
        <div>
        	<h2>Resultados</h2>
        	<div>

        		<p>
        		    <b>Fecha: </b> <?php echo $fecha ?><br>
        		    <b>Equipo 1: </b> <?php echo $equipo1?><br>
        		    <b>Equipo 2: </b> <?php echo $equipo2?><br>
        		    <b>Hora: </b> <?php echo $hora?><br>
        		    <b>Resultado equipo 1: </b> <?php echo $resultado_equipo1?><br>
        		    <b>Resultado equipo 2: </b> <?php echo $resultado_equipo2?><br>
        		            		           		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
} 
?>
</html>