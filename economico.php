<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asuntos Económicos - Serviucis</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" href="img/logo unidCH.png" type="image/png">
</head>

<body>
    <!-- Menú móvil -->
    <input type="checkbox" id="mobile-menu-toggle">

    <?php include 'header.php'; ?>

    <main>
        <section class="page-hero">
            <div class="carousel">
                <div class="carousel-slide active">
                    <img src="img/FACHADARENEW2.jpg" alt="Fachada de Serviucis">
                </div>
                <div class="carousel-slide">
                    <img src="img/puerta.jpg" alt="Equipo de monitoreo UCI">
                </div>
                <div class="carousel-slide">
                    <img src="img/asistencial.jpg" alt="Equipo de monitoreo UCI">
                </div>
            </div>
            <div class="page-hero-content">
                <h1 class="slide-up">Portal de Transparencia</h1>
                <p class="hero-subhead slide-up">Consulta nuestros informes corporativos. Un reflejo de nuestro
                    compromiso con la buena gobernanza y la sostenibilidad.</p>
            </div>
        </section>

        <div class="document-portal-container">
            <!-- Menú Lateral -->
            <aside class="document-nav">
                <h3>Informes Corporativos</h3>
                <ul>
                    <li><a href="#financieros" class="doc-nav-link active" data-target="content-financieros">Estados
                            Financieros</a></li>
                    <li><a href="#dictamen" class="doc-nav-link" data-target="content-dictamen">Dictamen Revisor
                            Fiscal</a></li>
                    <li><a href="#gestion" class="doc-nav-link" data-target="content-gestion">Informe de Gestión</a>
                    </li>
                </ul>
            </aside>

            <div class="document-content-area">
                <section id="content-financieros" class="document-content-section active">
                    <div class="document-header">
                        <h2>Estados Financieros</h2>
                    </div>
                    <div class="document-viewer-wrapper">
                        <iframe data-src="pdf/estados_financieros_2024_2023.pdf"
                            title="Estados Financieros"></iframe>
                    </div>
                </section>

                <section id="content-dictamen" class="document-content-section">
                    <div class="document-header">
                        <h2>Dictamen del Revisor Fiscal</h2>
                    </div>
                    <div class="document-viewer-wrapper">
                        <iframe data-src="pdf/dictamen_serviucis_2024.pdf"
                            title="Dictamen del Revisor Fiscal"></iframe>
                    </div>
                </section>

                <section id="content-gestion" class="document-content-section">
                    <div class="document-header">
                        <h2>Informe de Gestión</h2>
                    </div>
                    <div class="document-viewer-wrapper">
                        <iframe data-src="pdf/informe_de_gestion_serviucis_sas_2024.pdf"
                            title="Informe de Gestión"></iframe>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>