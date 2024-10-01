<div class="jugadores">
    <link rel="stylesheet" href="estilos.css">
<?php 
$inc = include("conexion.php");
if ($inc) {
	$consulta = "SELECT * FROM jugadores";
	$resultado = mysqli_query($con,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $idjugador = $row['idjugador'];
	    $apellido = $row['apellido'];
	    $nombre = $row['nombre'];
	    $f_nac =$row['f_nac'];
	    $pais=$row['pais'];
	    $grupo =$row['grupo'];
	    $seleccion =$row['seleccion'];
        $num_camiseta =$row['num_camiseta'];
        $posicion=$row['posicion'];
        $edad=$row['edad'];

	    ?>
        <div>
        	<h2>Jugadores</h2>
        	<div>

        		<p>
        		    <b>Apellido: </b> <?php echo $apellido ?><br>
        		    <b>Nombre: </b> <?php echo $nombre?><br>
        		    <b>Fecha de nacimiento: </b> <?php echo $f_nac?><br>
        		    <b>Pais: </b> <?php echo $pais?><br>
                    <b>Grupo: </b> <?php echo $grupo?><br>
                    <b>Seleccion: </b> <?php echo $seleccion?><br>
                    <b>Numero de camiseta: </b> <?php echo $num_camiseta?><br>
                    <b>Posicion: </b> <?php echo $posicion?><br>
                    <b>Edad: </b> <?php echo $edad?><br>
        		            		           		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
} 
?>
</div>