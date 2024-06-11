<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nintendo</title>
    <link rel="icon" type="text/css" href="media/img/logo.jpeg">
    <link rel="stylesheet" type="text/css" href="css/nintendoestilo.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Nintendo</a>
            <input type="checkbox"  id="menu" />
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Compra todo los <span>juegos</span> <br> que quieras </h1>
                <p>
                    En esta pagina web encontraras todos los juegos de nintendo
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
            <img src="media/img/the-legend-of-zelda-breath-of-the-wild.jpg" alt="">
            <img src="media/img/The-Legend-Zelda-Tears-Kingdom.webp" alt="">
            <img src="media/img/mariow.png" alt="">
            <img src="media/img/super-smash-bros-ultimate.jpg" alt="">
            <img src="media/img/animal-crossing-new-horizons.jpg" alt="">
            <img src="media/img/monster-hunter-rise-deluxe-edition-nintendo-switch-0.jpg" alt="">
            <img src="media/img/pokemon-violet-nintendo-switch-pre-orden-0.jpg" alt="">
        </div>
    </section>
    <main id="product-content" class="product container">
        <h2>Todos los juegos que puedes comprar</h2>
        <div class="product-content">
            <div class="product-1">
                <img src="media/img/breath.avif" alt="">
                <div class="product-txt">
                    <h3>The Legend of Zelda™: Breath of the Wild</h3>
                    <div class="price">
                        <p>$79.900</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/tears.avif" alt="">
                <div class="product-txt">
                    <h3>The Legend of Zelda™: Tears of the Kingdom</h3>
                    <div class="price">
                        <p>$144.000</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/wonder.avif" alt="">
                <div class="product-txt">
                    <h3>Super Mario Bros.™ Wonder</h3>
                    <div class="price">
                        <p>$198.000</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/smash.avif" alt="">
                <div class="product-txt">
                    <h3>Super Smash Bros.™ Ultimate</h3>
                    <div class="price">
                        <p>$139.000</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/newhorizons.avif" alt="">
                <div class="product-txt">
                    <h3>Animal Crossing™: New Horizons</h3>
                    <div class="price">
                        <p>$123.000</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/rise.avif" alt="">
                <div class="product-txt">
                    <h3>Monster Hunter Rise</h3>
                    <div class="price">
                        <p>$38.900</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/violet.avif" alt="">
                <div class="product-txt">
                    <h3>Pokémon™ Violet</h3>
                    <div class="price">
                        <p>$192.044</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/scarlet.avif" alt="">
                <div class="product-txt">
                    <h3>Pokémon™ Scarlet</h3>
                    <div class="price">
                        <p>$130.000</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="media/img/automata.avif" alt="">
                <div class="product-txt">
                    <h3>NieR:Automata The End of YoRHa Edition</h3>
                    <div class="price">
                        <p>$116.884</p>
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
                <input type="text" id="Juego" name="Juego" placeholder="Juego">
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
                    const JuegoInput = document.getElementById('Juego');
                    const product = this.closest('.product-1');
                    const titulo = product.querySelector('h3');
                    if (titulo) {
                        JuegoInput.value = titulo.textContent;
                    }
                });
            });
        });
    </script>
</body>
</html>