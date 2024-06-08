<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play</title>
    <link rel="icon" type="text/css" href="media/img/logo.jpeg">
    <link rel="stylesheet" type="text/css" href="css/playestilo.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Play</a>
            <input type="checkbox"  id="menu" />
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Compra todo los <span>juegos</span> <br> que quieras </h1>
                <p>
                    En esta pagina web encontraras todos los juegos de play stations
                </p>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const juegoButtons = document.querySelectorAll('.btn-2');

            juegoButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
                    const destinoInput = document.getElementById('juego');
                    const product = this.closest('.product-1');
                    const titulo = product.querySelector('h3');
                    if (titulo) {
                        destinoInput.value = titulo.textContent;
                    }
                });
            });
        });
    </script>
</body>
</html>

