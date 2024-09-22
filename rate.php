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

$driver = $_POST['driver'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];

$sql = "INSERT INTO ratings (driver, rating, comment) VALUES ('$driver', '$rating', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Calificación enviada exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
