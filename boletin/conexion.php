<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "boletin";

$con = new mysqli($servername, $username, $password, $database);
if ($con->connect_error) {
    die("error de conexion:". $con->connect_error);
}
?>
