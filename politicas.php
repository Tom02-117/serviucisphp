<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Políticas de la Empresa - Serviucis</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo unidCH.png" type="image/png">
</head>

<body>
    <!--  menu movil -->
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
                <h1 class="slide-up">Política de Privacidad</h1>
                <p class="hero-subhead slide-up"></p>
            </div>
        </section>


        <!--  politicas -->
        <section class="document-section">
            <div class="document-container">
                <div class="document-header">
                    <h2>Manual de Políticas de Protección de Datos Personales</h2>
                    <p>Para garantizar la transparencia y la seguridad en el manejo de la información, ponemos a su
                        disposición nuestro manual completo.</p>
                </div>
                <div class="document-viewer">
                    <iframe src="pdf/MANUAL DE POLITICAS PROTECCION DE DATOS PERSONALES VERSIÓN 1.pdf"
                        width="100%" height="600px" style="border:none;"></iframe>
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