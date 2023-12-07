<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Constructores e Ingenieros</title>
    <?php require_once("views/modulos/head-web.php");?>
</head>
<body>
    <header class="header-about" id="header">
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
    <section class="about column container" id="about">
        <div class="about-img">
            <img src="public/img/about.jpg" alt="imagen de la empresa">
        </div>
        <div class="about-content">
            <h2>Quienes Somos?</h2>
            <p class="text-parrafo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error numquam porro nobis eaque tenetur architecto corrupti incidunt ad repellat laborum? Ad suscipit sed vel perspiciatis esse nam, repellat eius id?</p>
        </div>
    </section>
    <section class="experience row flex container">
        <div class="experience-cards row">
            <div class="e-card">
                <h3>3</h3>
                <p>Proyectos</p>
            </div>
            <div class="e-card">
                <h3>240</h3>
                <p>Construcciones</p>
            </div>
            <div class="e-card">
                <h3>9</h3>
                <p>Años de experiencia</p>
            </div>
            <div class="e-card">
                <h3>80</h3>
                <p>Remodelaciones</p>
            </div>
        </div>
        <div class="experience-content">
            <h2>9 años de experiencia</h2>
            <p class="text-parrafo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error numquam porro nobis eaque tenetur architecto corrupti incidunt ad repellat laborum? Ad suscipit sed vel perspiciatis esse nam, repellat eius id?</p>
            <a href="#" class="btn btn-contact">Contáctenos</a>
        </div>
    </section>
    <section class="subscribe">
        <div class="subscribe-content container">
            <h3>Realice una consulta con un asesor.</h3>
            <p>Llamanos al siguiente número <strong><a href="tel:+573214614550">314 333 2345</a></strong></p>
            <a href="https://wa.me/3167405456" target="_blank" class="btn btn-subscribe">Agende una cita!</a>
        </div>
    </section>
    <section class="clients">
        <div class="clients-content container">
            <div class="clients-txt">
                <h2 class="titles">Trabajos Realizados</h2>
            </div>
            <div class="wrapper">
                <i id="left" class='bx bx-chevron-left'></i>
                <div class="carousel">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
                    <img src="public/images/works/work1.png" alt="" draggable="false">
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
  <script type="text/javascript">
    window.addEventListener("scroll",function(){
      var header = document.querySelector(".menu");
      header.classList.toggle("header-scrolled2",window.scrollY > 0);
    })
  </script>
  <script>
        ScrollReveal({ 
            reset: true,
            distance:'60px',
            duration: 2500,
            delay:400
         });
         ScrollReveal().reveal('.about-img, .about-content, .subscribe-content', { delay: 500, origin:'left' });
         ScrollReveal().reveal('.clients-txt', { delay: 600, origin:'bottom' });
         ScrollReveal().reveal('.e-card', { delay: 700, origin:'up' });
         ScrollReveal().reveal('.experience-content', { delay: 700, origin:'right' });
    </script>
</body>
</html>
