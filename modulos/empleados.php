<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Empleados</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <!--<div class="btn-group me-2">
            
          </div>-->
      <div aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Empleados</li>
        </ol>
      </div>



    </div>
  </div>

  <!--area de trabajo-->
  <?php require_once('bloques/empleados/formulario.php'); ?>

  <br>
  <?php
  if (isset($_GET['id_empleado']) && $_GET['id_empleado'] > 0) {
    require_once('bloques/empleados/editar.php');
  } else {
    if (isset($_GET['datos']) && $_GET['datos'] != "") {
      require_once('bloques/empleados/buscar.php');
    } else {
      require_once('bloques/empleados/consulta.php');
    }
  }

  ?>
</main>