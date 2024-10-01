<H2>Lista de tareas pendientes  </H2>
<?php
$pendientes = array("cocina"=>"lavar platos ", "baño"=>"limpiar", "dormitorio"=>"hacer cama");

foreach ($pendientes as $x => $y) {
  echo "$x : $y <br>";
}
?>
<H2>Lista de tareas terminadas </H2>
<?php
$completas = array("cocina"=>"lavar piso ", "baño"=>"limpiar espejo", "dormitorio"=>"limpiar piso");
foreach ($completas as $x => $y) {
  echo "$x : $y terminado <br>";
}
?>
<br>
<H2>reservas de habitaciones </H2>
<?php
$habitaciones = array("habitacion 31 "=>"ocupada", "habitacion 32"=>"disponible", "habitacion 33"=>"disponible");

foreach ($habitaciones as $x => $y) {
  echo "$x : $y <br>";
}
?>
<br>
<br>
<H3>Calculadora simple:</H3>
<?php
// Definir variables
$num1 = 10;
$num2 = 5;

// Suma
$suma = $num1 + $num2;
echo "Suma: $suma <br>";
?>
<br>
<?php
// Resta
$resta = $num1 - $num2;
echo "Resta: $resta <br>";
?>
<br>
<?php
// Multiplicación
$multiplicacion = $num1 * $num2;
echo "Multiplicación: $multiplicacion <br>";
?>
<br>
<?php
// División
if ($num2 != 0) {
    $division = $num1 / $num2;
    echo "División: $division <br>";
} else {
    echo "No se puede dividir por cero <br>";
}
?>
<br>
<H3>Generador de tabla automatica</H3>
<?php
$numero = 5;

echo "Tabla de multiplicar del $numero <br>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>";
}
?>