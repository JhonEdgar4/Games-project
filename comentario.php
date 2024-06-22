<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Procesar el envío del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $comentario = htmlspecialchars($_POST["comentario"]);

    // Preparar la consulta para insertar el comentario
    $stmt = $conn->prepare("INSERT INTO comentario (Nombre, comentario) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $comentario);

    if ($stmt->execute()) {
        echo "<p>Comentario guardado exitosamente.</p>";
    } else {
        echo "<p>Error al guardar el comentario: " . $conn->error . "</p>";
    }

    $stmt->close();
}

// Recuperar los comentarios de la base de datos
$sql = "SELECT Nombre, comentario FROM comentario ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .comment-form {
            width: 100%;
            max-width: 600px;
            margin-bottom: 30px;
        }
        .comment-form input, .comment-form textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .comment-form button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }
        .comment-form button:hover {
            background-color: #45a049;
        }
        .comments {
            width: 100%;
            max-width: 600px;
        }
        .comment {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .comment h4 {
            margin: 0 0 10px 0;
        }
        .comment p {
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>Comentarios</h1>

    <div class="comment-form">
        <form action="comentarios.php" method="post">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required><br><br>
            <label for="comentario">Comentarios:</label><br>
            <textarea id="comentario" name="comentario" rows="4" placeholder="Escribe tu comentario aquí" required></textarea><br><br>
            <button type="submit">Enviar comentario</button>
        </form>
    </div>

    <div class="comments">
        <h2>Comentarios recientes</h2>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='comment'>";
                echo "<h4>" . htmlspecialchars($row["Nombre"]) . "</h4>";
                echo "<p>" . htmlspecialchars($row["comentario"]) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No hay comentarios todavía.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
