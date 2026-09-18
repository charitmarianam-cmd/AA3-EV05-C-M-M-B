<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- METADATOS VISIBLES EN INSPECCIONAR (F12) -->
  <meta name="author" content="Mariana Martínez" />
  <meta name="ficha" content="3230905" />
  <meta name="programa" content="Análisis y Desarrollo de Software (ADSO)" />
  <meta name="proyecto" content="MULTISERVICIOS OMEGA M.F. S.A.S." />
  
  <title>MULTISERVICIOS OMEGA M.F. S.A.S.</title>
  <link rel="stylesheet" href="css/estilos.css" />
</head>

<body>
  <!-- COMENTARIO VISIBLE AL INSPECCIONAR ELEMENTOS -->
  <!-- 
    PROYECTO ADSO: MULTISERVICIOS OMEGA M.F. S.A.S.
    DESARROLLADORA: Mariana Martínez
    FICHA SENA: 3230905
  -->

  <header id="inicio" class="encabezado">
    <h1>Mi proyecto ADSO de MULTISERVICIOS OMEGA M.F. S.A.S.</h1>
    <p>Mariana Martínez — Ficha: 3230905</p>
  </header>

  <nav class="navbar">
    <div class="logo">
      <img src="./img/LOGO MULTISERVICIOS.png" alt="Logo de MULTISERVICIOS OMEGA" id="img-logo">
    </div>

    <!-- Botón hamburguesa -->
    <button class="menu-toggle" id="menu-toggle">
      ☰
    </button>

    <!-- Menú de navegación con anclas internas -->
    <ul class="nav-menu" id="nav-menu">
      <li><a href="#inicio">Inicio</a></li>
      <li><a href="#productos">Productos</a></li>
      <li><a href="#categorias">Categorías</a></li>
      <li><a href="#nosotros">Nosotros</a></li>
      <li><a href="#servicios">Servicios</a></li>
      <li><a href="#contacto">Contacto</a></li>
      <li><a href="#carrito">🛒 Carrito</a></li>
      <li><a href="#login">🔐 Iniciar sesión</a></li>
    </ul>
  </nav>

  <main class="contenido">
    
    <!-- SECCIÓN: SOBRE EL PROYECTO -->
    <section id="sobre" class="caja">
      <h2>📖 MULTISERVICIOS OMEGA M.F. S.A.S.</h2>
      <p>MULTISERVICIOS OMEGA M.F. S.A.S. es una tienda virtual creada para ofrecer una experiencia de compra segura, sencilla y confiable. Nuestro proyecto busca brindar productos de alta calidad en papelería, suministros de oficina, tecnología, electrodomésticos, deportes y material educativo, facilitando a los clientes encontrar y adquirir sus productos de manera rápida y cómoda.</p>
    </section>

    <!-- SECCIÓN: PRODUCTOS -->
    <section id="productos" class="caja">
      <h2>📦 Productos que ofrece MULTISERVICIOS OMEGA M.F. S.A.S.</h2>
      <p>✏️ Suministros de papelería: cuadernos, carpetas y artículos de oficina.</p>
      <p>💻 Equipos de cómputo: accesorios, teclados, mouses y periféricos.</p>
      <p>🔌 Electrodomésticos: artículos para el hogar y uso diario.</p>
      <p>⚽ Artículos deportivos: balones y equipamiento recreativo.</p>
      <p>📚 Material educativo: libros, juegos didácticos y útiles escolares.</p>
    </section>

    <!-- SECCIÓN: CATEGORÍAS -->
    <section id="categorias" class="caja">
      <h2>🗂️ Categorías Principales</h2>
      <p>📂 <strong>Papelería y Oficina:</strong> Hojas, archivadores, esferos y suministros escolares.</p>
      <p>💻 <strong>Tecnología y Cómputo:</strong> Impresoras, cables, almacenamiento y periféricos.</p>
      <p>🏠 <strong>Hogar y Electrodomésticos:</strong> Pequeños electrodomésticos y herramientas.</p>
      <p>⚽ <strong>Deportes y Recreación:</strong> Implementos deportivos y accesorios.</p>
    </section>

    <!-- SECCIÓN: NOSOTROS -->
    <section id="nosotros" class="caja">
      <h2>🏢 Sobre Nosotros</h2>
      <p>Somos una empresa dedicada a la comercialización integral de productos y servicios para el sector educativo, empresarial y del hogar en La Dorada y la región, enfocados en brindar calidad, rapidez y excelente atención.</p>
    </section>

    <!-- SECCIÓN: SERVICIOS -->
    <section id="servicios" class="caja">
      <h2>👩‍💻 Servicios que ofrece MULTISERVICIOS OMEGA M.F. S.A.S.</h2>
      <p>🛍️ Venta de productos de papelería, tecnología, hogar y oficina.</p>
      <p>🔒 Compra de productos de forma fácil y segura.</p>
      <p>🔎 Catálogo de productos con información, precios y categorías.</p>
      <p>📦 Consulta de disponibilidad de productos en inventario.</p>
      <p>🛒 Gestión eficiente de pedidos y compras.</p>
      <p>👤 Registro, autenticación y atención de clientes.</p>
      <p>🔐 Compra segura y protección de los datos del cliente.</p>
      <p>💬 Atención personalizada para asesorar en las compras.</p>
    </section>

    <!-- SECCIÓN: CONTACTO -->
    <section id="contacto" class="caja">
      <h2>✏️ Información de Contacto</h2>
      <p>Atención directa para cotizaciones y asesoría en tus compras.</p>
      <ul>
        <li>☎︎ Teléfono: 312 345 6789</li>
        <li>✉︎ Correo: multiserviciosomegamf@gmail.com</li>
      </ul>
    </section>

    <!-- SECCIÓN: CARRITO -->
    <section id="carrito" class="caja">
      <h2>🛒 Carrito de Compras</h2>
      <p>Aquí se listarán los productos seleccionados para la compra con sus respectivas cantidades y total a pagar.</p>
    </section>

    <!-- SECCIÓN: LOGIN -->
    <section id="login" class="caja">
      <h2>🔐 Iniciar Sesión</h2>
      <p>Acceso seguro para clientes y administradores de MULTISERVICIOS OMEGA M.F. S.A.S.</p>
    </section>

    <!-- LATERAL: DATOS DEL PROYECTO -->
    <aside class="caja lateral">
      <h2>📒 Datos del Proyecto</h2>
      <p>Programa: ADSO</p>
      <p>Ficha: 3230905</p>
      <p>Fecha: 04/09/2026</p>
    </aside>

  </main>

  <footer class="pie">
    <p>SENA · ADSO — Mariana Martínez - Fecha: 04/09/2026</p>
  </footer>

  <script>
    // Menú hamburguesa
    const menuToggle = document.getElementById("menu-toggle");
    const navMenu = document.getElementById("nav-menu");

    menuToggle.addEventListener("click", function () {
      navMenu.classList.toggle("active");
    });

    // Cierre del menú responsive al seleccionar un enlace
    document.querySelectorAll('.nav-menu a').forEach(link => {
      link.addEventListener('click', () => {
        navMenu.classList.remove('active');
      });
    });

    // Información visible en consola al presionar F12
    console.log("%c MULTISERVICIOS OMEGA M.F. S.A.S. ", "background: #003366; color: #ffffff; font-size: 14px; font-weight: bold; padding: 4px 8px; border-radius: 4px;");
    console.log("Desarrolladora: Mariana Martínez");
    console.log("Ficha SENA: 3230905");
    console.log("Programa: Análisis y Desarrollo de Software (ADSO)");
  </script>
</body>

</html>