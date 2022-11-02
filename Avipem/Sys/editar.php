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

		//$sentencia = $bd->prepare("SELECT * FROM usuarios WHERE id_user = ?;");
		//$sentencia->execute([$id]);
		//$persona = $sentencia->fetch(PDO::FETCH_OBJ);
		$sentencia = "SELECT * FROM usuarios WHERE id_user = $id";
		$sent = $conex2->query($sentencia);
		$persona=$sent->fetch_assoc();

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
		<form class="form-row" method="POST" action="editarProceso.php" enctype="multipart/form-data">
			<table width="100%" class="error1">
				<tr>
					<td>Foto socio: </td>
					<td><img style="width: 150px;" src="data:image/jpg;base64,<?php echo base64_encode($persona['imagen']);?>" alt="Sin foto"></td>
				</tr>
				<tr>
					<td>Nombre: </td>
					<td><input class="cajita" type="text" name="txt2Nombre" value="<?php echo $persona['nombre']; //$persona->nombre; ?>"></td>
				</tr>
				<tr>
					<td>DNI: </td>
					<td><input class="cajita" type="text" name="txt_dni" value="<?php echo $persona['dni'];//$persona->dni; ?>"></td>
				</tr>
				<tr>
					<td>celular: </td>
					<td><input class="cajita" type="text" name="txt_celular" value="<?php echo $persona['celular']; //$persona->celular; ?>"></td>
				</tr>
				<tr>
					<td>email: </td>
					<td><input class="cajita" type="text" name="txt_email" value="<?php echo $persona['email']; //$persona->email; ?>"></td>
				</tr>
				<tr>
					<td>ocupacion: </td>
					<td><input class="cajita" type="text" name="txt_ocupacion" value="<?php echo $persona['ocupacion']; //$persona->ocupacion; ?>"></td>
				</tr>
				<tr>
					<td>manzana: </td>
					<td><input class="cajita" type="text" name="txt_manzana" value="<?php echo $persona['manzana']; //$persona->manzana; ?>"></td>
				</tr>
				<tr>
					<td>lote: </td>
					<td><input class="cajita" type="text" name="txt_lote" value="<?php echo $persona['lote']; //$persona->lote; ?>"></td>
				</tr>
				<tr>
					<td>edad: </td>
					<td><input class="cajita" type="text" name="txt_edad" value="<?php echo $persona['edad']; //$persona->edad; ?>"></td>
				</tr>
				<tr>
					<td>sexo: </td>
					<td><input class="cajita" type="text" name="txt_sexo" value="<?php echo $persona['sexo'] //$persona->sexo; ?>"></td>
				</tr>
				<!-- <tr>
					<td>Foto: </td>
					<img src="<?php //echo $persona->image; ?>" alt="">
					<td><input type="file" name="image2" id="image2" value="<?php //echo $persona->image;?>"></td>
				</tr> -->
				<tr>
					<td>Modificar foto: </td>
					<td><input class="cajita" type="file" name="imagen02" id="image"></td>
				</tr>
				<tr></tr>
				<tr class="botoncito">
					<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $persona['id_user'];//$persona->id_user; ?>">
					<td  colspan="2"><input class="btn btn-success" type="submit" value="EDITAR Usuarios"></td>
					<a href="..\index.php" >Cancelar</a>
				</tr>
			</table>
		</form>
		</div>
	</center>
</body>
</html>