<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "negocio";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

?>