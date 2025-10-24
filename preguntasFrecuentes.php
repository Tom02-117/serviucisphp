<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preguntas Frecuentes - Serviucis</title>
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
          <img src="img/puerta.jpg" alt="Equipo médico en una UCI">
        </div>
        <div class="carousel-slide">
          <img src="img/asistencial.jpg" alt="Equipo de monitoreo avanzado en una unidad de cuidados intensivos">
        </div>
      </div>
      <div class="page-hero-content">
        <h1 class="slide-up">Preguntas Frecuentes</h1>
        <p class="hero-subhead slide-up">Hemos reunido las respuestas a las dudas más comunes para brindarte claridad y
          tranquilidad.</p>
      </div>
    </section>

    <div class="faq-page-container">
      <aside class="faq-categories">
        <h3>Categorías</h3>
        <ul>
          <li><a href="#horarios-visitas">Horarios y Visitas</a></li>
          <li><a href="#atencion-medica">Sobre la Atención Médica</a></li>
          <li><a href="#contacto-inquietudes">Contacto e Inquietudes</a></li>
        </ul>
      </aside>

      <div class="faq-content">
        <section id="horarios-visitas" class="faq-category-section">
          <h2>Horarios y Visitas</h2>
          <div class="faq-list">
            <div class="faq-item">
              <button class="faq-question">¿Cuál es el horario de visita?<span class="faq-arrow">▼</span></button>
              <div class="faq-answer">
                <div class="faq-answer-content">
                  <p><strong>Lunes a Sábado:</strong> 11:00am a 12:00pm y 3:00pm a 4:30pm<br><strong>Domingos y
                      Festivos:</strong> 11:00am a 12:00pm y 3:00pm a 4:30pm</p>
                </div>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-question">¿Cuál es el horario de atención administrativa?<span
                  class="faq-arrow">▼</span></button>
              <div class="faq-answer">
                <div class="faq-answer-content">
                  <p><strong>Lunes a Viernes:</strong> 7:30am a 12:30pm y 1:30pm a 5:00pm</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="atencion-medica" class="faq-category-section">
          <h2>Sobre la Atención Médica</h2>
          <div class="faq-list">
            <div class="faq-item">
              <button class="faq-question">¿Cómo es la distribución de camas?<span class="faq-arrow">▼</span></button>
              <div class="faq-answer">
                <div class="faq-answer-content">
                  <p>Nuestras Unidades de Cuidados Intensivos cuentan con 21 camas individuales dispuestas en cubículos
                    independientes para preservar la privacidad, intimidad y respeto por cada paciente.</p>
                </div>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-question">¿El paciente está siempre acompañado por personal médico?<span
                  class="faq-arrow">▼</span></button>
              <div class="faq-answer">
                <div class="faq-answer-content">
                  <p>Sí. Garantizamos la presencia de un médico especialista las 24 horas. Nuestro gran diferencial es
                    asignar una auxiliar de enfermería exclusiva para cada paciente críticamente enfermo, lo que permite
                    un cuidado y seguimiento excepcionales.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="contacto-inquietudes" class="faq-category-section">
          <h2>Contacto e Inquietudes</h2>
          <div class="faq-list">
            <div class="faq-item">
              <button class="faq-question">¿Cómo puedo manifestar mis inquietudes o sugerencias?<span
                  class="faq-arrow">▼</span></button>
              <div class="faq-answer">
                <div class="faq-answer-content">
                  <p>Su opinión es muy importante. Puede usar nuestro Buzón de PQRSD en línea, contactarnos por correo a
                    <a href="mailto:info@serviucis.com">info@serviucis.com</a>, o llamar a
                    nuestras líneas de atención.</p>
                  <a href="Buzon.html" class="btn" style="margin-top: 1rem;">Ir al Buzón PQRSD</a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!-- Bloque de Llamada a la Acción -->
    <section class="cta-box-section">
      <div class="cta-box hidden">
        <div class="cta-box-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
          </svg>
        </div>
        <h3>¿No encontraste tu respuesta?</h3>
        <p>Nuestro equipo está aquí para ayudarte. Contáctanos directamente a través de nuestro buzón de PQRSD y te
          responderemos a la brevedad.</p>
        <a href="Buzon.html" class="btn">Contactar Ahora</a>
      </div>
    </section>

  </main>

  <?php include 'footer.php'; ?>

  <script src="js/main.js"></script>
</body>

</html>