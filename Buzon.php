<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzón PQRSD - Serviucis</title>
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
                <h1 class="slide-up">Buzón de PQRSD</h1>
                <p class="hero-subhead slide-up">Su opinión es muy importante para nosotros. Use este espacio para sus
                    Peticiones, Quejas, Reclamos, Sugerencias o Denuncias.</p>
            </div>
        </section>

        <section class="about-content">
            <div class="sugerencia-container">
                <div id="success-message"
                    style="display:none; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 15px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
                    ¡Gracias! Tu mensaje ha sido enviado correctamente.
                </div>
                <form id="contact-form" action="https://formspree.io/f/xblywbyn" method="POST">


                    <label for="name">Su Nombre:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Su Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="tipo-solicitud">Tipo de Solicitud:</label>
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

                    <label for="message">Su Mensaje:</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit" class="btn">Enviar</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="js/main.js"></script>
    <!-- tch -->
</body>

</html>