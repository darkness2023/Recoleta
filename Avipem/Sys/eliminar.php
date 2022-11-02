<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	include '../cn/conexion.php';
	$sentencia = $bd->prepare("DELETE FROM usuarios WHERE id_user = ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		
		echo "<SCRIPT LANGUAGE='JavaScript'>
				    window.alert('¡Registro Eliminado!')
				    window.location.href='../index.php';
			    </SCRIPT>";
	}else{
		echo "Error";
	}

?>