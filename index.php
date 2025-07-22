<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviucis - Expertos en Cuidado Crítico</title>
    
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
                <h1 class="hero-headline slide-up">Serviucis</h1>
                <h2 class="hero-subhead slide-up">Cuidado Crítico con Calidad Humana</h2>
                <div class="hero-cta slide-up">
                    <a href="#sedes" class="hero-cta-link">Nuestras Sedes ></a>
                    <a href="#contacto" class="hero-cta-link">Contáctanos ></a>
                </div>
            </div>
        </section>

        <section class="promo-section">
            <div class="promo-card promo-card--sedes">
                <div class="promo-card-content">
                    <h3>Encuentra tu Sede</h3>
                    <p>Localiza nuestras unidades de cuidado intensivo en Rionegro y Apartadó, equipadas con la mejor
                        tecnología y un equipo humano excepcional.</p>
                    <a href="submenu/sedeR.html" class="btn">Ver Sedes</a>
                </div>
            </div>
            <div class="promo-card promo-card--pacientes">
                <div class="promo-card-content">
                    <h3>Pacientes y Familiares</h3>
                    <p>Accede a información útil, horarios de visita y respuestas a tus preguntas más frecuentes para
                        acompañar a tus seres queridos.</p>
                    <a href="submenu/secondary/preguntasFrecuentes.html" class="btn">Ir a FAQ</a>
                </div>
            </div>
            <div class="promo-card promo-card--esencia">
                <div class="promo-card-content">
                    <h3>Nuestra Esencia</h3>
                    <p>Conoce la historia, misión y los valores de calidad, respeto y compromiso que guían nuestro
                        trabajo diario para salvar vidas.</p>
                    <a href="submenu/quienesSomos.html" class="btn">Quiénes Somos</a>
                </div>
            </div>
        </section>

        <section class="sedes-section" id="sedes">
            <h2 class="section-heading">Nuestras Sedes</h2>
            <div class="sedes-grid">
                <div class="sede-card sede-card--rionegro">
                    <div class="sede-card-content">
                        <h3>UCI Valle de San Nicolás</h3>
                        <h4>Rionegro, Antioquia</h4>
                        <p>Carrera 55A # 35-229 Interior 130</p>
                        <button class="btn js-toggle-map">Ver en mapa</button>
                    </div>
                    <div class="sede-card-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6984393072872!2d-75.37237263049494!3d6.158370932980211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e469f09985b03cf%3A0x87293bc41236ce36!2sSERVIUCIS%20UCI%20Valle%20de%20San%20Nicol%C3%A1s!5e0!3m2!1ses-419!2sco!4v1750865276919!5m2!1ses-419!2sco"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="sede-card sede-card--apartado">
                    <div class="sede-card-content">
                        <h3>UCI Santa María del Darién</h3>
                        <h4>Apartadó, Antioquia</h4>
                        <p>Cra. 98 #106-28, Apartadó, Antioquia</p>
                        <button class="btn js-toggle-map">Ver en mapa</button>
                    </div>
                    <div class="sede-card-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1397.2681763911348!2d-76.62943063497335!3d7.887618866177048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e500d6f7ab0a13f%3A0x1fc21f52f1e345ec!2sHospital%20Regional%20De%20Urab%C3%A1!5e0!3m2!1ses-419!2sco!4v1751060334865!5m2!1ses-419!2sco"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>
