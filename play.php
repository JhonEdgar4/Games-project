<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play</title>
    <link rel="icon" type="text/css" href="media/img/logo.jpeg">
    <link rel="stylesheet" type="text/css" href="css/playestilo.css">
    <style>
        /* Estilos adicionales para el carrito de compras */
        .container-icon { position: relative; cursor: pointer; }
        .icon-cart { width: 25px; height: 25px; color: #fff; }
        .count-products { position: absolute; top: -10px; right: -10px; background-color: #ff5a2c; color: #fff; padding: 5px 10px; border-radius: 50%; font-size: 14px; }
        .hidden { display: none; }
        .container-cart-products { position: fixed; top: 60px; right: 20px; width: 300px; background-color: #2a223a; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); padding: 20px; z-index: 1000; }
        .hidden-cart { display: none; }
        .cart-empty { text-align: center; color: #fff; }
        .cart-product { display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; }
        .info-cart-product { display: flex; flex-direction: column; color: #fff; }
        .icon-close { width: 20px; height: 20px; cursor: pointer; color: #ff5a2c; }
        .cart-total { display: flex; justify-content: space-between; align-items: center; margin-top: 20px; color: #fff; }
    </style>
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Play</a>
            <input type="checkbox" id="menu" />
            <div class="container-icon">
                <svg class="icon-cart" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l1.24-4.99L18 4H6.4M7 13L5.6 8.4M7 13h1.34m-1.34 0h-.22l-.24-1M10 21a1 1 0 100-2 1 1 0 000 2zm7 0a1 1 0 100-2 1 1 0 000 2z" />
                </svg>
                <div class="count-products hidden" id="contador-productos">0</div>
            </div>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Compra todo los <span>juegos</span> <br> que quieras </h1>
                <p>En esta pagina web encontraras todos los juegos de play stations</p>
                <div class="butons">
                    <a href="#contact-section" class="btn-1">Informacion</a>
                    <a href="#product-content" class="btn-1">Compras</a>
                </div>
            </div>
        </div>
    </header>

    <section class="popular container">
        <h2>juegos populare</h2>
        <div class="popular-content">
            <img src="media/img/god.png" alt="">
            <img src="media/img/ratchet-clank-una-dimension-aparte.jpg" alt="">
            <img src="media/img/residenevil.jpg" alt="">
            <img src="media/img/mk1.jpg" alt="">
            <img src="media/img/street.jpeg" alt="">
            <img src="media/img/spiderman.jpg" alt="">
            <img src="media/img/Horizon.jpg" alt="">
        </div>
    </section>

    <main id="product-content" class="product container">
        <h2>Todos los juegos que puedes comprar</h2>
        <div class="product-content">
            <div class="product-1">
                <img src="media/img/war.jpg.jpeg" alt="">
                <div class="product-txt">
                    <h3>god of war</h3>
                    <div class="price">
                        <p>$79.900</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/ratchet-and-clank.jpg" alt="">
                <div class="product-txt">
                    <h3>ratchet and clank</h3>
                    <div class="price">
                        <p>$74.900</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/maxresdefault.jpg" alt="">
                <div class="product-txt">
                    <h3>residen evil 4</h3>
                    <div class="price">
                        <p>$64.900</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/MK1-Announce.webp" alt="">
                <div class="product-txt">
                    <h3>Mortal kombat 1</h3>
                    <div class="price">
                        <p>$65.000</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/streetfigter.jpg" alt="">
                <div class="product-txt">
                    <h3>street fighter 6</h3>
                    <div class="price">
                        <p>$180.284</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/marvels-spiderman-2.jpg" alt="">
                <div class="product-txt">
                    <h3>spiderman 2</h3>
                    <div class="price">
                        <p>$94.900</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/hzd.jpg" alt="">
                <div class="product-txt">
                    <h3>Horizon</h3>
                    <div class="price">
                        <p>$49.900</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/uncharted.webp" alt="">
                <div class="product-txt">
                    <h3>uncharted</h3>
                    <div class="price">
                        <p>$80.000</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/tlou.jpg" alt="">
                <div class="product-txt">
                    <h3>THE LAST OF US REMASTERED</h3>
                    <div class="price">
                        <p>$39.900</p>
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
                <input type="text" id="juego" name="juego" placeholder="Juego">
                <input type="text" placeholder="Nombre">
                <input type="text" placeholder="Número de identificación">
                <input type="email" placeholder="Correo electrónico">
                <select>
                    <option value="" disabled selected>Selecciona tu método de pago</option>
                    <option value="tarjeta">Tarjeta de crédito/débito</option>
                    <option value="paypal">PayPal</option>
                    <option value="transferencia">Transferencia bancaria</option>
                </select>
                <input type="submit" class="btn-3" value="Enviar">
            </form>
        </div>
    </section>

    <footer class="footer container">
        <div class="link">
            <a href="#" class="logo">Logo</a>
        </div>
        <div class="link">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="Registrarse.html">Ingresar / Resgistrarse</a></li>
                <li><a href="Contactenos.html">Contacto</a></li>
            </ul>
        </div>
    </footer>

    <!-- Contenedor del carrito de compras -->
    <div class="container-cart-products hidden-cart" id="carrito">
        <div class="cart-empty" id="cart-empty">
            <p>El carrito está vacío</p>
        </div>
        <div class="cart-products" id="lista-carrito"></div>
        <div class="cart-total" id="total-pagar">
            <p>Total:</p>
            <p>$0.00</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const juegoButtons = document.querySelectorAll('.btn-2');
            const iconCart = document.querySelector('.icon-cart');
            const carrito = document.getElementById('carrito');
            const contadorProductos = document.getElementById('contador-productos');
            const listaCarrito = document.getElementById('lista-carrito');
            const totalPagar = document.getElementById('total-pagar').lastElementChild;

            let carritoProductos = [];

            iconCart.addEventListener('click', () => {
                carrito.classList.toggle('hidden-cart');
            });

            const agregarAlCarrito = (titulo, precio) => {
                const productoExistente = carritoProductos.find(producto => producto.titulo === titulo);
                if (productoExistente) {
                    productoExistente.cantidad++;
                } else {
                    carritoProductos.push({ titulo, precio, cantidad: 1 });
                }
                actualizarCarrito();
            };

            const actualizarCarrito = () => {
                listaCarrito.innerHTML = '';
                carritoProductos.forEach(producto => {
                    const productoHTML = `
                        <div class="cart-product">
                            <div class="info-cart-product">
                                <span class="titulo-producto-carrito">${producto.titulo}</span>
                                <span class="cantidad-producto-carrito">${producto.cantidad}</span>
                                <span class="precio-producto-carrito">$${producto.precio}</span>
                            </div>
                            <svg class="icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    `;
                    listaCarrito.insertAdjacentHTML('beforeend', productoHTML);
                });
                actualizarTotal();
                actualizarContador();
            };

            const actualizarTotal = () => {
                const total = carritoProductos.reduce((acc, producto) => acc + (producto.precio * producto.cantidad), 0);
                totalPagar.textContent = `$${total.toFixed(2)}`;
            };

            const actualizarContador = () => {
                const totalProductos = carritoProductos.reduce((acc, producto) => acc + producto.cantidad, 0);
                contadorProductos.textContent = totalProductos;
                contadorProductos.classList.toggle('hidden', totalProductos === 0);
            };

            listaCarrito.addEventListener('click', (e) => {
                if (e.target.classList.contains('icon-close')) {
                    const tituloProducto = e.target.closest('.cart-product').querySelector('.titulo-producto-carrito').textContent;
                    carritoProductos = carritoProductos.filter(producto => producto.titulo !== tituloProducto);
                    actualizarCarrito();
                }
            });

            juegoButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const producto = button.closest('.product-1');
                    const titulo = producto.querySelector('h3').textContent;
                    const precio = parseFloat(producto.querySelector('.price p').textContent.replace('$', '').replace('.', ''));
                    agregarAlCarrito(titulo, precio);
                });
            });
        });
    </script>
</body>
</html>

