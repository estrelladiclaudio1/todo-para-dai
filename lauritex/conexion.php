<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lauritex";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
}
?>