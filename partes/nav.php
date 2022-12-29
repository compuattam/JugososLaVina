<nav style="font-size:125%" id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky" id="menu">
    <h6 style="font-size:100%" class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
      <span>MENU PRINCIPAL</span>
      <a class="link-secondary" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle" class="align-text-bottom"></span>
      </a>
    </h6>
    <ul class="nav flex-column">
      <!-- <li class="nav-item">
            <a class="nav-link" aria-current="page" href="dashboard.php">
              <span class="align-text-bottom fas fa-home"></span>
              Dashboard
            </a>
          </li> -->
     <!--  <li class="nav-item">
        <a class="nav-link" href="corporativo.php">
          <span class="align-text-bottom fas fa-building"></span>
          Corporativo
        </a>
      </li> -->
      <!-- <li class="nav-item">
            <a class="nav-link" href="contabilidad.php">
              <span class="align-text-bottom fas fa-hand-holding-usd"></span>
              Contabilidad
            </a>
          </li> -->
      <?php
        if($userr['rol'] == "administrador" || $userr['rol'] === "aux administrativa") {
      ?>
      <li class="nav-item">
        <a class="nav-link" href="inventario.php">
          <span class="align-text-bottom fas fa-box-open"></span>
          Inventario
        </a>
      </li>
      <?php } ?>
      <?php
        if($userr['rol'] == "administrador" || $userr['rol'] === "aux administrativa") {
      ?>
      <li class="nav-item">
        <a class="nav-link" href="cuentasporcobrar.php">
          <span class="align-text-bottom fas fa-business-time"></span>
          Cuentas por Cobrar
        </a>
      </li>
      <?php } ?>
      <?php 
        if($userr['rol'] == "administrador" || $userr['rol'] === "aux administrativa") {
      ?>
      <li class="nav-item">
        <a class="nav-link" href="cuentasporpagar.php">
          <span class="align-text-bottom fas fa-book"></span>
          Cuentas por Pagar
        </a>
      </li>
      <?php } ?>
      <?php 
        if($userr['rol'] == "administrador" || $userr['rol'] === "aux administrativa") {
      ?>
      <li class="nav-item">
        <a class="nav-link" href="nominas.php">
          <span class="align-text-bottom fas fa-calculator"></span>
          Nóminas
        </a>
      </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="empleados.php">
          <span class="align-text-bottom fas fa-id-card-alt"></span>
          Empleados
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="proveedores.php">
          <span class="align-text-bottom fas fa-user-check"></span>
          Proveedores
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="clientes.php">
          <span class="align-text-bottom fas fa-users"></span>
          Clientes
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="facturacionyreportes.php">
          <span class="align-text-bottom fas fa-users"></span>
          Reportes Facturación
        </a>
      </li>
      <?php
      if ($userr['rol'] == "administrador") {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="usuarios.php">
            <span class="align-text-bottom fas fa-user-cog"></span>
            Usuarios
          </a>
        </li>
      <?php } ?>
      <!-- <li class="nav-item">
        <a class="nav-link" href="ayuda.php">
          <span class="align-text-bottom fas fa-life-ring"></span>
          Ayuda
        </a>
      </li> -->
    </ul>
  </div>
</nav>