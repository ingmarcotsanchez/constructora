<?php 
  $titulo="Constructores e Ingenieros";
  define("URL","/constructora/");
  require_once("config/conexion.php");

  require_once("models/Proyectos.php");
    $project = new Proyectos();
    $proj = $project->get_proyectos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Constructores e Ingenieros</title>
    <?php require_once("views/modulos/head-web.php");?>
</head>
<body>
    <header class="header-about">
        <div class="menu container">
            <a href="index.php" class="logo"><img src="public/img/logo.png" alt="logo de la empresa"></a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="public/img/menu.svg" alt="menu" class="menu-icon">
            </label>
            <nav class="navbar">
                <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="about.php">Nosotros</a></li>
                <li><a href="index.php#services">Servicios</a></li>
                <li><a href="index.php#projects">Proyectos</a></li>
                <li><a href="index.php#gallery">Galería</a></li>
                <li><a href="index.php#contact">Contáctenos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="project_detalle container" id="project_detalle">
        <div class="project_detalle-content">
            <div class="project_detalle-txt">
                <h2 class="titles-left">Nombre del proyecto</h2>
                <p class="text-parrafo">Sistemas y Soluciones Integradas SAS es una <span>empresa digital que desarrolla software a la medida</span>, fundada en 1998 en Girardot (Colombia). Nacio para responder a las necesidades de transformación digital de una Caja de Compensación Familiar y actualmente trabaja con más del 50% del sector, consolidando un amplio portafolio de productos y servicios, evolucionando con nuevas tecnologías y ejecutando continuamente procesos de Investigación, Desarrollo e Innovación.</p>
            </div>
        </div>
        <div class="project_detalle-img">
            <img src="public/img/project01.jpg" alt="Foto de la empresa">
        </div>
    </section>
    <section class="project_detalle2 container">
        <div class="project_detalle2-img">
            <img src="public/img/project01.jpg" alt="Foto de la empresa">
        </div>
        <div class="project_detalle2-content">
            <div class="box">
                <div class="box-text">
                    <div class="box-text-head">
                        <p>Desde</p>
                        <h3>$300.000.000</h3>
                        <p class="text-name">Ciudad</p>
                        <p class="text-name">Km 5 algo algo algo</p>
                    </div>
                    <div class="box-text-info">
                    <div>
                        <p class="text-name">Área Privada</p>
                        <p>250 mts</p>
                    </div>
                    <div>
                    <p class="text-name">Área Construida</p>
                        <p>150 mts</p>
                    </div>
                    <div>
                        <p class="text-name">Alcobas</p>
                        <p>3</p>
                    </div>
                    <div>
                        <p class="text-name">Baños</p>
                        <p>2</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients">
        <div class="clients-content container">
            <div class="wrapper">
                <i id="left" class='bx bx-chevron-left'></i>
                <div class="carousel">
                    <img src="public/images/clients/Cafaba.png" alt="" draggable="false">
                    <img src="public/images/clients/Cafamaz.png" alt="" draggable="false">
                    <img src="public/images/clients/Cafasur.png" alt="" draggable="false">
                    <img src="public/images/clients/Cajamag.png" alt="" draggable="false">
                    <img src="public/images/clients/Cajasai.png" alt="" draggable="false">
                    <img src="public/images/clients/Comcaja.png" alt="" draggable="false">
                    <img src="public/images/clients/Comfaca.png" alt="" draggable="false">
                    <img src="public/images/clients/Comfacasanare.png" alt="" draggable="false">
                    <img src="public/images/clients/Comfacesar.png" alt="" draggable="false">
                    <img src="public/images/clients/Comfachoco.png" alt="" draggable="false">
                    <img src="public/images/clients/Comfasucre.png" alt="" draggable="false">
                    <img src="public/images/clients/Comfamiliar_narino.png" alt="" draggable="false">
                    <img src="public/images/clients/Comfacor.png" alt="" draggable="false">
                    <img src="public/images/clients/Comfacundi.png" alt="" draggable="false">
                    <img src="public/images/clients/Comfaguajira.png" alt="" draggable="false">
                    <img src="public/images/clients/Comfamiliar_cartagena.png" alt="" draggable="false">
                    <img src="public/images/clients/Comfatolima.png" alt="">
                    <img src="public/images/clients/Comfenalco_Cartagena.png" alt="" draggable="false">
                    <img src="public/images/clients/Comfiar.png" alt="" draggable="false">
                    <img src="public/images/clients/Hotel_California.png" alt="" draggable="false">
                    <img src="public/images/clients/Hotel_Emaze.png" alt="" draggable="false">
                    <img src="public/images/clients/Hotel_Lolita.png" alt="" draggable="false">
                    <img src="public/images/clients/Hotel_Oasis.png" alt="" draggable="false">
                    <img src="public/images/clients/Unisystem.png" alt="" draggable="false">
                </div>
                <i id="right" class='bx bx-chevron-right'></i>
            </div>
        </div>
    </section>
    <footer class="footer">
    <div class="footer-information container">
      <div class="footer-horario">
        <div>
          <h3>Horarios de atención</h3>
          <p><span>Lunes a Viernes:</span> <br>7:30am - 12:00pm y 13:30pm - 17:00pm</p>
          <p><span>Sábados, Domingos y festivos:</span>  <br>8:00am - 17:00pm jornada continua</p>
        </div>
      </div>
      <div class="footer-links">
        <div>
          <i class='bx bxs-phone-call'></i>
          <a href="tel:+573214614550">+57 316 740 54 56</a>
        </div>
        <div>
          <i class='bx bxl-whatsapp'></i>
          <a href="tel:+573214614550">+57 316 833 12 71</a>
        </div>  
        <div>
          <i class='bx bxs-envelope'></i>
          <a href="mailto:ventasvillaesperanza@gmail.com">ventasvillaesperanza@gmail.com</a>
        </div>
      </div>
    </div>
    <div class="copy">
      <?php require_once("views/modulos/copy.php");?>
    </div>
  </footer>
  <script src="public/js/client.js"></script>
  <script>
        ScrollReveal({ 
            reset: true,
            distance:'60px',
            duration: 2500,
            delay:400
         });
         ScrollReveal().reveal('.project_detalle', { delay: 500, origin:'left' });
         ScrollReveal().reveal('.project_detalle2', { delay: 600, origin:'right' });
         ScrollReveal().reveal('.wrapper', { delay: 700, origin:'bottom' });
    </script>
</body>
</html>
