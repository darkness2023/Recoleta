<?php  
  session_start();
  if (!isset($_SESSION['nombre'])) {
    header('Location: log/login.php');
  }elseif(isset($_SESSION['nombre'])){
    include 'cn/conexion.php';
    
    $sentencia = $bd->query("SELECT * FROM usuarios;");
    $asociados = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($asociados);
  }else{
    echo "Error en el sistema";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>AVIPEM</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
	</script> -->
	<script src="css/jquery-3.2.1.min.js"></script>
	<script src="css/funtion.js"></script>
	<script src="css/main.js"></script>
	<script src="css/bootstrap.bundle.min.js"></script>


</head>
<body>
	<div class="encabezado">
	<div style="background-image: url(img/avipem4.jpg);" class="col-12 text-center loguito">
		<h4>Bienvenido: <?php echo $_SESSION['nombre'] ?></h4>
		<a href="cerrar.php">Cerrar Sesión</a>
</div>
</div>
	<div class="wrap">
		<ul class="tabs">
			<li><a href="index.php"><span class="fa fa-home"></span><span class="tab-text">Inicio</span></a></li>
			<li><a href="#tab2"><span class="fa fa-group"></span><span class="tab-text">Buscar</span></a></li>
			<li><a href="#tab3"><span class="fa fa-briefcase"></span><span class="tab-text">Editar</span></a></li>
			<li><a href="#tab4"><span class="fa fa-bookmark"></span><span class="tab-text">Añadir</span></a></li>
			<li><a href="#tab5"><span class="fa fa-money"></span><span class="tab-text">Usuarios</span></a></li>
		</ul>

		<div class="secciones">
			<article id="tab1">
				<center>
					<?php 
					include 'tab1.php';
					 ?>
				</center>
			</article>
			<article id="tab2">
				<h2>Buscar Socios</h2>
        <form method="POST" role="form" action="">
          <div class="mb-3">
            <label for="" class="form-label">Número de DNI</label>
            <input type="text" class="form-control" name="bus_dni" required placeholder="Ingrese DNI">
           </div>
          <button type="submit" class="btn btn-success">Consultar</button>
        </form>
        <?php 
        	include 'Sys/Consulta.php';
				?><br>
						
			</article>
			<article id="tab3" class="col-12">
				<center>
				
					<?php include 'tab3.php' ?>
		
				</center>
			</article>
			<article id="tab4">
				<center>
				<?php include 'tab4.php' ?>
				</center>
			</article>
			<article id="tab5">
				<center>
				<?php include 'tab5.php' ?>
				</center>
			</article>
		</div>
	</div>
</body>
</html>