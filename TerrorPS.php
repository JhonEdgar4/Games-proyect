<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play</title>
    <link rel="icon" type="text/css" href="media/img/logo.jpeg">
    <link rel="stylesheet" type="text/css" href="css/playestilo.css">
    <link rel="stylesheet" type="text/css" href="css/barralateral.css">
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
                            <dev class="circulo">
                            </dev>
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
                <img src="media/categoria_img/the-evil-within.jpg" alt="">
                <img src="media/categoria_img/village.jpg" alt="">
                <img src="media/categoria_img/until_dawn.webp" alt="">
                <img src="media/categoria_img/Dying-Light-2-Stay-Human.jpg" alt="">
                <img src="media/categoria_img/Little_Nightmares_II.jpg" alt="">
                <img src="media/categoria_img/visage.jpg" alt="">
                <img src="media/categoria_img/resident_evil_2.avif" alt="">
            </div>
        </section>

        <main id="product-content" class="product container">

            <section id="ps4-terror-games" class="product container">
            <h2>Terror PS4</h2>
            <div class="product-content">
                <div class="product-1">
                    <img src="media/categoria_img/resident_evil_2.avif" alt="">
                    <div class="product-txt">
                        <h3>Resident Evil 2</h3>
                        <div class="price">
                            <p>$150,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/resident_evil_7.jpg" alt="">
                    <div class="product-txt">
                        <h3>Resident Evil 7: Biohazard</h3>
                        <div class="price">
                            <p>$120,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/outlast.jpg" alt="">
                    <div class="product-txt">
                        <h3>Outlast</h3>
                        <div class="price">
                            <p>$70,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/until_dawn.webp" alt="">
                    <div class="product-txt">
                        <h3>Until Dawn</h3>
                        <div class="price">
                            <p>$90,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/the-evil-within.jpg" alt="">
                    <div class="product-txt">
                        <h3>The Evil Within 2</h3>
                        <div class="price">
                            <p>$140,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/alien.jpg" alt="">
                    <div class="product-txt">
                        <h3>Alien: Isolation</h3>
                        <div class="price">
                            <p>$110,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/amnesia.jpg" alt="">
                    <div class="product-txt">
                        <h3>Amnesia: Collection</h3>
                        <div class="price">
                            <p>$80,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/layer_of_fear.jpg" alt="">
                    <div class="product-txt">
                        <h3>Layers of Fear</h3>
                        <div class="price">
                            <p>$60,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/soma.jpg" alt="">
                    <div class="product-txt">
                        <h3>Soma</h3>
                        <div class="price">
                            <p>$70,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/dead_by_daylight.jpg" alt="">
                    <div class="product-txt">
                        <h3>Dead by Daylight</h3>
                        <div class="price">
                            <p>$80,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección para juegos de terror de PS5 -->
        <section id="ps5-terror-games" class="product container">
            <h2>Terror PS5</h2>
            <div class="product-content">
                <div class="product-1">
                    <img src="media/categoria_img/village.jpg" alt="">
                    <div class="product-txt">
                        <h3>Resident Evil Village</h3>
                        <div class="price">
                            <p>$230,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/Dying-Light-2-Stay-Human.jpg" alt="">
                    <div class="product-txt">
                        <h3>Dying Light 2 Stay Human</h3>
                        <div class="price">
                            <p>$240,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/medium.jpg" alt="">
                    <div class="product-txt">
                        <h3>The Medium</h3>
                        <div class="price">
                            <p>$200,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/maid_of_sker.jpg" alt="">
                    <div class="product-txt">
                        <h3>Maid of Sker</h3>
                        <div class="price">
                            <p>$150,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/observer-system-redux.jpg" alt="">
                    <div class="product-txt">
                        <h3>Observer: System Redux</h3>
                        <div class="price">
                            <p>$120,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/Little_Nightmares_II.jpg" alt="">
                    <div class="product-txt">
                        <h3>Little Nightmares II</h3>
                        <div class="price">
                            <p>$170,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/the_dark_pictures_anthology_house.jpg" alt="">
                    <div class="product-txt">
                        <h3>House of Ashes (The Dark Pictures Anthology)</h3>
                        <div class="price">
                            <p>$180,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/the_quarry.jpg" alt="">
                    <div class="product-txt">
                        <h3>The Quarry</h3>
                        <div class="price">
                            <p>$220,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/visage.jpg" alt="">
                    <div class="product-txt">
                        <h3>Visage</h3>
                        <div class="price">
                            <p>$160,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="product-1">
                    <img src="media/categoria_img/chernobylite.jpg" alt="">
                    <div class="product-txt">
                        <h3>Chernobylite</h3>
                        <div class="price">
                            <p>$190,000</p>
                            <a href="#" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>

        <section id="contact-section" class="contact container">
            <div class="contact-content">
                <h3>Categorias</h3>
                <form>
                <a href="play.php">
                        <span>Poúlares</span>
                    </a>
                    <a href="AccionPS.php">
                        <span>Accion</span>
                    </a>
                    <a href="TerrorPS.php">
                        <span>Terror</span>
                    </a>
                    <a href="AventuraPS.php">
                        <span>Aventura</span>
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

    <!-- Contenedor del carrito de compras -->
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

