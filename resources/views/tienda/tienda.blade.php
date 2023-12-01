<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Tu Tienda de Ropa</title>
</head>
<body>
    <header>
        <div class="video-container">
            <video autoplay loop muted>
                <source src="{{ asset('videos/tu_video.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="overlay"></div>
        <div class="content">
            <h1>Bienvenido a Tu Tienda de Ropa</h1>
        </div>
    </header>

    <section class="ropa-section">
        <h2>Nuestra Colección</h2>
        <div class="tarjetas">
            <div class="tarjeta">
                <img src="{{ asset('images/') }}">
                <h3>Nombre del Producto 1</h3>
                <p>Descripción corta del producto.</p>
            </div>
            <div class="tarjeta">
                <img src="{{ asset('images/') }}" >
                <h3>Nombre del Producto 2</h3>
                <p>Descripción corta del producto.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>Contacto: tu@email.com</p>
    </footer>
</body>
</html>
