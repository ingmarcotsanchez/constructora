<?php 
  $titulo="Constructores e Ingenieros";
  define("URL","/constructora/");
  require_once("config/conexion.php");

  require_once("models/MntProyectos.php");
    $mproject = new Mntproyectos();
    $mproj = $mproject->get_mntproyectosDetallexid($_GET['pro_id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Constructores e Ingenieros</title>
    <?php require_once("views/modulos/head-index.php");?>
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
            <img src="public/img/proyectos/<?php echo $mproj[$i]["pro_imagen"] ?>" alt="Foto de la empresa">
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
                <?php for($i=0;$i<sizeof($mproj);$i++): ?>
                    <img src="public/img/proyectos/<?php echo $mproj[$i]["mpro_imagen1"] ?>" alt="" draggable="false">
                    <img src="public/img/proyectos/<?php echo $mproj[$i]["mpro_imagen2"] ?>" alt="" draggable="false">
                    <img src="public/img/proyectos/<?php echo $mproj[$i]["mpro_imagen3"] ?>" alt="" draggable="false">
                    <img src="public/img/proyectos/<?php echo $mproj[$i]["mpro_imagen4"] ?>" alt="" draggable="false">
                    <img src="public/img/proyectos/<?php echo $mproj[$i]["mpro_imagen5"] ?>" alt="" draggable="false">
                    <img src="public/img/proyectos/<?php echo $mproj[$i]["mpro_imagen6"] ?>" alt="" draggable="false">
                    <img src="public/img/proyectos/<?php echo $mproj[$i]["mpro_imagen7"] ?>" alt="" draggable="false">
                    <img src="public/img/proyectos/<?php echo $mproj[$i]["mpro_imagen8"] ?>" alt="" draggable="false">
                    <img src="public/img/proyectos/<?php echo $mproj[$i]["mpro_imagen9"] ?>" alt="" draggable="false">
                    <img src="public/img/proyectos/<?php echo $mproj[$i]["mpro_imagen10"] ?>" alt="" draggable="false">
                <?php endfor; ?>
                </div>
                <i id="right" class='bx bx-chevron-right'></i>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="footer-information container">
        <?php require_once("views/modulos/info_footer.php");?>
        </div>
        <div class="copy">
        <?php require_once("views/modulos/copy.php");?>
        </div>
  </footer>
  <script src="public/js/client.js"></script>
  <script src="public/js/menu.js"></script>
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
