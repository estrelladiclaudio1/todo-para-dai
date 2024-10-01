<html lang="es" class="equipos">
    <head>
    <link rel="stylesheet" href="estilos.css">
</head>
<?php 
$inc = include("conexion.php");
if ($inc) {
	$consulta = "SELECT * FROM equipos";
	$resultado = mysqli_query($con,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $pais = $row['pais'];
	    $grupo = $row['grupo'];
	    $cantidad_jugadores = $row['cantidad_jugadores'];
	    $DT=$row['DT'];

	    ?>
        <div>
        	<h2>Equipos</h2>
        	<div>

        		<p>
        			<b>Pais: </b> <?php echo $pais ?><br>
        		    <b>Grupo: </b> <?php echo $grupo ?><br>
        		    <b>Cantidad de jugadores: </b> <?php echo $cantidad_jugadores?><br>
        		    <b>Hora: </b> <?php echo $hora?><br>
        		    <b>DT: </b> <?php echo $DT?><br>
        		            		           		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
} 
?>
</html>