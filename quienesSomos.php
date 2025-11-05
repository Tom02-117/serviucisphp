<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Serviucis</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" href="img/logo unidCH.png" type="image/png">
</head>
<body>
    <input type="checkbox" id="mobile-menu-toggle">

    <?php include 'header.php'; ?>
    
<main>
        <section class="hero">
            <div class="carousel">
                <div class="carousel-slide active">
                    <img src="img/FACHADARENEW2.jpg">
                </div>
                <div class="carousel-slide">
                    <img src="img/puerta.jpg">
                </div>
                <div class="carousel-slide">
                    <img src="img/asistencial.jpg">
                </div>
            </div>
            <div class="hero-content">
                <h1 class="hero-headline slide-up">El Corazón de Serviucis</h1>
                <h2 class="hero-subhead slide-up">Somos una organización privada especializada en la operación de unidades médicas de alta complejidad, comprometida con la excelencia, la viabilidad y la calidad humana en cada paso.</h2>
            </div>
        </section>

    <section class="pilares-section" id="mision-vision">
        <div class="pilares-container">
             <div class="pilares-grid">
                <div class="pilar-item hidden">
                    <h3>Nuestra Misión</h3>
                    <p>Garantizar la seguridad en la atención del usuario y su familia, respetando los principios éticos, con un alto nivel médico, científico y tecnológico, apoyados en un equipo humano idóneo y competente.</p>
                </div>
                <div class="pilar-item hidden">
                    <h3>Nuestra Visión</h3>
                    <p>Ser una institución reconocida por la calidad de sus servicios, su excelente resultado médico asistencial, la alta satisfacción de sus usuarios y su compromiso con la seguridad en la atención y la sostenibilidad.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="feature-section" id="valores">
        <div class="about-grid">
            <div class="image-fade-container image-fade-container--left">
                <img src="img/FACHADARENEW1.jpg" >
            </div>
            <div class="text-column hidden">
                <h2>Nuestros Valores</h2>
                 <p>Los principios innegociables que definen nuestra cultura.</p>
                <ul>
                    <li><strong>Respeto & Humanización:</strong> Valoramos la dignidad de cada persona y acogemos a pacientes y familias con seguridad y confianza.</li>
                    <br>
                    <li><strong>Compromiso & Integridad:</strong> Actuamos con honestidad y sentido de pertenencia para lograr nuestros objetivos y superar las expectativas.</li>
                    <br>
                    <li><strong>Responsabilidad & Servicio:</strong> Asumimos nuestros actos y nos entregamos voluntariamente al bienestar de nuestros usuarios y la comunidad.</li>
                </ul>
            </div>
        </div>
    </section>
    
    
    <section class="about-content" id="origen-compromiso">
        <div class="about-grid">
            <div class="text-column hidden">
                <h2>El Origen de un Legado (2004)</h2>
                <p>Nacimos para dar respuesta a una necesidad crítica en el Oriente antioqueño, inaugurando una moderna UCI que brindó acceso a servicios de alta complejidad a más de 600,000 habitantes y transformó el panorama de la salud en la región.</p>
                <h2>Nuestro Compromiso Permanente (Hoy)</h2>
                <p>Continuamos innovando para mejorar la salud de la comunidad, fortalecer el talento humano y proteger el medio ambiente, operando siempre bajo los más rigurosos principios éticos y de responsabilidad social.</p>
            </div>
            <div class="image-fade-container">
                <img src="img/sede_ap.2.jpg">
            </div>
        </div>
    </section>
</main>
    
    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>
