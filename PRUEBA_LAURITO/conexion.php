<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "competencia";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
?>