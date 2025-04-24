<?php
$conn = new mysqli("localhost", "root", "manuel");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>
