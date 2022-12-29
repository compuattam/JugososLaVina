<!doctype html>
<html lang="es">
  <?php require_once('conexion.php') ?>
  <?php require_once('bloqueo.php') ?>
  <?php require_once('partes/head.php'); ?>
  <body>
    
<?php require_once('partes/header.php'); ?>

<div class="container-fluid">
  <div class="row">
  <?php require_once('partes/nav.php'); ?>

  <?php require_once('modulos/nominas.php'); ?>
  </div>
</div>


      <?php require_once('partes/script.php'); ?>
  </body>
  <script src="js/ajax.js"></script>
  <script src="js/funciones.js"></script>
</html>
