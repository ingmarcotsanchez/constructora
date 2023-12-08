<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Constructores e Ingenieros</title>
    <?php require_once("views/modulos/head-about.php");?>
</head>
<body>
    <header class="header">
        <a href="#"><img src="public/img/logo.png" class="logo" alt="Logo"></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <nav class="navbar">
            <a href="index.php" class="active">Inicio</a>
            <a href="about.php">Nosotros</a>
            <a href="index.php#services">Servicios</a>
            <a href="index.php#projects">Proyectos</a>
            <a href="index.php#gallery">Galeria</a>
            <a href="index.php#contact">Contactenos</a>
            <a href="views/login.php" class="btn-admon">Admon</a>
            <span class="active-nav"></span>
        </nav>
    </header>
    <section class="about container" id="about">
        <div class="about-img">
            <img src="public/img/about.jpg" alt="imagen de la empresa">
        </div>
        <div class="about-content">
            <h2>Quienes Somos?</h2>
            <p class="text-parrafo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error numquam porro nobis eaque tenetur architecto corrupti incidunt ad repellat laborum? Ad suscipit sed vel perspiciatis esse nam, repellat eius id?</p>
        </div>
    </section>
    
    <section class="experience flex container">
        <div class="experience-cards">
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
            <a href="index.php#contact" class="btn btn-contact">Contáctenos</a>
        </div>
    </section>
    
    <section class="subscribe">
        <div class="subscribe-content container">
            <h3>Realice una consulta con un asesor.</h3>
            <p>Llamanos al siguiente número <strong><a href="tel:+573214614550">314 333 2345</a></strong></p>
            <a href="https://wa.me/3167405456" target="_blank" class="btn btn-subscribe"><i class='bx bxl-whatsapp'></i>Agende una cita!</a>
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
            <?php require_once("views/modulos/info_footer.php");?>
    
    </footer>
    <div class="copy">
        <?php require_once("views/modulos/copy.php");?>
    </div>
  <script src="public/js/client.js"></script>
  <script src="public/js/menu.js"></script>
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
