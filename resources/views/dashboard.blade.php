<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Página principal de Barriosoft, tienda en línea de productos variados." />
    <meta name="author" content="Barriosoft" />
    <title>Página inicio - Barriosoft</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="/css/inicio.css" rel="stylesheet" />
    <link rel="icon" href="/img/logo.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/img/logo.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <img src="/img/logo.jpg" alt="Logo Barriosoft" style="width: 60px; height: auto; border-radius: 60%; margin-right: 20px">
            <span class="nav-item">Barriosoft</span>
            <li><a href="sssss">Admin</a></li>
        </div>
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="interfaz_tienda.html">Tienda</a>
                    <div class="dropdown-content">
                        <a href="interfaz_productos_vendidos.html">Productos más vendidos</a>
                        <a href="interfaz_nuevos_productos.html">Nuevos productos</a>
                        <a href="interfaz_productos.html">Todos los productos</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="interfaz_categorias.html">Categorías</a>
                    <div class="dropdown-content">
                        <a href="abarrotes.html">Abarrotes</a>
                        <a href="granos.html">Granos</a>
                        <a href="frutas.html">Frutas</a>
                        <a href="verduras.html">Verduras</a>
                        <a href="productos.html">Productos de Aseo</a>
                    </div>
                </li>
                <li><a href="sobre_nosotros.html">Sobre Nosotros</a></li>
                <li><a href="contacto.html">Contacto</a></li> <!-- Nuevo enlace -->
                <li><a href="faq.html">FAQ</a></li> <!-- Nuevo enlace -->
            </ul>
        </nav>
            
        </nav>
        <span style="margin: 0 250px;"></span>
        <form>
            <button class="estilo-boton" type="button">
                <i  href="carrito.php" class="bi-cart-fill me-1"></i> &nbsp; Carrito
                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
            </button>
        </form> <span style="margin: -12px;"></span>
        @auth
        <ul class="dropdown">
            <a type="email" class="estilo-boton" style="margin-right: 9px" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="bi bi-person me-1"></i>&nbsp; {{ Auth::user()->name }}
            </a>
            <div class="dropdown-content">
                <a href="{{route('profile')}}">Mi cuenta</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    {{ __('Cerrar sesión') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </ul>
        @endauth
    </header>
    
    <div class="carousel">
        <div class="carousel-inner">
            <img src="/img/Supermercado3.jpg" alt="Supermercado">
            <img src="/img/Supermercado2.jpg" alt="Supermercado">
            <img src="/img/Supermercado4.jpg" alt="Supermercado">
            <img src="/img/Supermercado5.jpg" alt="Supermercado">
        </div>
    </div><br>

    <div class="container">
        <h1>Algunos productos</h1>
    </div>

    <section class="Contenido">
        <div class="product-box">
            <img src="/img/Libra de arroz diana.jpg" alt="Libra de arroz - Diana">
            <div class="details">
                <h5>Libra de arroz - Diana</h5>
                <span>2.500$</span>
                <a href="#">Ver detalles</a>
            </div>
        </div>
        <div class="product-box">
            <img src="/img/leche deslactosada.jpg" alt="Paquete x12 bolsa leche - Alquería">
            <div class="details">
                <h5>Paquete x12 bolsa leche - Alquería</h5>
                <span>37.500$</span>
                <a href="#">Ver detalles</a>
            </div>
        </div>
        <div class="product-box">
            <img src="/img/zucaritas.jpg" alt="Caja cereal - Zucaritas">
            <div class="details">
                <h5>Caja cereal - Zucaritas</h5>
                <span>12.500$</span>
                <a href="#">Ver detalles</a>
            </div>
        </div>
        <div class="product-box">
            <img src="/img/papas.jpg" alt="Papas fritas margarita">
            <div class="details">
                <h5>Papas fritas margarita</h5>
                <span>2.000$</span>
                <a href="#">Ver detalles</a>
            </div>
        </div>  
    </section>

    <footer class="footer-container">
        <ul class="redes-sociales-lista">
            <li><a href="#"><img style="width: 60px; height: auto; border-radius: 60%; margin-right: 20px" src="/img/icono fc.jpg" alt="Facebook"></a></li>
            <li><a href="#"><img style="width: 60px; height: auto; border-radius: 60%; margin-right: 20px" src="/img/logo ig.jpg" alt="Instagram"></a></li>
        </ul>
        <div class="redes-sociales-inferior">
            <p>&copy; Barriosoft 2024</p>
        </div>
    </footer>
</body>
</html>

