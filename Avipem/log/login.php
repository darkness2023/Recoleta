<?php 
  session_start();
  if (isset($_SESSION['nombre'])) {
    header('Location: ../index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Asociación de Vivienda AVIPEM </title>
<link rel="stylesheet" href="../css/master.css">
</head>
<body>

  <div class="Login-box error1">
    <img class="avatar" src="../img/Logo.jpg" alt="loguito">
    <h1> Inicia Sesión </h1>
    <form method="POST" action="loginProceso.php">
      
      <label for="Username">Nombre de Usuario</label>
      <input type="text" name="txtUsu" placeholder="Ingrese su usuario">

      
      <label for="password">Ingrese Password</label>
      <input type="password" name="txtPass" placeholder="ingrese su clave">

      <input type="submit" value="Iniciar sesión">

<h4>Si olvido su usuario y/o clave por favor comuniquese con el administrador del sistema</h4>

    </form>
  </div>

</body>
</html>
