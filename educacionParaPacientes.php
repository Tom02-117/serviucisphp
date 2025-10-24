<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación para Pacientes - Serviucis</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" href="img/logo unidCH.png" type="image/png">
</head>

<body>
    <input type="checkbox" id="mobile-menu-toggle">

    <?php include 'header.php'; ?>

    <main>
        <section class="page-hero">
            <div class="carousel">
                <div class="carousel-slide active">
                    <img src="img/FACHADARENEW2.jpg" alt="Fachada de Serviucis">
                </div>
                <div class="carousel-slide">
                    <img src="img/puerta.jpg" alt="Letrero corporativo de Serviucis">
                </div>
                <div class="carousel-slide">
                    <img src="img/asistencial.jpg" alt="Equipo de monitoreo UCI">
                </div>
            </div>
            <div class="page-hero-content">
                <h1 class="slide-up">Educación para Pacientes y Familiares</h1>
                <h2 class="hero-subhead slide-up">Información clave para acompañarle durante su estancia en nuestras
                    unidades.</h2>
            </div>
        </section>

        <!--  politicas -->
        <div class="document-portal-container">
            <!-- Menú Lateral -->
            <aside class="document-nav">
                <h3>Guía para Pacientes y Familiares</h3>
                <ul>
                    <li><a href="#educacion" class="doc-nav-link active" data-target="content-educacion">LAVADO DE MANOS</a></li>
                </ul>
            </aside>

            <div class="document-content-area">
                <section id="content-educacion" class="document-content-section active">
                    <div class="document-header">
                        <h2>LAVADO DE MANOS</h2>
                    </div>
                    <div class="document-viewer-wrapper">
                        <iframe data-src="pdf/educacionweb.pdf"
                            title="Manual de educacion de Protección de Datos Personales"></iframe>
                    </div>
                </section>
            </div>

        </div>
    </main>
    
    <?php include 'footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>