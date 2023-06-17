<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <title>La piñatera</title>
</head>
<body>
    <header>
        <div class="container">
            <img src="imagenes/1.jpg" alt="logo">
            <div class="buscar">
                <input type="text" placeholder="Buscar...">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <input type="submit" value="Iniciar sesion" onclick="window.location.href='login.php'">
            <nav>
                <i class="fa-solid fa-cart-shopping">
                    <div class="buy-card">
                        <ul class="nav-card">
                            <li>Nombre</li>
                            <li>Referencia</li>
                            <li>Precio</li>
                        </ul>
                        <button>Vaciar carrito</button>
                    </div>
                </i>
            </nav>
        </div>
    </header>
    <header>
    <nav class="nav-secundario">
        <div class="link-secundarios izquierda">
            <a href=""><b>Inicio</b></a>
        </div>
        <div class="link-secundarios">
            <a href=""><b>Por tema</b></a>
        </div>
        <div class="link-secundarios">
            <a href=""><b>Regalos</b></a>
        </div>
        <div class="link-secundarios">
            <a href=""><b>Catalogo</b></a>
        </div>
        <div class="link-secundarios derecha">
            <a href=""><b>Contactenos</b></a>
        </div>
    </nav>
    </header>
    <div class="carusel">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/2.jpg" class="d-block w-100" height="442px" alt="imagen1">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/7.jpg" class="d-block w-100" height="442px" alt="imagen2">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/3.jpg" class="d-block w-100" height="442px" alt="imagen3">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/4.jpg" class="d-block w-100" height="442px" alt="imagen4">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/5.jpg" class="d-block w-100" height="442px" alt="imagen5">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/6.jpg" class="d-block w-100" height="442px" alt="imagen6">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <br>
    <h1>Servicios</h1>
    <center><hr></center>
        <div class="container2">
            <div class="card">
                <img src="Imagenes/8.jpg">
                <h4>Piñateria</h4>
            </div>
            <div class="card">
                <img src="Imagenes/10.jpg">
                <h4>Eventos</h4>
            </div>
            <div class="card">
                <img src="Imagenes/9.jpg">
                <h4>Mugs personalizados</h4>
            </div>
            <div class="card">
                <img src="Imagenes/11.jpg">
                <h4>Corte a laser</h4>
            </div>
        </div>
    <h1>Algunos productos</h1>
    <center><hr></center>
    <div class="container3">
            <div class="card">
                <img src="Imagenes/95.jpg">
                <h6>Globo Metalizado de Cumpleaños</h6>
                <div class="informacion">
                    <p>Ref: 13781</p>
                    <h5><b>$5.800</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/21.jpg">
                <h6>Sombrero Cartón Vueltiao</h6>
                <div class="informacion">
                    <p>Ref: 56689</p>
                    <h5><b>$2.500</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/104.jpg">
                <h6>Caja de Cartón Mediana para Regalo</h6>
                <div class="informacion">
                    <p>Ref: 48457</p>
                    <h5><b>$4.100</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/100.jpg">
                <h6>Festón de Cumpleaños en Cartón</h6>
                <div class="informacion">
                    <p>Ref: 67428</p>
                    <h5><b>$5.400</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/34.jpg">
                <h6>Corbata stas wars</h6>
                <div class="informacion">
                    <p>Ref: 74535</p>
                    <h5><b>$3.900</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/99.jpg">
                <h6>Globo Metalizado “Baby Shower”</h6>
                <div class="informacion">
                    <p>Ref: 65393</p>    
                    <h5><b>$6.100</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/101.jpg">
                <h6>Globo Metalizado de Baby Shower</h6>
                <div class="informacion">
                    <p>Ref: 73234</p>
                    <h5><b>$6.100</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/41.jpg">
                <h6>Plato Fondo Entero Azul Real</h6>
                <div class="informacion">
                    <p>Ref: 52150</p>
                    <h5><b>$12.900</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/45.jpg">
                <h6>Globo Emoticones Carita Beso</h6>
                <div class="informacion">
                    <p>Ref: 28331</p>
                    <h5><b>$2.000</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/94.jpeg">
                <h6>Pitillos de Papel</h6>
                <div class="informacion">
                    <p>Ref: 39926</p>
                    <h5><b>$3.200</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/38.jpg">
                <h6>Mantel Plástico Fondo Entero Rojo</h6>
                <div class="informacion">
                    <p>Ref: 91777</p>
                    <h5><b>$5.000</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/32.jpg">
                <h6>Corbata Polka Roja</h6>
                <div class="informacion">
                    <p>Ref: 21105</p>
                    <h5><b>$4.000</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/42.jpg">
                <h6>Servilleta Fondo Entero Azul Real</h6>
                <div class="informacion">
                    <p>Ref: 43287</p>
                    <h5><b>$3.500</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/62.jpg">
                <h6>Bolsa Piñata Plástico</h6>
                <div class="informacion">
                    <p>Ref: 21458</p>
                    <h5><b>$1.050</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/27.jpg">
                <h6>Piñata free fire</h6>
                <div class="informacion">
                    <p>Ref: 78349</p>
                    <h5><b>$14.400</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/26.jpg">
                <h6>Globo Corazón Rojo</h6>
                <div class="informacion">
                    <p>Ref: 89100</p>
                    <h5><b>$2.200</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/77.jpg">
                <h6>Espantasuegras</h6>
                <div class="informacion">
                    <p>Ref: 40169</p>
                    <h5><b>$4.200</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/109.jpg">
                <h6>Vela de Cumpleaños Diseño Feliz Cumpleaños</h6>
                <div class="informacion">
                    <p>Ref: 17536</p>
                    <h5><b>$5.100</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/111.jpeg">
                <h6>Pegatina Decorativa Infantil</h6>
                <div class="informacion">
                    <p>Ref: 89973</p>
                    <h5><b>$8.500</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/105.jpg">
                <h6>Caja de Cartón Pequeña</h6>
                <div class="informacion">
                    <p>Ref: 16112</p>
                    <h5><b>$2.000</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/57.jpg">
                <h6>Espantasuegras Azul Fucsia</h6>
                <div class="informacion">
                    <p>Ref: 66208</p>
                    <h5><b>$1.050</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/52.jpg">
                <h6>Pelotas Antiestrés Emojis</h6>
                <div class="informacion">
                    <p>Ref: 63811</p>
                    <h5><b>$2.100</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/35.jpg">
                <h6>Vaso Whisky</h6>
                <div class="informacion">
                    <p>Ref: 43859</p>
                    <h5><b>$11.500</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/17.jpg">
                <h6>Letrero Feliz Cumpleaños</h6>
                <div class="informacion">
                    <p>Ref: 70652</p>
                    <h5><b>$3.150</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/89.jpg">
                <h6>Globos Metalizados en Látex</h6>
                <div class="informacion">
                    <p>Ref: 26479</p>
                    <h5><b>$6,200</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/31.jpg">
                <h6>Mantel Plástico Polka Rojo</h6>
                <div class="informacion">
                    <p>Ref: 46802</p>
                    <h5><b>$6.900</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/48.jpg">
                <h6>Globo Metalizado Corazón</h6>
                <div class="informacion">
                    <p>Ref: 19859</p>
                    <h5><b>$4.000</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/87.jpg">
                <h6>Vela de Cumpleaños Diseño Feliz Cumpleaños</h6>
                <div class="informacion">
                    <p>Ref: 22952</p>
                    <h5><b>$5.100</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/96.jpg">
                <h6>Vela de Cumpleaños Diseño Cajas de Regalos</h6>
                <div class="informacion">
                    <p>Ref: 98254</p>
                    <h5><b>$5,100</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/55.jpg">
                <h6>Espantasuegras Azul Fucsia</h6>
                <div class="informacion">
                    <p>Ref: 83726</p>
                    <h5><b>$1.050</b></h5>
                    <input type="submit" value="Añadir al carrito">
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="imagenes/1.jpg" alt="logo la piñatera">
                        </a>
                    </figure>
                </div>
                <div class="box">
                    <h2>SOBRE NOSOTROS</h2>
                    <p>Somos una empresa que desde hace varios años nos dedicamos a la fabricación y venta de productos de piñatas y también nos dedicamos a hacer todo tipo de eventos para toda ocasión. Si estas interesad@ visitanos te vamos a recibir con los brazos abiertos dispuestos a escucharte y ayudarte en lo que necesites para tus celebraciones.</p>
                </div>
                <div class="box">
                    <h2>SIGUENOS</h2>
                    <div class="red-social">
                        <a href="https://api.whatsapp.com/send?phone=%2B573203730040&data=ARCkgijjQCV_7GUIHE0CdZkl6HGFDUYVrGjXTfZIBQaZMP_8hbjb-Qk2hzzky4ewXIRqpIGFqD0rFELulumSempehSQuYWYS2nyhvh_9j39xFm_zpTcfizqH7fF9QVXWDDLUeVRSKugZx2ylEI42uDa24A&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwAR1Uk3LRPENyAeFyWND0B6lQe23VeQ-_zfPL5mOsxIujIgzlki2XwhuPpWA" class="fa fa-whatsapp"></a>
                        <a href="https://www.facebook.com/lapinateraonline" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/lapinatera1/" class="fa fa-instagram"></a>
                        <a href="https://www.tiktok.com/@lapinatera1" class="fa-brands fa-tiktok"></a>
                    </div>
                </div>
            </div>
            <div class="grupo-2">
                <small>&copy; 2023 <b>La piñatera</b> - Todos los derechos son reservados.</small>
            </div>
        </div>
    </footer>
</body>
</html>