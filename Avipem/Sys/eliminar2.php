<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	include '../cn/conexion.php';
	$sentencia = $bd->prepare("DELETE FROM t_usuario WHERE id_usuario = ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		//echo "<script languaje="javascript">alert('Registro Eliminado');</script>";
		//header('Location: ../index.php');
		   echo "<SCRIPT LANGUAGE='JavaScript'>
				    window.alert('¡Registro Eliminado!')
				    window.location.href='../index.php';
			    </SCRIPT>";
			
	}else{
		echo "Error";
	}

?>