<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzón PQRSD - Serviucis</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" href="img/logo unidCH.png" type="image/png">
</head>

<body>
    <!--  menu movil -->
    <input type="checkbox" id="mobile-menu-toggle">

    <?php include 'header.php'; ?>

    <main>
        <section class="page-hero">
            <div class="carousel">
                <div class="carousel-slide active">
                    <img src="img/FACHADARENEW2.jpg">
                </div>
                <div class="carousel-slide">
                    <img src="img/puerta.jpg">
                </div>
                <div class="carousel-slide">
                    <img src="img/asistencial.jpg">
                </div>
            </div>
            <div class="page-hero-content">
                <h1 class="slide-up">Estamos aquí para Escucharte</h1>
                <p class="hero-subhead slide-up">Tu voz es fundamental para nuestra mejora continua. Utiliza este espacio para registrar tus peticiones, quejas, reclamos, sugerencias o denuncias.</p>
            </div>
        </section>

        <!-- Sección de Proceso -->
        <section class="commitment-section">
            <div class="container">
                <h2 class="section-heading hidden">Nuestro Proceso</h2>
                <div class="commitment-grid">
                    <!-- Paso 1 -->
                    <div class="commitment-card hidden">
                        <div class="commitment-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        </div>
                        <h3>1. Registro de tu Solicitud</h3>
                        <p>Completa el formulario con tus datos de contacto y una descripción clara y detallada de tu caso.</p>
                    </div>
                    <!-- Paso 2 -->
                    <div class="commitment-card hidden">
                        <div class="commitment-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <h3>2. Análisis por Nuestro Equipo</h3>
                        <p>Tu solicitud será asignada al área correspondiente para ser estudiada con la atención y el rigor que merece.</p>
                    </div>
                    <!-- Paso 3 -->
                    <div class="commitment-card hidden">
                        <div class="commitment-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <h3>3. Respuesta y Seguimiento</h3>
                        <p>Recibirás una notificación y respuesta a tu caso a través de los datos de contacto que nos proporcionaste.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección del Formulario -->
        <section class="about-content" style="background-color: var(--background-white);">
            <div class="sugerencia-container">
                <h2 class="section-heading">Registra tu Solicitud</h2>
                <div id="success-message"
                    style="display:none; background-color: #d1e7dd; color: #0f5132; border: 1px solid #badbcc; padding: 1rem; border-radius: 12px; margin-bottom: 1.5rem; text-align: center;">
                </div>
                <form id="contact-form" action="https://formspree.io/f/xblywbyn" method="POST">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" required>

                    <label for="tipo-solicitud">Tipo de Solicitud</label>
                    <div class="select-wrapper">
                        <select id="tipo-solicitud" name="tipo-solicitud" required>
                            <option value="" disabled selected>Seleccione una opción...</option>
                            <option value="Peticion">Petición</option>
                            <option value="Queja">Queja</option>
                            <option value="Reclamo">Reclamo</option>
                            <option value="Sugerencia">Sugerencia</option>
                            <option value="Denuncia / Inquietud">Denuncia / Inquietud</option>
                        </select>
                    </div>

                    <label for="message">Mensaje</label>
                    <textarea id="message" name="message" placeholder="Describe tu caso con el mayor detalle posible..." required></textarea>

                    <button type="submit" class="btn">Enviar Solicitud</button>
                </form>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    
    <script src="js/main.js"></script>
</body>

</html>
