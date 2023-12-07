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
        <a href="https://wa.me/3167405456" target="_blank" class="btn btn-cite"><i class='bx bxl-whatsapp'></i> Agendar una cita</a>
      </div>
    </div>
  </header>
  <script type="text/javascript">
    window.addEventListener("scroll",function(){
      var header = document.querySelector(".menu");
      header.classList.toggle("header-scrolled",window.scrollY > 0);
    })
   
  </script>