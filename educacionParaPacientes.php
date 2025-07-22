<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación para Pacientes - Serviucis</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo unidCH.png" type="image/png">
</head>
<body>
<?php include 'header.php'; ?>
        
    <main>
        <section class="hero">
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
            <div class="hero-content fade-in">
                <h1 class="hero-headline slide-up">Educación para pacientes y familiares</h1>
                <h2 class="hero-subhead slide-up"></h2>

            </div>
        </section>

    <section class="document-section">
        <div class="document-container">
            <div class="document-header">
                <h2>Material de Educación para Pacientes</h2>
                <p>Consulte la guía para pacientes y familiares:</p>
            </div>
            <div class="document-viewer">
                <iframe src="pdf/educacionweb.pdf" width="100%" height="600px" style="border:none;"></iframe>
            </div>
        </div>
    </section>
    
   <!-- Footer -->
    <?php include 'footer.php'; ?>
    
    <script src="js/main.js"></script>
    <!-- tch -->
</body>
</html>
