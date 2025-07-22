<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asuntos Económicos - Serviucis</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo unidCH.png" type="image/png">
</head>

<body>
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
                        <img src="img/LETREROPLANO1.jpg" alt="">
                    </picture>
                </div>
                <div class="carousel-slide">
                    <picture>
                        <source media="(max-width: 768px)" srcset="img/MONITOREO1.1.jpg">
                        <img src="img/MONITOREO1.jpg" alt="">
                    </picture>
                </div>
            </div>
            <div class="page-hero-content">
                <h1 class="slide-up">Asuntos Económicos</h1>
                <p class="hero-subhead slide-up">Transparencia y compromiso con la sostenibilidad del sistema de salud.
                </p>
            </div>
        </section>

        <section class="document-section">
            <div class="document-container">
                <!-- Pestañas para seleccionar el documento -->
                <div class="document-tabs">
                    <button class="tab-button active" data-target="financieros">Estados Financieros</button>
                    <button class="tab-button" data-target="dictamen">Dictamen Revisor Fiscal</button>
                    <button class="tab-button" data-target="gestion">Informe de Gestión</button>
                </div>

                <!-- Contenido para Estados Financieros -->
                <div id="financieros" class="document-content active">
                    <div class="document-header">
                        <h2>Estados Financieros 2023-2024</h2>
                    </div>
                    <div class="document-viewer">
                        <iframe src="pdf/estados_financieros_2024_2023.pdf" title="Estados Financieros"></iframe>
                    </div>
                </div>

                <!-- Contenido para Dictamen Revisor Fiscal -->
                <div id="dictamen" class="document-content">
                    <div class="document-header">
                        <h2>Dictamen del Revisor Fiscal 2024</h2>
                    </div>
                    <div class="document-viewer">
                        <iframe data-src="pdf/dictamen_serviucis_2024.pdf"
                            title="Dictamen del Revisor Fiscal"></iframe>
                    </div>
                </div>

                <!-- Contenido para Informe de Gestión -->
                <div id="gestion" class="document-content">
                    <div class="document-header">
                        <h2>Informe de Gestión 2024</h2>
                    </div>
                    <div class="document-viewer">
                        <iframe data-src="pdf/informe_de_gestion_serviucis_sas_2024.pdf"
                            title="Informe de Gestión"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="js/main.js"></script>
    <!-- tch -->
</body>

</html>