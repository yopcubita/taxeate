<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taxeate";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$