<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xbox aventura</title>
    <link rel="icon" type="image/jpeg" href="media/img/logo.jpeg">
    <link rel="stylesheet" type="text/css" href="css/xboxestilo.css">
    <link rel="stylesheet" type="text/css" href="css/barralateral.css">
    <!-- Referencia a Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        /* Estilo para el icono del carrito */
        .carrito-icon {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #0ef;
            padding: 10px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .carrito-icon ion-icon {
            font-size: 24px;
            color: #fff;
        }

        .cart-count {
            background: #ff5a2c;
            border-radius: 50%;
            padding: 5px 10px;
            font-size: 14px;
            color: #fff;
            margin-left: 10px;
        }

        /* Estilo para el contenedor del carrito */
        .carrito {
            position: fixed;
            top: 70px;
            right: 20px;
            width: 300px;
            max-height: 400px;
            overflow-y: auto;
            background: #2a223a;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            padding: 20px;
            display: none;
            z-index: 1000;
        }

        .carrito h2 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .carrito-items {
            margin-bottom: 20px;
        }

        .carrito-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #3f3456;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            color: #fff;
        }

        .carrito-item p {
            margin: 0;
        }

        .carrito-item button {
            background: #ff5a2c;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 10px;
        }

        .btn-vaciar {
            background: #ff5a2c;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
        }

        .btn-vaciar:hover {
            background: #e14a22;
        }

        .carrito-total {
            color: #fff;
            font-size: 18px;
            text-align: right;
        }

        /* Estilos adicionales */
        .btn-2 {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .btn-2:hover {
            background-color: #0056b3;
        }

        .btn-3 {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        .btn-3:hover {
            background-color: #218838;
        }
    </style>    
</head>
<body>

<div class="menu">
    <ion-icon name="menu-outline"></ion-icon>
    <ion-icon name="close-outline"></ion-icon>
</div>

<div class="barra-lateral">
    <div>
        <div class="nombre-pagina">
            <ion-icon id="cloud" name="cloud-outline"></ion-icon>
            <span>PIXELEMPOIRO</span>
        </div>
        <button class="boton">
            <ion-icon name="add-outline"></ion-icon>
            <span>Create new</span>  
        </button>
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
                    <span>Xbox</span>
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
                    <ion-icon name="person-outline"></ion-icon>
                    <span>Nosotros</span>
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
                    <div class="circulo"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="carrito-icon" onclick="toggleCarrito()">
    <ion-icon name="cart-outline"></ion-icon>
    <span class="cart-count">0</span>
</div>

<div class="carrito">
    <h2>Tu Carrito</h2>
    <div class="carrito-items"></div>
    <button class="btn-vaciar">Guardar Carrito</button>
    <p class="carrito-total">Total: $0</p>
</div>

<main>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Xbox</a>
            <input type="checkbox" id="menu" />
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Compra todos los <span>juegos</span> <br> que quieras</h1>
                <p>
                    En esta página web encontrarás todos los juegos de Xbox.
                </p>
                <div class="buttons">
                    <a href="#contact-section" class="btn-1">Información</a>
                    <a href="#product-content" class="btn-1">Compras</a>
                </div>
            </div>
        </div>
    </header>

    <section class="popular container">
    <div class="popular-content">
            <img src="media/img/ori-and-the-will-of-the-wisps.jpg" alt="">
            <img src="media/categoria_img/portada_crash.jpg" alt="">
            <img src="media/categoria_img/Portada_Spyro_Reignited_Trilogy.jpg" alt="">
            <img src="media/categoria_img/portada_tunic.jpg" alt="">
            <img src="media/categoria_img/portada_monster_hunter.jpg" alt="">
            <img src="media/categoria_img/portada_nier_automata.jpg" alt="">
        </div>
    </section>

    <main id="product-content" class="product container">
        <h2>Todos los juegos de aventuras que puedes comprar</h2>
        <div class="product-content">
            
            <div class="product-1">
                <img src="media/img/ori.jpeg" alt="">
                <div class="product-txt">
                    <h3>Ori and the will of the wisp</h3>
                    <div class="price">
                        <p>$79.900</p>
                        <a href="#" class="btn-2">Carrito</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/categoria_img/crash.jpeg" alt="">
                <div class="product-txt">
                    <h3>Crash Bandicoot™ N. Sane Trilogy</h3>
                    <div class="price">
                        <p>$149.187</p>
                        <a href="#" class="btn-2">Carrito</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/categoria_img/crash4.jpg" alt="">
                <div class="product-txt">
                    <h3>Crash Bandicoot™ 4: It’s About Time</h3>
                    <div class="price">
                        <p>$81.900</p>
                        <a href="#" class="btn-2">Carrito</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/categoria_img/Spyro_Reignited_Trilogy.jpeg" alt="">
                <div class="product-txt">
                    <h3>Spyro Reignited Trilogy</h3>
                    <div class="price">
                        <p>$142.000</p>
                        <a href="#" class="btn-2">Carrito</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/categoria_img/tunic.png" alt="">
                <div class="product-txt">
                    <h3>Tunic</h3>
                    <div class="price">
                        <p>$62.700</p>
                        <a href="#" class="btn-2">Carrito</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/categoria_img/it_takes_two.jpeg" alt="">
                <div class="product-txt">
                    <h3>it takes two</h3>
                    <div class="price">
                        <p>$80.000</p>
                        <a href="#" class="btn-2">Carrito</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/categoria_img/monster_hunter.jpeg" alt="">
                <div class="product-txt">
                    <h3>monster hunter world iceborne</h3>
                    <div class="price">
                        <p>$77.778</p>
                        <a href="#" class="btn-2">Carrito</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/wi-fi.jpeg" alt="">
                <div class="product-txt">
                    <h3>GHi-Fi Rush</h3>
                    <div class="price">
                        <p>$136.000</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/automata.avif" alt="">
                <div class="product-txt">
                    <h3>NieR:Automata The End of YoRHa Edition</h3>
                    <div class="price">
                        <p>$70.000</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
 
    <section id="contact-section" class="contact container">
            <div class="contact-content">
                <h3>Completa tus datos personales</h3>
                <form>
                <a href="xbox.php">
                        <span>Poúlares</span>
                    </a>
                    <a href="AccionXbox.php">
                        <span>Accion</span>
                    </a>
                    <a href="AventuraXbox.php">
                        <span>Aventura</span>
                    </a>
                    <a href="TerrorXbox.php">
                        <span>Terror</span>
                    </a>
                </form>
            </div>
        </section>
    
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const juegoButtons = document.querySelectorAll('.btn-2');
        const carritoIcon = document.querySelector('.carrito-icon');
        const carrito = document.querySelector('.carrito');
        const carritoItems = document.querySelector('.carrito-items');
        const cartCount = document.querySelector('.cart-count');
        const carritoTotal = document.querySelector('.carrito-total');
        const btnVaciar = document.querySelector('.btn-vaciar');

        const carritoData = [];

        function updateCart() {
            carritoItems.innerHTML = '';
            let total = 0;
            carritoData.forEach(item => {
                const carritoItem = document.createElement('div');
                carritoItem.classList.add('carrito-item');
                carritoItem.innerHTML = `
                    <p>${item.name} - $${item.price.toFixed(2)}</p>
                    <button onclick="removeFromCart('${item.name}')">Eliminar</button>
                `;
                carritoItems.appendChild(carritoItem);
                total += item.price;
            });
            carritoTotal.textContent = `Total: $${total.toFixed(2)}`;
            cartCount.textContent = carritoData.length;
        }

        function addToCart(name, price) {
            carritoData.push({ name, price });
            updateCart();
        }

        window.removeFromCart = function(name) {
            const index = carritoData.findIndex(item => item.name === name);
            if (index !== -1) {
                carritoData.splice(index, 1);
            }
            updateCart();
        }

        juegoButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const product = this.closest('.product-1');
                const titulo = product.querySelector('h3').textContent;
                const precio = parseFloat(product.querySelector('.price p').textContent.replace('$', ''));
                addToCart(titulo, precio);
            });
        });

        carritoIcon.addEventListener('click', function() {
            carrito.style.display = carrito.style.display === 'block' ? 'none' : 'block';
        });

        btnVaciar.addEventListener('click', function() {
            if (carritoData.length === 0) {
                alert('El carrito está vacío.');
                return;
            }

            fetch('', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ cartItems: carritoData })
            })
            .then(response => response.text())
            .then(data => {
                alert('Carrito guardado exitosamente.');
                carritoData.length = 0;
                updateCart();
                window.location.href = 'carrito_guardado.php'; // Redireccionar al usuario
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    // Obtener datos del carrito desde la solicitud POST
    $data = json_decode(file_get_contents('php://input'), true);

    if ($data) {
        $cartItems = $data['cartItems'];

        // Obtener el último id_carrito para generar el siguiente
        $sql = "SELECT MAX(id_carrito) AS max_id FROM carrito";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $next_id_carrito = $row['max_id'] + 1;

        // Insertar cada item del carrito con el id_carrito generado
        foreach ($cartItems as $item) {
            $name = $conn->real_escape_string($item['name']);
            $price = $conn->real_escape_string($item['price']);

            // Insertar utilizando el id_carrito generado
            $sql_insert = "INSERT INTO carrito (nombre_producto, precio, id_carrito) VALUES ('$name', '$price', '$next_id_carrito')";

            if ($conn->query($sql_insert) === TRUE) {
                echo "Registro guardado correctamente";
            } else {
                echo "Error: " . $sql_insert . "<br>" . $conn->error;
            }
        }
    }

    $conn->close();
}
?>



</body>
</html>
