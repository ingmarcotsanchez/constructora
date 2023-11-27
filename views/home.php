<?php 
  $titulo="Información General";
  date_default_timezone_set('America/Bogota');
  $fecha_actual = date("d-m-Y");
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
          <a href="#" class="d-block text-orange">Alexander Pierce</a>
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
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="far fa-calendar-alt"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Fecha</span>
                <span class="info-box-number">
                  <?php echo $fecha_actual;?>
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="far fa-image"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Imágenes</span>
                <span class="info-box-number">41,410</span>
              </div>
            </div>
          </div>
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Proyectos</span>
                <span class="info-box-number">760</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-orange elevation-1"><i class="fas fa-users text-white"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Nuevos Clientes</span>
                <span class="info-box-number">2,000</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title text-bold text-orange">Últimos clientes interesados</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                    <tr>
                      <th>Nombre del cliente</th>
                      <th>Correo Electrónico</th>
                      <th>Número de contacto</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="../public/dist/img/user.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Nombres y apellidos
                      </td>
                      <td>nombres.apellidos@gmail.com</td>
                      <td>
                        310 111 1111
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="../public/dist/img/user.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Nombres y apellidos
                      </td>
                      <td>nombres.apellidos@gmail.com</td>
                      <td>
                        310 111 1111
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="../public/dist/img/user.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Nombres y apellidos
                      </td>
                      <td>nombres.apellidos@gmail.com</td>
                      <td>
                        310 111 1111
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="../public/dist/img/user.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Nombres y apellidos
                      </td>
                      <td>nombres.apellidos@gmail.com</td>
                      <td>
                        310 111 1111
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="../public/dist/img/user.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Nombres y apellidos
                      </td>
                      <td>nombres.apellidos@gmail.com</td>
                      <td>
                        310 111 1111
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php require_once("modulos/footer.php");?>
</div>
<?php require_once("modulos/js.php");?>
</body>
</html>
