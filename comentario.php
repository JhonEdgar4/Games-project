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
    <link rel="stylesheet" type="text/css" href="css/comentario.css">
    <link rel="stylesheet" type="text/css" href="css/barralateral.css">

</head>
<body>

<div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">

            <div>
                <div class="nombre-pagina">
                    <img src="media/img/logo.jpeg" alt="55" height="50">
                    <span>PIXELEMPOIRO</span>
                </div>

            </div>
            <nav class="navegacion">
                <ul>
                    <li>
                        <a href="index.php">
                            <ion-icon name="home-outline"></ion-icon>
                        <span>Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="play.php">
                            <ion-icon name="logo-playstation"></ion-icon>
                            <span>Play</span>
                        </a>
                    </li>
                    <li>
                        <a href="xbox.php">
                            <ion-icon name="logo-xbox"></ion-icon>
                            <Span>Xbox</Span>
                        </a>
                    </li>
                    <li>
                        <a href="nintendo.php">
                            <ion-icon name="game-controller-outline"></ion-icon>
                            <span>Nintendo</span>
                        </a>
                    </li>
                    <li>
                        <a href="nosotros.php">
                            <ion-icon name="people-outline"></ion-icon>
                            <span>Nosotros</span>
                        </a>
                    </li>
                    <li>
                        <a href="mision-vision.php">
                            <ion-icon name="diamond-outline"></ion-icon>
                            <span>Mision y Vision</span>
                        </a>
                    </li>
                    <li>
                        <a href="proposito.php">
                            <ion-icon name="star-outline"></ion-icon>
                            <span>Porposito</span>
                        </a>
                    </li>
                    <li>
                        <a href="comentario.php">
                            <ion-icon name="mail-outline"></ion-icon>
                            <span>Comentarios</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div>
                <div class="linea"></div>

                <div class="modo-oscuro">
                    <div class="info">
                        <ion-icon name="moon-outline"></ion-icon>
                        <span>Dark Mode</span>   
                    </div>
                    <div class="switch">
                        <div class="base">
                            <dev class="circulo">
                            </dev>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
<main>
<div class="container">
    <h1>Comentarios</h1>
    <div class="comment-form">
        <form action="comentario.php" method="post">
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
</div>

</main>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="js/script.js"></script>
</body>
</html>
