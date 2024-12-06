<?php
$servername = "db";
$username = "dbuser";
$password = "security2db";
$dbname = "dbmain";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
