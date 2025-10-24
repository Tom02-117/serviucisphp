<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Políticas de la Empresa - Serviucis</title>
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
                    <picture>
                        <source media="(max-width: 768px)" srcset="img/FACHADARENEW1.1.jpg">
                        <img src="img/FACHADARENEW2.jpg" alt="">
                    </picture>
                </div>
                <div class="carousel-slide">
                    <picture>
                        <source media="(max-width: 768px)" srcset="img/LETREROPLANO1.1.jpg">
                        <img src="img/puerta.jpg" alt="">
                    </picture>
                </div>
                <div class="carousel-slide">
                    <picture>
                        <source media="(max-width: 768px)" srcset="img/MONITOREO1.1.jpg">
                        <img src="img/asistencial.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="page-hero-content">
                <h1 class="slide-up">Política de Privacidad</h1>
                <p class="hero-subhead slide-up"></p>
            </div>
        </section>


        <!--  politicas -->
       <div class="document-portal-container">
            <!-- Menú Lateral -->
            <aside class="document-nav">
                <h3>Informes Corporativos</h3>
                <ul>
                    <li><a href="#Políticas" class="doc-nav-link active" data-target="content-Políticas">Manual de Políticas de Protección de Datos Personales</a></li>
                </ul>
            </aside>

            <div class="document-content-area">
                <section id="content-Políticas" class="document-content-section active">
                    <div class="document-header">
                        <h2>Manual de Políticas de Protección de Datos Personales</h2>
                    </div>
                    <div class="document-viewer-wrapper">
                        <iframe data-src="pdf/MANUALDEPOLITICASPROTECCIONDEDATOSPERSONALESVERSIÓN1.pdf" title="Manual de Políticas de Protección de Datos Personales"></iframe>
                    </div>
                </section>
            </div>

        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>