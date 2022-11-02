<?php 
	session_start();
	include_once '../cn/conexion.php';
	$usuario = $_POST['txtUsu'];
	$contrasena = $_POST['txtPass'];
	$sentencia = $bd->prepare('select * from t_usuario where 
								nombre_usu = ? and password_usu = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.php');
	}elseif ($datos->rol=='admin') {
		$_SESSION['nombre'] = $datos->nombres;
		$_SESSION['rol'] = $datos->rol;
		header('Location: ../index.php');
	}elseif ($datos->rol=='user') {
		$_SESSION['nombre'] = $datos->nombres;
		$_SESSION['rol'] = $datos->rol;
		header('Location: ../index.php');
		}
	elseif($sentencia->rowCount() == 1){
		$_SESSION['nombre'] = $datos->nombres;
		header('Location: login.php');
	}
?>