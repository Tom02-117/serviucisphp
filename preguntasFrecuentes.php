<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preguntas Frecuentes - Serviucis</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="img/logo unidCH.png" type="image/png">
</head>

<body>
  <!--  menu movil -->
  <?php include 'header.php'; ?>
  <main>
    <section class="page-hero" style="position: relative; overflow: hidden;">
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
      <div class="page-hero-content" style="position: relative; z-index: 2;">
        <h1 class="slide-up mission-title">Preguntas Frecuentes</h1>
        <p class="hero-subhead slide-up"></p>
      </div>
    </section>

    <section class="faq-section">
      <h2 class="faq-heading">Preguntas Frecuentes</h2>
      <div class="faq-list">

        <div class="faq-item">
          <button class="faq-question">
            ¿Cuál es el horario de visita?
            <span class="faq-arrow">▼</span>
          </button>
          <div class="faq-answer">
            <p>
              <strong>Lunes a Sábado:</strong> 11:00am a 12:00pm y 3:00pm a 4:30pm<br>
              <strong>Domingos y Festivos:</strong> 11:00am a 12:00pm y 3:00pm a 4:30pm
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">

            ¿Cuál es el horario de atención administrativa?
            <span class="faq-arrow">▼</span>
          </button>
          <div class="faq-answer">
            <p>
              <strong>Lunes a Viernes:</strong> 7:30am a 12:30pm y 1:30pm a 5:00pm
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            ¿Cómo es la distribución de camas?
            <span class="faq-arrow">▼</span>
          </button>
          <div class="faq-answer">
            <p>
              Nuestras Unidades de Cuidados Intensivos son servicios de alto nivel de complejidad con los más avanzados
              conceptos en la infraestructura física y en sus sistemas de operación. Contamos con 21 camas individuales
              en las dos sedes para el cuidado del paciente adulto en estado crítico dispuestas en cubículos
              independientes, permitiendo de esta manera que se preserve su privacidad e intimidad y el mayor respeto
              por el paciente.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            ¿Está acompañado el paciente?
            <span class="faq-arrow">▼</span>
          </button>
          <div class="faq-answer">
            <p>
              Desde el punto de vista de la operación y de acuerdo con lo exigido por la ley, contamos las 24 horas del
              día con la presencia de un médico especialista de amplia experiencia, y por turno y servicio con
              enfermeras profesionales y personal auxiliar y Terapeutas. Durante el día contamos con nutricionista. Nos
              diferenciamos de la mayoría de los servicios de Cuidados Intensivos, pues disponemos las 24 horas del día
              de una auxiliar de enfermería dedicada exclusivamente a cada paciente críticamente enfermo. Esto nos
              permite un mayor cuidado y seguimiento del paciente y por ende una menor ocurrencia de eventos adversos
              como extubaciones, presencia de escaras y de úlceras de presión, retiros accidentales de catéteres y de
              sondas de toracotomía, urinarias y vesicales y un menor riesgo de contaminación cruzada con gérmenes de
              difícil manejo.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            ¿Cómo puede manifestar sus inquietudes?
            <span class="faq-arrow">▼</span>
          </button>
          <div class="faq-answer">
            <div class="boton-pregunta">
              <a href="Buzon.html" class="btn btn-primary">Buzón de Consultas o Sugerencias</a>
            </div>
            <br>
            <p>
              Sus inquietudes, sugerencias, quejas y reclamos son muy importantes para nosotros, puede ponerse en
              contacto con nosotros llamando al PBX.566-16-19 Rionegro o PBX.828-82-50 Apartadó, o por correo
              electrónico a la dirección Correo: <a
                href="mailto:atencionalusuario@serviucis.com">atencionalusuario@serviucis.com</a>
            </p>
          </div>
        </div>

      </div>
    </section>
  </main>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <script src="js/main.js"></script>
  <script>
    // back del FAQ
    document.querySelectorAll('.faq-question').forEach(button => {
      button.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        const faqItem = button.closest('.faq-item');
        if (faqItem) {
          faqItem.classList.toggle('open');
        }
      });
    });
  </script>
  <!-- tch -->
</body>

</html>