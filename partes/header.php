<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
    <img id="log" src="img/logo.png" width="60px" alt="logo">
    Jugosos la Viña
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!--<input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">-->
  <!-- Información usuario -->
  <span style="color:white">
    Bienvenido <?php echo $userr['nombre']; ?> - Estado:
    <?php
    if ($userr['activo'] == "Si") {
      echo "ACTIVO";
    } else {
      echo "NO ACTIVO";
    }
    ?>
  </span>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="salir.php">Cerrar Sesión</a>
    </div>
  </div>
</header>