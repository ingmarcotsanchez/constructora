<?php 
  $titulo="Perfil Administrador";
  define("URL","/constructora/views/");
  require_once("../config/conexion.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Constructores e Ingenieros</title>
  <?php require_once("modulos/head.php"); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php require_once("modulos/header.php");?>
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="../public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">G & G SAS</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../public/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <input type="hidden" id="usu_idx" value="<?php echo $_SESSION["usu_id"]; ?>">
          <a href="#" class="d-block text-orange"><?php echo $_SESSION["usu_nombre"];?></a>
        </div>
      </div>
      
      <nav class="mt-2">
        <?php require_once("modulos/menu.php");?>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 bg-white p-4">
          <div class="col-sm-6">
            <h1><?php echo $titulo; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="text-orange">Inicio</a></li>
              <li class="breadcrumb-item active"><?php echo $titulo; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-orange">
          <div class="card-header">
              <h3 class="card-title text-white">Mis datos</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                  <div class="form-group">
                      <label for="usu_nombre">Nombre</label>
                      <input type="text" class="form-control" name="usu_nombre" id="usu_nombre" placeholder="Ingrese su nombre">
                  </div>
              </div>
              <div class="col-4">
                  <div class="form-group">
                      <label for="usu_apep">Apellido Paterno</label>
                      <input type="text" class="form-control" name="usu_apep" id="usu_apep" placeholder="Ingrese su apellido">
                  </div>
              </div>
              <div class="col-4">
                  <div class="form-group">
                      <label for="usu_apem">Apellido Materno</label>
                      <input type="text" class="form-control" name="usu_apem" id="usu_apem" placeholder="Ingrese su apellido">
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                  <div class="form-group">
                      <label for="usu_correo">Correo Electrónico</label>
                      <input type="email" class="form-control" name="usu_correo" id="usu_correo" placeholder="Ingrese su nombre" readonly>
                  </div>
              </div>
              <div class="col-6">
                  <div class="form-group">
                      <label for="usu_pass">Contraseña</label>
                      <input type="text" class="form-control" name="usu_pass" id="usu_pass" placeholder="Ingrese su apellido">
                  </div>
              </div>
              <div class="col-6">
                  <div class="form-group">
                      <label for="usu_telf">Teléfono</label>
                      <input type="text" class="form-control" name="usu_telf" id="usu_telf" placeholder="Ingrese su teléfono">
                  </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-secondary" id="btnactualizar">Actualizar</button>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php require_once("modulos/footer.php");?>
</div>
<?php require_once("modulos/js.php");?>
<script type="text/javascript" src="../public/js/perfil.js"></script>
</body>
</html>
<?php
  }else{
    header("Location:".Conectar::ruta()."views/404.php");
  }
?>