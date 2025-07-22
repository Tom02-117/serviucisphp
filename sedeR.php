<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestras Sedes - Serviucis</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo unidCH.png" type="image/png">
</head>


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
            <h1 class="slide-up">Nuestras Sedes</h1>
            <p class="hero-subhead slide-up">Dos ubicaciones estratégicas para brindar cuidado crítico con calidad humana.</p>
        </div>
    </section>


    <section class="about-content">
        <div class="about-grid">
            <div class="text-column sede-info-card">
                <h2>Sede Rionegro</h2>
                <h3>UCI Valle de San Nicolás</h3>
                <p>El oriente Antioqueño está compuesto por 26 Municipios, siendo Rionegro el polo de desarrollo de esta región. SERVIUCIS entra a ser un importante centro de referencia de la zona para pacientes que requieren atención en cuidado crítico.</p>
                <p><strong>Dirección:</strong> Carrera 55A # 35-229 Interior 130</p>
                
                <button class="btn js-toggle-map">Ver en mapa</button>
                <div class="sede-card-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6984393072872!2d-75.37237263049494!3d6.158370932980211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e469f09985b03cf%3A0x87293bc41236ce36!2sSERVIUCIS%20UCI%20Valle%20de%20San%20Nicol%C3%A1s!5e0!3m2!1ses-419!2sco!4v1750865276919!5m2!1ses-419!2sco" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="image-column">
                <img src="img/FACHADARENEW2.jpg" alt="">
            </div>
        </div>
    </section>


    <section class="about-content" style="background-color: #fff;">
        <div class="about-grid">
            <div class="image-column">
                <img src="img/sede_ap.2.jpg" alt="">
            </div>
            <div class="text-column sede-info-card">
                <h2>Sede Apartadó</h2>
                <h3>UCI Santa María del Darién</h3>
                <p>Esta región, una de las de mayor expectativa en el desarrollo económico del país, pudo contar con una moderna Unidad de Cuidado Intensivo cuando llegó SERVIUCIS en 2007, mejorando la accesibilidad a servicios de alta complejidad.</p>
                <p><strong>Dirección:</strong> Cra. 98 #106-28, Apartadó, Antioquia</p>

                <button class="btn js-toggle-map">Ver en mapa</button>
                <div class="sede-card-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1397.2681763911348!2d-76.62943063497335!3d7.887618866177048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e500d6f7ab0a13f%3A0x1fc21f52f1e345ec!2sHospital%20Regional%20De%20Urab%C3%A1!5e0!3m2!1ses-419!2sco!4v1751060334865!5m2!1ses-419!2sco" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>

    <!-- Footer -->
<?php include 'footer.php'; ?>

<script src="js/main.js"></script>
</body>
</html>
