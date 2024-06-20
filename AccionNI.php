<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nintendo</title>
    <link rel="icon" type="image/jpeg" href="media/img/logo.jpeg">
    <link rel="stylesheet" type="text/css" href="css/nintendoestilo.css">
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
            display: none; /* Oculto por defecto */
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
                        <div class="circulo">
                        </div>
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
        <button class="btn-vaciar">Vaciar Carrito</button>
        <p class="carrito-total">Total: $0</p>
    </div>

    <main>
        <header class="header">
            <div class="menu container">
                <a href="#" class="logo">Nintendo</a>
                <input type="checkbox"  id="menu" />
            </div>
            <div class="header-content container">
                <div class="header-txt">
                    <h1>Compra todos los <span>juegos</span> <br> que quieras </h1>
                    <p>
                        En esta página web encontrarás todos los juegos de Nintendo.
                    </p>
                    <div class="butons">
                        <a href="#contact-section" class="btn-1">Información</a>
                        <a href="#product-content" class="btn-1">Compras</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="popular container">
            <h2>Juegos populares</h2>
            <div class="popular-content">
                <img src="media/img/the-legend-of-zelda-breath-of-the-wild.jpg" alt="">
                <img src="media/img/The-Legend-Zelda-Tears-Kingdom.webp" alt="">
                <img src="media/img/mariow.png" alt="">
                <img src="media/img/super-smash-bros-ultimate.jpg" alt="">
                <img src="media/img/animal-crossing-new-horizons.jpg" alt="">
                <img src="media/img/monster-hunter-rise-deluxe-edition-nintendo-switch-0.jpg" alt="">
                <img src="media/img/pokemon-violet-nintendo-switch-pre-orden-0.jpg" alt="">
            </div>
        </section>

        <section id="product-content" class="product container">
            <h2>Juegos de acción</h2>
            <div class="product-content">
                <div class="product-1">
                    <img src="media/categoria_img/kirby.jpg" alt="">
                    <div class="product-txt">
                        <h3>Kirby’s Dream Buffet™</h3>
                        <div class="price">
                            <p>$73.000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/fire-emblem.jpg" alt="">
                    <div class="product-txt">
                        <h3>Fire Emblem Warriors</h3>
                        <div class="price">
                            <p>$279.000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/bayonetta-3.jpg" alt="">
                    <div class="product-txt">
                        <h3>Bayonetta™ 3</h3>
                        <div class="price">
                            <p>$195.300</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/monster-hunter.avif" alt="">
                    <div class="product-txt">
                        <h3>Monster Hunter Rise + Sunbreak</h3>
                        <div class="price">
                            <p>$89.721</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/it-take.png" alt="">
                    <div class="product-txt">
                        <h3>It Takes Two</h3>
                        <div class="price">
                            <p>$79.999</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/harvestella.webp" alt="">
                    <div class="product-txt">
                        <h3>HARVESTELLA</h3>
                        <div class="price">
                            <p>$38.900</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/nier.webp" alt="">
                    <div class="product-txt">
                        <h3>NieR:Automata The End of YoRHa Edition</h3>
                        <div class="price">
                            <p>$150.000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/hero_sp.jpg" alt="">
                    <div class="product-txt">
                        <h3>Disney Illusion Island</h3>
                        <div class="price">
                            <p>$130.900</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/mutant-ninja.avif" alt="">
                    <div class="product-txt">
                        <h3>Teenage Mutant Ninja Turtles: The Cowabunga Collection</h3>
                        <div class="price">
                            <p>$79.950</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/Minecraft_Switch_29.webp" alt="">
                    <div class="product-txt">
                        <h3>Minecraft</h3>
                        <div class="price">
                            <p>$91.900,00</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-section" class="contact container">
            <div class="contact-content">
                <h3>Completa tus datos personales</h3>
                <form>
                <a href="nintendo.php">
                        <span>Poúlares</span>
                    </a>
                    <a href="AccionNI.php">
                        <span>Accion</span>
                    </a>
                    <a href="AventuraNI.php">
                        <span>Aventura</span>
                    </a>
                    <a href="EstrategiaNI.php">
                        <span>Estrategia</span>
                    </a>
                </form>
            </div>
        </section>
        
        <footer class="footer container">
            <div class="link">
                <a href="#" class="logo">Logo</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Contacto</a></li>
                </ul>
            </div>
        </footer>
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
                        <p>${item.name} - $${item.price}</p>
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
                    const precio = parseFloat(product.querySelector('.price p').textContent.replace('$', '').replace('.', ''));
                    addToCart(titulo, precio);
                });
            });

            carritoIcon.addEventListener('click', function() {
                carrito.style.display = carrito.style.display === 'block' ? 'none' : 'block';
            });

            btnVaciar.addEventListener('click', function() {
                carritoData.length = 0;
                updateCart();
            });
        });
    </script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="js/script.js"></script>
</body>
</html>