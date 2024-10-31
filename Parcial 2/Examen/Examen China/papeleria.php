<?php
    include "functions.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papelería Horizon</title>
    <link rel="stylesheet" href="css/Papeleria.css">
</head>
<body>
<header>
    <div class="logo">
        <a href="papeleria.php"><img src="imagenes/Papeleria.jpg" alt="Papelería Horizon"></a>
    </div>
    <nav>
        <ul>         <li>
<button id="toggleMusic">🔊 Reproducir Música</button>
<audio id="backgroundAudio" loop>
    <source src="musica/𝘧𝘪𝘧𝘵𝘺-𝘧𝘪𝘧𝘵𝘺--slowed-to-perfection.mp3" type="audio/mp3">
    Tu navegador no soporta audio HTML5.
</audio>
</li>
            <li><a href="papeleria.php">Papelería</a></li>
            <li><a href="productos.php">Catálogo de Productos</a></li>
            <li><a href="vender.php">Vender</a></li>
            <li><a href="index.php">Volver al Inicio</a></li>
   
        </ul>
    </nav>
</header>
<main>
    
    <section id="productos">
        <div class="producto"  id="producto1"> 
            <h2>Lápices de Madera</h2>
            <div class="image-container">
                <img src="imagenes/Lapices.png" alt="Lápices de Madera">
            </div>
            <p>Disfruta de la calidad y suavidad de nuestros lápices de madera. Perfectos para dibujo y escritura.</p>
            <a href="#" class="learn-more-btn" onclick="toggleInformacion('Lápices de Madera', 'Características: Material de madera, HB, Set de 12 unidades. Precio: $5')">Más información</a>
            <p class="product-info lapices-de-madera-info"></p>
        </div>

        <div class="producto"  id="producto2">
            <h2>Lapiceras Gel</h2>
            <div class="image-container">
                <img src="imagenes/lapicera.png" alt="Lápices de Madera">
            </div>
            <p>Nuestras lapiceras de gel ofrecen una escritura suave y duradera, disponibles en varios colores vibrantes.</p>
            <a href="#" class="learn-more-btn" onclick="toggleInformacion('Lapiceras Gel', 'Características: Tinta de gel, Colores surtidos, Set de 5 unidades. Precio: $3')">Más información</a>
            <p class="product-info lapiceras-gel-info"></p>
        </div>

        <div class="producto"  id="producto3">
            <h2>Colores de Madera</h2>
            <div class="image-container">
                <img src="imagenes/colores.png" alt="Lápices de Madera">
            </div>
            <p>Colores de alta calidad que permiten lograr trazos intensos y precisos para tus dibujos.</p>
            <a href="#" class="learn-more-btn" onclick="toggleInformacion('Colores de Madera', 'Características: Set de 24 colores, calidad profesional. Precio: $10')">Más información</a>
            <p class="product-info colores-de-madera-info"></p>
        </div>

        <div class="producto" id="producto4">
            <h2>Borradores</h2>
            <div class="image-container">
                <img src="imagenes/borrador.png" alt="Lápices de Madera">
            </div>
            <p>Borradores de alta calidad que permiten lograr trazos intensos y precisos para tus dibujos.</p>
            <a href="#" class="learn-more-btn" onclick="toggleInformacion('Borradores', 'Características: Set de 24 , calidad profesional. Precio: $5')">Más información</a>
            <p class="product-info colores-de-madera-info"></p>
        </div>

        <div class="producto" id="producto5">
            <h2>Sacapuntas</h2>
            <div class="image-container">
                <img src="imagenes/sacapuntas.png" alt="Lápices de Madera">
            </div>
            <p>Sacapuntas de alta calidad que permiten lograr sacar puntas a tu lapiz para trazos intensos y precisos para tus dibujos.</p>
            <a href="#" class="learn-more-btn" onclick="toggleInformacion('Sacapuntas', 'Características: Set de 24 , calidad profesional. Precio: $5')">Más información</a>
            <p class="product-info colores-de-madera-info"></p>
        </div>

        <div class="producto" id="producto6">
            <h2>Tijeras</h2>
            <div class="image-container">
                <img src="imagenes/tijeras.png" alt="Lápices de Madera">
            </div>
            <p>Tijeras de alta calidad que permiten Cortar trazos intensos y precisos para tus dibujos.</p>
            <a href="#" class="learn-more-btn" onclick="toggleInformacion('Tijeres', 'Características: Set de 24 colores, calidad profesional. Precio: $10')">Más información</a>
            <p class="product-info colores-de-madera-info"></p>
        </div>

        <div class="producto"  id="producto7">
            <h2>Pegamento</h2>
            <div class="image-container">
                <img src="imagenes/pegamento.png" alt="Lápices de Madera">
            </div>
            <p>Pegamento de alta calidad que permiten lograr pegar tus dibujos a trazos intensos y precisos para tus dibujos.</p>
            <a href="#" class="learn-more-btn" onclick="toggleInformacion('Pegamento', 'Características: Set de 5, calidad profesional. Precio: $8')">Más información</a>
            <p class="product-info colores-de-madera-info"></p>
        </div>

    </section>
</main>
<footer>
    <p>&copy; 2024 Daniel y Ramon. Todos los derechos reservados.</p>
</footer>
<script>
    function toggleInformacion(producto, especificaciones) {
        var infoContainer = document.querySelector("." + producto.toLowerCase().replace(/\s+/g, "-") + "-info");

        if (infoContainer.style.display === "none" || infoContainer.style.display === "") {
            infoContainer.textContent = especificaciones;
            infoContainer.style.display = "block";
        } else {
            infoContainer.textContent = "";
            infoContainer.style.display = "none";
        }
    }
</script>
<script src="script.js"></script>
</body>
</html>
