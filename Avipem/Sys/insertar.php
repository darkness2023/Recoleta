<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}
	if ($_FILES['image']['size']>2024000) {
		echo "Solo se permiten archivos de 1 MB";
		echo "<a href='../index.php'>Volver</a>";
		exit();
	}

	include '../cn/conex.php';
	//Codigo para limitar el tamaño de la foto
	//$dir="../img/";
	//$nombre_archivo = $_FILES['image']['name'];
	//if (!move_uploaded_file($_FILES['image']['tmp_name'],$dir.$nombre_archivo)) {
	//	echo "Error al subir archivo";
	//	echo "<a href='../index.php'>Volver</a>";
	//	exit();
	//}
	$nombre = $_POST['txtNombre'];
	$dni = $_POST['txt_dni'];
	$celular = $_POST['txt_celular'];
	$email = $_POST['txt_email'];
	$ocupacion = $_POST['txt_ocupacion'];
	$manzana = $_POST['txt_manzana'];
	$lote = $_POST['txt_lote'];
	$edad = $_POST['txt_edad'];
	$sexo = $_POST['txt_sexo'];
	$insert_image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	

	$sentencia="INSERT INTO usuarios(nombre,dni, celular,email,ocupacion,manzana,lote,edad,sexo,imagen) VALUES ('$nombre','$dni','$celular','$email','$ocupacion','$manzana','$lote','$edad','$sexo','$insert_image')";
	$resultado=$conex2->query($sentencia);

	//Comando insertar usando PDO
	//$sentencia = $bd->prepare("INSERT INTO usuarios(nombre,dni, celular,email,ocupacion,manzana,lote,edad,sexo,imagen) VALUES (?,?,?,?,?,?,?,?,?,?);");
	//$resultado = $sentencia->execute([$nombre,$dni,$celular,$email,$ocupacion,$manzana,$lote,$edad,$sexo,$insert_image]);
	///$resultado = $sentencia->execute([$nombre,$dni,$celular,$email,$ocupacion,$manzana,$lote,$edad,$sexo,$dir.$nombre_archivo]);

	if ($resultado === TRUE) {
		echo "<SCRIPT LANGUAGE='JavaScript'>
				    window.alert('¡Registro exitoso!')
				    window.location.href='../index.php';
			    </SCRIPT>";
	}else{
		echo "Error";
	}
?>