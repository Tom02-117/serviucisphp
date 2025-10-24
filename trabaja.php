<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabaje con Nosotros - Serviucis</title>
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
                    <img src="img/FACHADARENEW2.jpg" alt="Equipo médico de Serviucis colaborando">
                </div>
                <div class="carousel-slide">
                    <img src="img/puerta.jpg" alt="Personal de enfermería atendiendo a un paciente">
                </div>
                <div class="carousel-slide">
                    <img src="img/asistencial.jpg">
                </div>
            </div>
            <div class="page-hero-content">
                <h1 class="slide-up">Únete a un Equipo que Salva Vidas</h1>
                <p class="hero-subhead slide-up">Buscamos profesionales apasionados por el cuidado crítico,
                    comprometidos con la excelencia y la calidad humana. Aquí, tu trabajo tiene un propósito real.</p>
            </div>
        </section>

        <section class="commitment-section">
            <div class="container">
                <h2 class="section-heading hidden">¿Por Qué Serviucis?</h2>
                <div class="commitment-grid">
                    <!-- Pilar 1 -->
                    <div class="commitment-card hidden">
                        <div class="commitment-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </div>
                        <h3>Impacto Humano</h3>
                        <p>Forma parte de un equipo donde cada acción contribuye directamente a la recuperación y el
                            bienestar de nuestros pacientes y sus familias.</p>
                    </div>
                    <!-- Pilar 2 -->
                    <div class="commitment-card hidden">
                        <div class="commitment-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3" />
                            </svg>
                        </div>
                        <h3>Crecimiento Profesional</h3>
                        <p>Creemos en el desarrollo continuo. Ofrecemos oportunidades de formación y un entorno
                            académico que te permitirá crecer en tu carrera.</p>
                    </div>
                    <!-- Pilar 3 -->
                    <div class="commitment-card hidden">
                        <div class="commitment-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <h3>Cultura de Equipo</h3>
                        <p>Trabaja en un ambiente de colaboración, respeto y apoyo mutuo, donde cada miembro del equipo
                            es valorado y esencial para el éxito.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-content" style="background-color: var(--background-white);">
            <div class="sugerencia-container">
                <h2 class="section-heading">Postúlate Ahora</h2>
                <div id="success-message"
                    style="display:none; background-color: #d1e7dd; color: #0f5132; border: 1px solid #badbcc; padding: 1rem; border-radius: 12px; margin-bottom: 1.5rem; text-align: center;">
                </div>

                <form id="contact-form" action="https://formspree.io/f/xblabroj" method="POST">
                    <label for="name">Nombre completo</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Teléfono</label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="puesto">Puesto al que aspiras</label>
                    <input type="text" id="puesto" name="puesto" required>

                    <label for="sede">Sede de interés</label>
                    <div class="select-wrapper">
                        <select id="sede" name="Sede de Interés" required>
                            <option value="" disabled selected>Seleccione una sede...</option>
                            <option value="Rionegro">Rionegro</option>
                            <option value="Apartadó">Apartadó</option>
                        </select>
                    </div>

                    <label for="cv-link">Enlace a tu Hoja de Vida</label>
                    <input type="url" id="cv-link" name="Enlace Hoja de Vida" placeholder="https://drive.google.com/..."
                        required>

                    <button type="submit" class="btn">Enviar Aplicación</button>
                </form>
            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>