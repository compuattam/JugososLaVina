<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    
    <link href="css/bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">

    <link href="css/signin.css" type="text/css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <main class="form-signin w-100 m-auto">
      <form action="login.php" method="post" >
        <img class="mb-4" src="img/logo.png" alt="" width="150" height="150">
        <h1 class="h3 mb-3 fw-normal"><b>Iniciar sesión</b></h1>

        <div class="form-floating">
          <input type="text" name="usuario" class="form-control" id="email" placeholder="Usuario" required="required">
          <label for="floatingInput">Usuario</label>
        </div>
        <div class="form-floating">
          <input type="password" name="clave" class="form-control" id="clave" placeholder="Contraseña" required>
          <label for="floatingPassword">Contraseña</label>
        </div>
        <br>
        <!--<div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"><b>Remember me</b>
          </label>
        </div>-->
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="boton" value="Ingresar"><b>Ingresar</b></button>
        <p class="mt-5 mb-3 text-muted"><b>&copy; 2022</b></p>
      </form>
    </main>    
  </body>
</html>
