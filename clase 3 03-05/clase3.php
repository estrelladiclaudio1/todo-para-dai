<h4>Crear un array indexado</h4>
<?php
$numeros = array(1, 2, 3, 4, 5);

// Acceder a elementos del array
echo $numeros[3]; // imprime 1
?>
<br>
<h4>array asociativos</h4>
 <?php
// Crear un array asociativo
$persona = array("nombre" => "Juan", "edad" => 30, "ciudad" => "Madrid");

// Acceder a elementos del array asociativo
echo $persona["nombre"]; // imprime Juan
?>
<br>
<br>
<?php
// Agregar un elemento al final de un array
$numeros = array(1, 2, 3, 4, 5,6,7);
echo $numeros[6];
?>
<br>
<br>
<?php
// Agregar un elemento con una clave específica en un array asociativo
$persona = array ("profesion" => "ingeniero");
echo $persona["profesion"];
?>
<br>
<?php
//Agregar elementos a un array
$frutas = array();
$frutas[] = "Manzana";
$frutas[] = "Platano";
$frutas[] = "Naranja";
?>
<br>
<h4>Recorrer un array con un bucle:</h4>
<?php
$frutas = array("Manzana", "Platano", "Naranja");
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>
<h4>Obtener la longitud de un array:</h4>
<?php
$frutas = array("Manzana", "banana", "Naranja");
echo "El número de elementos en el array es: " . count($frutas); // Imprime: El número de elementos en el array es: 3
?>
<h5>.......FOREACH SIMPLE..........</h5>
<?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
  echo "$x <br>";
}
?>
<H5>FOREACH ASOCIATIVOS </H5>
<?php
$NOMBRES = array("Pedro"=>"35", "Benicio"=>"37", "Jose"=>"43");

foreach ($NOMBRES as $x => $y) {
  echo "$x : $y <br>";
}
?>
<h5>La declaración de ruptura</h5>

<br>;
<?php
//Con la break sentencia podemos detener el bucle aunque no haya llegado al final:
$colors = array("rojo", "verde", "violeta","azul", "amarillo");

foreach ($colors as $x) {
  if ($x == "azul") break; // Detenga el ciclo si $xes "azul". 
  echo "$x <br>";
}
?>
<h3> Contar la cantidad de veces que aparece cada elemento en un array:</h3>
<?php
$elementos = array("a", "b", "c", "a", "b", "a", "c", "d");
$conteo = array();

foreach ($elementos as $elemento) {
    if (isset($conteo[$elemento])) {
        $conteo[$elemento]++;
    } else {
        $conteo[$elemento] = 1;
    }
}

foreach ($conteo as $elemento => $cantidad) {
    echo "El elemento '" . $elemento . "' aparece " . $cantidad . " veces.<br>";
}
?>
<h3>numerar elementos de una array</h3>
<?php 
$nombres = array("Juan", "María", "Pedro", "Ana");
$indice = 1;

foreach ($nombres as $nombre) {
    echo $indice . ". " . $nombre . "<br>";
   $indice++;
}
?>