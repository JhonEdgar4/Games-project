<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .main-container {
            position: relative;
            width: 90%;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1;
        }
        .container {
            width: 100%;
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .mark-btn {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .mark-btn.marked {
            background-color: #4CAF50;
        }
        .mark-btn:hover {
            background-color: #0056b3;
        }
        .empty-message {
            text-align: center;
            font-size: 1.2em;
            margin-top: 20px;
        }
        #contact-section {
            width: 100%;
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            z-index: 1;
        }
        .contact-content {
            padding: 20px;
        }
        .contact-content h3 {
            margin-bottom: 10px;
            color: #333;
        }
        .contact-content form {
            display: grid;
            gap: 10px;
        }
        .contact-content input,
        .contact-content select {
            width: calc(100% - 20px);
            padding: 8px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .contact-content .btn-3 {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }
        .contact-content .btn-3:hover {
            background-color: #0056b3;
        }
        .factura-overlay {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            z-index: 2;
            display: none;
        }
        .factura-overlay h2 {
            margin-bottom: 10px;
            color: #333;
        }
        .factura-overlay ul {
            padding-left: 20px;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: #999;
            font-size: 1.2em;
            font-weight: bold;
            border: none;
            background: none;
        }
        .close-btn:hover {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="container">
            <h1>Contenido del Carrito Guardado</h1>
            <table id="carrito-table">
                <thead>
                    <tr>
                        <th>Nombre del Producto</th>
                        <th>Precio</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
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

                    // Obtener el id_carrito más alto
                    $sql = "SELECT MAX(id_carrito) as max_id_carrito FROM carrito";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $max_id_carrito = $row['max_id_carrito'];

                    // Obtener los productos con el id_carrito más alto
                    $sql = "SELECT id, nombre_producto, precio FROM carrito WHERE id_carrito = $max_id_carrito";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Mostrar los datos de cada fila con el id_carrito más alto
                        while($row = $result->fetch_assoc()) {
                            echo "<tr data-id='" . $row["id"] . "'>";
                            echo "<td>" . htmlspecialchars($row["nombre_producto"]) . "</td>";
                            echo "<td>$" . number_format($row["precio"], 2) . "</td>";
                            echo "<td><button class='mark-btn' aria-label='Marcar producto'>Marcar</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3' class='empty-message'>No hay productos guardados en el carrito.</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>

        <div id="contact-section">
            <section class="contact-content">
                <h3>Completa tus datos personales</h3>
                <form id="checkout-form" method="post" action="guardar_datos.php">
                    <input type="hidden" id="carrito-json" name="carrito-json">
                    
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fecha" required>
                    
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                    
                    <label for="identificacion">Número de identificación</label>
                    <input type="text" id="identificacion" name="identificacion" placeholder="Número de identificación" required>
                    
                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" placeholder="Correo electrónico" required>
                    
                    <label for="metodo-pago">Método de pago</label>
                    <select id="metodo-pago" name="metodo-pago" required>
                        <option value="" disabled selected>Selecciona tu método de pago</option>
                        <option value="tarjeta">Tarjeta de crédito/débito</option>
                        <option value="paypal">PayPal</option>
                        <option value="transferencia">Transferencia bancaria</option>
                    </select>
                    <input type="submit" class="btn-3" value="Enviar">
                </form>
            </section>
        </div>

        <div id="server-response" style="display:none; margin-top:20px;"></div>

        <div class="factura-overlay" id="factura-overlay">
            <button class="close-btn" id="close-btn" aria-label="Cerrar">&times;</button>
            <div id="factura-content"></div>
        </div>
    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Establecer la fecha actual en el campo de fecha
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('fecha').value = today;

            // Manejar el botón de marcado
            const markButtons = document.querySelectorAll('.mark-btn');
            markButtons.forEach(button => {
                button.addEventListener('click', function() {
                    button.classList.toggle('marked');
                });
            });

            // Manejar el envío del formulario
            const checkoutForm = document.getElementById('checkout-form');
            const facturaOverlay = document.getElementById('factura-overlay');
            const facturaContent = document.getElementById('factura-content');
            const closeBtn = document.getElementById('close-btn');

            checkoutForm.addEventListener('submit', function(event) {
                event.preventDefault();

                const formData = new FormData(checkoutForm);
                fetch('guardar_datos.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    const responseDiv = document.getElementById('server-response');
                    responseDiv.innerHTML = data;
                    responseDiv.style.display = 'block';

                    const carritoRows = document.querySelectorAll('#carrito-table tbody tr');
                    const carrito = [];
                    carritoRows.forEach(row => {
                        if (!row.querySelector('.mark-btn').classList.contains('marked')) {
                            carrito.push({
                                id: row.getAttribute('data-id'),
                                nombre_producto: row.cells[0].innerText,
                                precio: row.cells[1].innerText.replace('$', '').replace(',', '')
                            });
                        }
                    });

                    facturaContent.innerHTML = generateInvoiceHTML(Object.fromEntries(formData.entries()), carrito);
                    facturaOverlay.style.display = 'block';
                })
                .catch(error => console.error('Error:', error));
            });

            closeBtn.addEventListener('click', function() {
                facturaOverlay.style.display = 'none';
            });

            // Generar HTML de la factura
            function generateInvoiceHTML(data, carrito) {
                let invoiceHTML = `
                    <div style="border: 1px solid #ccc; padding: 10px; margin-top: 20px;">
                        <h2>Factura de Compra</h2>
                        <p><strong>Fecha:</strong> ${data.fecha}</p>
                        <p><strong>Cliente:</strong> ${data.nombre}</p>
                        <p><strong>Correo electrónico:</strong> ${data.correo}</p>
                        <p><strong>Método de pago:</strong> ${data['metodo-pago']}</p>
                        <p><strong>Productos:</strong></p>
                        <ul>
                            ${carrito.map(item => `<li>${item.nombre_producto} - $${item.precio}</li>`).join('')}
                        </ul>
                    </div>
                    <div style="margin-top: 20px;">
                        <p>Factura completa por favor comuníquese a nuestro whatsapp para finalizar la compra; 123456789</p>
                    </div>
                `;
                return invoiceHTML;
            }
        });
    </script>
</body>
</html>
