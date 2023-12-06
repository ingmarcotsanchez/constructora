<?php 
  $titulo="Constructores e Ingenieros";
  define("URL","/constructora/");
  require_once("config/conexion.php");

  require_once("models/Proyectos.php");
    $project = new Proyectos();
    $proj = $project->get_proyectos();

  require_once("models/Galeria.php");
    $gallery = new Galeria();
    $gal = $gallery->get_galeria_index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $titulo; ?></title>
  <?php require_once("views/modulos/head-web.php");?>
</head>
<body>
  <header class="header" id="header">
    <div class="menu container" id="navbar">
      <a href="index.php" class="logo"><img src="public/img/logo.png" alt="logo de la empresa"></a>
      <input type="checkbox" id="menu">
      <label for="menu">
        <img src="public/img/menu.svg" alt="menu" class="menu-icon">
      </label>
      <nav class="navbar">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="about.php">Nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#projects">Proyectos</a></li>
          <li><a href="#gallery">Galería</a></li>
          <li><a href="#contact">Contáctenos</a></li>
          <li><a class="btn-admon" href="views/login.php">Administración</a></li>
        </ul>
      </nav>
    </div>
    <div class="header-content container">
      <div class="header-text">
        <h1>Constructores e Ingenieros</h1>
        <h2>G & G SAS</h2>
        <p class="text-parrafo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error numquam porro nobis eaque tenetur architecto corrupti incidunt ad repellat laborum? Ad suscipit sed vel perspiciatis esse nam, repellat eius id?</p>
        <a href="#" class="btn btn-cite">Agendar una cita</a>
      </div>
    </div>
  </header>
  <section id="services" class="services">
    <div class="services-content container">
      <h2 class="titles">Servicios</h2>
      <div class="services-container container">
        <div class="box">
          <i class='bx bx-layout'></i>
          <h4>Ventaneria de Aluminio</h4>
          <p>Necesita más información, agende una cita con nosotros</p>
          <a href="#" class="btn btn-contact">Saber más</a>
        </div>
        <div class="box">
          <i class='bx bxs-directions'></i>
          <h4>Carpintería</h4>
          <p>Necesita más información, agende una cita con nosotros</p>
          <a href="#" class="btn btn-contact">Saber más</a>
        </div>
        <div class="box">
          <i class='bx bx-image'></i>
          <h4>Obras de urbanismo</h4>
          <p>Necesita más información, agende una cita con nosotros</p>
          <a href="#" class="btn btn-contact">Saber más</a>
        </div>
        <div class="box">
          <i class='bx bx-wrench'></i>
          <h4>Construcción de viviendas</h4>
          <p>Necesita más información, agende una cita con nosotros</p>
          <a href="#" class="btn btn-contact">Saber más</a>
        </div>
        <div class="box">
          <i class='bx bx-donate-blood'></i>
          <h4>Piscinas y jacuzzi</h4>
          <p>Necesita más información, agende una cita con nosotros</p>
          <a href="#" class="btn btn-contact">Saber más</a>
        </div>
        <div class="box">
          <i class='bx bx-palette'></i>
          <h4>Diseño de obras</h4>
          <p>Necesita más información, agende una cita con nosotros</p>
          <a href="#" class="btn btn-contact">Saber más</a>
        </div>
        <div class="box">
          <i class='bx bx-hard-hat'></i>
          <h4>Interventora y consultoria</h4>
          <p>Necesita más información, agende una cita con nosotros</p>
          <a href="#" class="btn btn-contact">Saber más</a>
        </div>
        <div class="box">
          <i class='bx bx-paint-roll'></i>
          <h4>Remodelaciones</h4>
          <p>Necesita más información, agende una cita con nosotros</p>
          <a href="#" class="btn btn-contact">Saber más</a>
        </div>
      </div>
    </div>
  </section>
  <section id="projects" class="projects">
    <div class="projects-content container">
      <h2 class="titles">Proyectos</h2>
      <div class="projects-container container">
      <?php for($i=0;$i<sizeof($proj);$i++): ?>
        <input type="hidden" value="<?php echo $proj[$i]["pro_id"] ?>">
        <div class="box">
          <div class="box-img">
            <img src="img/<?php echo $proj[$i]["pro_imagen"] ?>" alt="Logo proyecto 1">
          </div>
          <div class="box-text">
            <div class="box-text-head">
              <img src="img/<?php echo $proj[$i]["pro_logo"] ?>" alt="Logo proyecto 1">
              <div class="descripcion">
                <p><?php echo $proj[$i]["pro_ciudad"] ?></p>
                <p class="text-name"><?php echo $proj[$i]["pro_nombre"] ?></p>
              </div>
            </div>
            <div class="box-text-info">
              <div>
                <p class="text-name">Casas</p>
                <p><?php echo $proj[$i]["pro_casas"] ?></p>
              </div>
              <div>
                <p class="text-name">Piscinas</p>
                <p><?php echo $proj[$i]["pro_piscinas"] ?></p>
              </div>
              <div>
                <p class="text-name">Parques</p>
                <p><?php echo $proj[$i]["pro_parques"] ?></p>
              </div>
              <div>
                <p class="text-name">Tipo</p>
                <p>
                  <?php 
                    if($proj[$i]["pro_tipo"] == 'V'){
                      echo "Vis";
                    }else{
                      echo "No Vis";
                    }
                  ?>
                </p>
              </div>
            </div>
            <div class="box-text-footer">
              <h3>$<?php echo $proj[$i]["pro_precio"] ?></h3>
              <button type="button" onclick="detalle_proyecto(<?php echo $proj[$i]['pro_id'] ?>)" class="btn-contact">Ver</button>
            </div>
          </div>
        </div>
      <?php endfor; ?>
      </div>
    </div>
  </section>
  <section id="gallery" class="gallery">
    <div class="gallery-content container">
      <h2 class="titles">Galería</h2>
      <div class="gallery-container container">
        <?php for($i=0;$i<sizeof($gal);$i++): ?>
        <div class="box">
          <img src="img/<?php echo $gal[$i]["gal_imagen"] ?>" alt="imagen de galeria">
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>
  <section class="contact" id="contact">
    <div class="contact-content container">
      <h2 class="titles">Contáctenos</h2>
      <div class="contact-container container">
        <div class="contact-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.865844257744!2d-74.83930602559319!3d4.246358195727535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f2920526d1bb9%3A0x1fab6d695a4322e3!2sCondominio%20villa%20esperanza%202!5e0!3m2!1ses-419!2sco!4v1701403738827!5m2!1ses-419!2sco" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-form">
          <form class="main-box" method="post" id="contact_form">
            <input type="hidden" id="cli_id" name="cli_id">
            <div class="input-box">
                <span class="icon"><i class='bx bxs-id-card'></i></span>
                <input type="text" id="cli_nombre" name="cli_nombre" required>
                <label for="cli_nombre">Nombres y Apellidos</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class='bx bxs-phone-call'></i></span>
                <input type="text" id="cli_telef" name="cli_telef" required>
                <label for="cli_telef">Celular</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class='bx bxs-envelope'></i></span>
                <input type="email" id="cli_correo" name="cli_correo" required>
                <label for="cli_correo">Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class='bx bxs-archive-out'></i></span>
                <input type="text" id="cli_asunto" name="cli_asunto" required>
                <label for="cli_asunto">Asunto</label>
            </div>
            <div class="input-area">
                <textarea id="cli_mensaje" name="cli_mensaje" cols="154" rows="5" placeholder="Comentarios"></textarea>
            </div>
            <button type="submit" name="action" id="#" value="add" class="btn btn-form">Enviar</button>
          </form>
        </div>
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
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
  <script type="text/javascript">
    window.addEventListener("scroll",function(){
      var header = document.querySelector(".menu");
      header.classList.toggle("header-scrolled",window.scrollY > 0);
    })
   
  </script>
  <script src="/constructora/public/js/index.js"></script>
  <script>
    function detalle_proyecto(pro_id){
        console.log(pro_id);
        window.open('project.php?pro_id='+pro_id+'');
    }
  </script>
  <script>
        ScrollReveal({ 
            reset: true,
            distance:'60px',
            duration: 2500,
            delay:400
         });
         ScrollReveal().reveal('.header-text', { delay: 500, origin:'up' });
         ScrollReveal().reveal('.box', { delay: 600, origin:'bottom' });
         ScrollReveal().reveal('.titles', { delay: 700, origin:'left' });
         ScrollReveal().reveal('.experience-content', { delay: 700, origin:'right' });
    </script>
    <!-- sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
