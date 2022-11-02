<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: ../index.php');
	}

	if (!isset($_SESSION['nombre'])) {
		header('Location: ../log/login.php');
	}elseif(isset($_SESSION['nombre'])){
		//include '../cn/conexion.php';
		include '..\cn\conex.php';
		$id = $_GET['id'];

		$sentencia = "SELECT * FROM t_usuario WHERE id_usuario = $id";
		$senten = $conex2->query($sentencia);
		$persona2=$senten->fetch_assoc();

	}else{
		echo "Error";
	}

?>
<td>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Editar socio</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="css/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
	</script>
</head>
<body>
	<div>
		<?php
		include '..\encabezado.php';
		?>
	</div>
	<center>
		<div class="col-5 error1">
		<h3>Editar Socios:</h3>
		<form class="form-row" method="POST" action="editarProceso2.php">
			<table width="100%" class="error1">
				<tr>
					<td>Nombre: </td>
					<td><input class="cajita" type="text" name="txtNomb" value="<?php echo $persona2['nombres']; ?>"></td>
				</tr>
				<tr>
					<td>Nombre de usuario: </td>
					<td><input class="cajita" type="text" name="txtuser" value="<?php echo $persona2['nombre_usu']; ?>"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input class="cajita" type="text" name="txt_pass" value="<?php echo $persona2['password_usu']; ?>"></td>
				</tr>
				<tr>
					<td>Rol: </td>
					<td><input class="cajita" type="text" name="txt_rol" value="<?php echo $persona2['rol']; ?>"></td>
				</tr>
				<tr>
					<td>Número: </td>
					<td><input class="cajita" type="text" name="txt_num" value="<?php echo $persona2['numero']; ?>"></td>
				</tr>
				<tr></tr>
				<tr class="botoncito">
					<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $persona2['id_usuario']; ?>">
					<td><input class="btn btn-success" id="editar_user" type="submit" name="editar_user" value="Editar"></td>
					<a href="..\index.php">Cancelar</a>
					<td><input class="btn btn-success" id="anadir_user" type="submit" name="anadir_user" value="Añadir"></td>
				</tr>
			</table>
		</form>
		</div>
	</center>
</body>
</html>