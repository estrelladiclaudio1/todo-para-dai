<html lang="es" class="partidos">
    <head>
    <link rel="stylesheet" href="estilos.css">
</head>
<?php 
$inc = include("conexion.php");
if ($inc) {
	$consulta = "SELECT * FROM partidos";
	$resultado = mysqli_query($con,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id_partido = $row['id_partido'];
	    $equipo1_id = $row['equipo1_id'];
	    $equipo1 = $row['equipo1'];
        $grupo1=$row['grupo1'];
	    $equipo2_id=$row['equipo2_id'];
	    $equipo2=$row['equipo2'];
	    $grupo2=$row['grupo2'];
	    $fase=$row['fase'];
        $fecha=$row['fecha'];
        $horario=$row['horario'];
        $sede=$row['sede'];

	    ?>
        <div>
        	<h2>Partidos</h2>
        	<div>

        		<p>


        		    <b>Equipo 1: </b> <?php echo $equipo1?><br>
                    <b>Grupo 1: </b> <?php echo $grupo1 ?><br>
        		    <b>Equipo 2: </b> <?php echo $equipo2?><br>
                    <b>Grupo 2: </b> <?php echo $grupo2 ?><br>
        		    <b>Fase: </b> <?php echo $fase?><br>
        		    <b>Fecha: </b> <?php echo $fecha?><br>
        		    <b>Horario: </b> <?php echo $horario?><br>
                    <b>Sede: </b> <?php echo $sede ?><br>
        		            		           		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
} 
?>
</html>