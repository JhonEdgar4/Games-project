<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$identificacion = $_POST['identificacion'];
$correo = $_POST['correo'];

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (nombre, identificacion, correo) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $identificacion, $correo);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Datos guardados exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
