<html lang="es" class="clasificados">
    <head>
    <link rel="stylesheet" href="estilos.css">
</head>
<?php 
$inc = include("conexion.php");
if ($inc) {
	$consulta = "SELECT * FROM clasificados";
	$resultado = mysqli_query($con,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $idpaises=$row['idpaises'];
	    $paises=$row['paises'];
	    $grupos=$row['grupos'];

	    ?>
        <div>
        	<h2>Clasificados</h2>
        	<div>

        		<p>
        		    <b>Pises: </b> <?php echo $paises?><br>
        		    <b>Grupos: </b> <?php echo $grupos?><br>
        		            		           		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
} 
?>
</html>