<?php 
  $titulo="Constructores e Ingenieros";
  define("URL","/constructora/");
  require_once("config/conexion.php");

  require_once("models/MntProyectos.php");
    $mproject = new Mntproyectos();
    //$mprox=$_GET['pro_id'];
    $mproj = $mproject->get_mntproyectosDetallexid($_GET['pro_id']);
    //print_r($mproj);
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
    <?php for($i=0;$i<sizeof($mproj);$i++): ?>

    <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_GET['pro_id'] ?>">
    <section class="project_detalle container" id="project_detalle">
        <div class="project_detalle-content">
            <div class="project_detalle-txt">
                <h2 class="titles-left"><?php echo $mproj[$i]["pro_nombre"] ?></h2>
                <p class="text-parrafo"><?php echo $mproj[$i]["mpro_descripcion"] ?></p>
            </div>
        </div>
        <div class="project_detalle-img">
            <iframe width="560" height="315" src="<?php echo $mproj[$i]["mpro_video"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                        <h3>$<?php echo $mproj[$i]["pro_precio"] ?></h3>
                        <p class="text-name"><?php echo $mproj[$i]["pro_ciudad"] ?></p>
                        <p class="text-name"><?php echo $mproj[$i]["pro_direccion"] ?></p>
                    </div>
                    <div class="box-text-info">
                        <div>
                            <p class="text-name">Área Privada</p>
                            <p><?php echo $mproj[$i]["mpro_privada"] ?></p>
                        </div>
                        <div>
                        <p class="text-name">Área Construida</p>
                            <p><?php echo $mproj[$i]["mpro_const"] ?></p>
                        </div>
                        <div>
                            <p class="text-name">Alcobas</p>
                            <p><?php echo $mproj[$i]["mpro_alcobas"] ?></p>
                        </div>
                        <div>
                            <p class="text-name">Baños</p>
                            <p><?php echo $mproj[$i]["mpro_bannos"] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endfor; ?>
    <section class="clients">
        <div class="clients-content container">
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
         ScrollReveal().reveal('.project_detalle', { delay: 500, origin:'left' });
         ScrollReveal().reveal('.project_detalle2', { delay: 600, origin:'right' });
         ScrollReveal().reveal('.wrapper', { delay: 700, origin:'bottom' });
    </script>
</body>
</html>
