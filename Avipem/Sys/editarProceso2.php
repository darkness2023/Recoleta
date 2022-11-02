<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
	header('Location: ../index.php');
	}

		include '../cn/conex.php';
		$id2 = $_POST['id2'];
		$nomb = $_POST['txtNomb'];
		$nom_user = $_POST['txtuser'];
		$password = $_POST['txt_pass'];
		$Rol = $_POST['txt_rol'];
		$num_tel = $_POST['txt_num'];
		$pass_encryp = password_hash($password,PASSWORD_DEFAULT);

		
		//echo $anadir_user;
		if (isset($_POST['editar_user'])) {
		
		
		$sentencia = "UPDATE t_usuario SET nombres = '$nomb',nombre_usu = '$nom_user',password_usu = '$pass_encryp',rol = '$Rol',numero = '$num_tel'  WHERE id_usuario = '$id2'";
		$resultado = $conex2->query($sentencia);
		//print_r($resultado);	
		}
		if (isset($_POST['anadir_user'])) {
				
		$sentencia="INSERT INTO t_usuario (nombres,nombre_usu,password_usu,rol,numero) VALUES ('$nomb','$nom_user','$pass_encryp','$Rol','$num_tel')";
		$resultado=$conex2->query($sentencia);
		//print_r($resultado);
		}

	if ($resultado === TRUE) {
		   echo "<SCRIPT LANGUAGE='JavaScript'>
				    window.alert('¡Registro Actualizado!')
				    window.location.href='../index.php';
			    </SCRIPT>";

	}else{
		echo "Error";
		echo "ERROR: No se ejecuto $sentencia. " . mysqli_error($conex2);
	}
	

?>