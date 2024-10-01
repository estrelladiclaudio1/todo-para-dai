<?php
$x = 3;
$y = "nota de la clase";

echo $x;
echo "<br>";
echo $y;
?>
<br>

<br>
<br>
<?php

$y = "si no se ponen las pilas";
$b = "los veo en diciembre ";
echo $y;
echo "<br>";
echo $b;
?>
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
<H1>GENERADOR TABLA DE MULTIPLICAR</H1>
<?php
$numero = 5;

echo "Tabla de multiplicar del $numero <br>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>";
}
?>
<br>
<H3> Verificar si un número es par o impar:</H3>
<?php 
$numero = 7;

if ($numero % 2 == 0) {
    echo "$numero es un número par <br>";
} else {
    echo "$numero es un número impar <br>";
}
?>
<?php
$txt = "DICIEMBRE";
echo "SI NO ESTUDIO SEGURO ME VOY A : $txt!";
?>