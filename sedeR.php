<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestras Sedes - Serviucis</title>
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
                    <img src="img/asistencial.jpg" alt="Equipo médico de alta tecnología">
                </div>
            </div>
            <div class="page-hero-content">
                <h1 class="slide-up">Nuestras Sedes</h1>
                <p class="hero-subhead slide-up">Dos ubicaciones estratégicas para brindar cuidado crítico con calidad
                    humana.</p>
            </div>
        </section>

        <section class="about-content">
            <div class="about-grid">
                <div class="text-column sede-info-card hidden">
                    <h2>Sede Rionegro</h2>
                    <h3>UCI Valle de San Nicolás</h3>
                    <p>En el corazón del Oriente Antioqueño, Serviucis Rionegro se erige como un centro de referencia
                        crucial para 26 municipios, proveyendo cuidado crítico esencial y avanzado para toda la región.
                    </p>
                    <p><strong>Dirección:</strong> Carrera 55A # 35-229 Interior 130</p>

                    <button class="btn js-toggle-map">Ver en mapa</button>
                    <div class="sede-card-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6984393072872!2d-75.37237263049494!3d6.158370932980211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e469f09985b03cf%3A0x87293bc41236ce36!2sSERVIUCIS%20UCI%20Valle%20de%20San%20Nicol%C3%A1s!5e0!3m2!1ses-419!2sco!4v1750865276919!5m2!1ses-419!2sco"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="image-fade-container">
                    <img src="img/FACHADARENEW2.jpg" alt="Fachada de la sede Serviucis Rionegro">
                </div>
            </div>
        </section>

        <section class="about-content" style="background-color: var(--background-white);">
            <div class="about-grid">
                <div class="image-fade-container image-fade-container--left">
                    <img src="img/sede_ap.2.jpg" alt="Fachada de la sede Serviucis Apartadó">
                </div>
                <div class="text-column sede-info-card hidden">
                    <h2>Sede Apartadó</h2>
                    <h3>UCI Santa María del Darién</h3>
                    <p>Desde 2007, Serviucis transformó el acceso a la salud en Urabá, una región de gran potencial
                        económico, al establecer una moderna Unidad de Cuidado Intensivo que mejora la calidad de vida
                        de sus habitantes.</p>
                    <p><strong>Dirección:</strong> Cra. 98 #106-28, Apartadó, Antioquia</p>

                    <button class="btn js-toggle-map">Ver en mapa</button>
                    <div class="sede-card-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1397.2681763911348!2d-76.62943063497335!3d7.887618866177048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e500d6f7ab0a13f%3A0x1fc21f52f1e345ec!2sHospital%20Regional%20De%20Urab%C3%A1!5e0!3m2!1ses-419!2sco!4v1751060334865!5m2!1ses-419!2sco"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>