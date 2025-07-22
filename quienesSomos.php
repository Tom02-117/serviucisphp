<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Serviucis</title>
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
                <h1 class="hero-headline slide-up">El Corazón de Serviucis</h1>
                <h2 class="hero-subhead slide-up">Somos una organización privada especializada en la operación de unidades médicas de alta complejidad, comprometida con la excelencia, la viabilidad y la calidad humana en cada paso.</h2>

            </div>
        </section>
        <section class="about-content" id="mision-vision">
            <div class="about-grid mission-vision-grid">
                <div class="text-column">
                    <h2>Nuestra Misión</h2>
                    <blockquote class="mission-statement">
                        Somos una Organización de carácter privado especializada en la prestación de servicios de salud de mediana y alta complejidad.
                        Garantizamos la seguridad en la atención del usuario y su familia, respetando los principios éticos, con un alto nivel médico, científico, tecnológico y con un equipo humano idóneo y competente.
                        Contribuimos al mejoramiento del nivel de vida de la comunidad, brindando al usuario alternativas terapéuticas basadas en la evidencia médica y bajo enfoque diferencial, garantizando el respeto por la diversidad e inequidad.
                        Apoyamos la formación del talento humano en salud promoviendo una visión integral y humanizada.
                        Estamos comprometidos con el medio ambiente, con el uso racional de los recursos, con el desarrollo de nuestra gente y con los resultados económicos que retribuyan el esfuerzo de los accionistas. Todas nuestras acciones están enfocadas a consolidarnos como una organización socialmente responsable.
                    </blockquote>
                </div>
                <div class="text-column">
                    <h2>Nuestra Visión</h2>
                    <blockquote class="mission-statement">
                        Ser una institución reconocida por la calidad de sus servicios, por su excelente resultado médico asistencial, por la alta satisfacción de sus usuarios y por su compromiso con la seguridad en la atención y la sostenibilidad.
                    </blockquote>
                </div>
            </div>
        </section>

         <!-- NUESTROS VALORES -->
        <section class="values-section" id="valores">
            <h2 class="section-heading">Nuestros Valores</h2>
            <div class="values-grid">
                <div class="value-item"><h3>Respeto</h3><p>Reconocemos, apreciamos y valoramos las cualidades de los demás y sus derechos, ya sea por su conocimiento, por su experiencia o por su valor como persona.</p></div>
                <div class="value-item"><h3>Compromiso</h3><p>Mantenemos una actitud positiva y responsable para el logro de los objetivos, fines y metas de la Organización y cada uno aporta su máxima capacidad con gran sentido de pertenencia.</p></div>
                <div class="value-item"><h3>Integridad</h3><p>Nuestra conducta y sentir significa actuar en todo momento bajo un compromiso personal con la honestidad, la franqueza y la justicia, es decir, vivir de acuerdo con los principios personales y morales.</p></div>
                <div class="value-item"><h3>Responsabilidad</h3><p>Asumimos las consecuencias de nuestros actos y tratamos de que estos sean realizados de acuerdo con una noción de justicia y de cumplimiento del deber en todos los sentidos.</p></div>
                <div class="value-item"><h3>Vocación de Servicio</h3><p>Nos entregamos voluntariamente en beneficio de nuestros usuarios y ponemos al servicio de ellos, todo nuestro talento buscando superar sus necesidades y expectativas.</p></div>
                <div class="value-item"><h3>Humanización</h3><p>Acogemos a nuestros pacientes y sus familias a través de acciones que mantengan la dignidad de los mismos y permitan lograr confianza y seguridad durante el proceso de atención.</p></div>
                <div class="value-item"><h3>Responsabilidad social</h3><p>Prestamos servicios, con calidad garantizando la seguridad del usuario y su familia, de los empleados y su grupo familiar, de nuestros clientes y proveedores, siempre comprometidos con implementar acciones que reduzcan el impacto negativo en el medio ambiente y la optimización de los recursos, aumentando nuestra contribución positiva a la sostenibilidad.</p></div>
            </div>
        </section>

        <!--  NUESTRO ORIGEN Y COMPROMISO -->
 
    
    <section class="about-content" id="mision-vision">
            <div class="about-grid mission-vision-grid">
                <div class="text-column">
                    <h2>Nuestro Origen
                    <blockquote class="mission-statement">
                        En respuesta a la política nacional de mejorar la eficiencia del sistema de salud y por iniciativa del Hospital San Juan de Dios de Rionegro, SERVIUCIS S.A.S. inauguró en enero de 2004 una moderna unidad de cuidados intensivos, solucionando el déficit de camas para cuidado crítico en la región y brindando acceso a servicios de alta complejidad a más de 600,000 habitantes.
                    </blockquote>
                </div>
                <div class="text-column">
                    <h2>Nuestro Compromiso
                    <blockquote class="mission-statement">
                        Nos comprometemos a implementar todas las acciones necesarias para mejorar las condiciones de salud de la comunidad, fortalecer el recurso humano, proteger el medio ambiente y contribuir con el uso racional de los recursos del sistema de salud, siempre enmarcados en los más rigurosos principios éticos.
                    </blockquote>
                </div>
            </div>
        </section>
        
    </main>
    
    <!-- Footer -->
<?php include 'footer.php'; ?>
    </footer>
    
    <script src="js/main.js"></script>
    <!-- tch -->
</body>
</html>
