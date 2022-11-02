<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
	header('Location: ../index.php');
	}
	//if ($_FILES['image02']['size']>2024000) {
	//echo "Solo se permiten archivos de 2 MB";
	//echo "<a href='../index.php'>Volver</a>";
	//exit();
	//}

	include '../cn/conex.php';
	$id2 = $_POST['id2'];
	$nombre2 = $_POST['txt2Nombre'];
	$dni2 = $_POST['txt_dni'];
	$celular2 = $_POST['txt_celular'];
	$email2 = $_POST['txt_email'];
	$ocupacion2 = $_POST['txt_ocupacion'];
	$manzana2 = $_POST['txt_manzana'];
	$lote2 = $_POST['txt_lote'];
	$edad2 = $_POST['txt_edad'];
	$sexo2 = $_POST['txt_sexo'];
	
	if (isset($insert_image2)) {
	$insert_image2 = addslashes(file_get_contents($_FILES['imagen02']['tmp_name']));
		
	$sentencia2 = "UPDATE usuarios SET nombre = '$nombre2',dni = '$dni2',celular = '$celular2',email = '$email2',ocupacion = '$ocupacion2',manzana = '$manzana2',lote = '$lote2',edad = '$edad2',sexo = '$sexo2',imagen = '$insert_image2'  WHERE id_user = '$id2'";
	}elseif (!isset($insert_image2)) {
	$sentencia2 = "UPDATE usuarios SET nombre = '$nombre2',dni = '$dni2',celular = '$celular2',email = '$email2',ocupacion = '$ocupacion2',manzana = '$manzana2',lote = '$lote2',edad = '$edad2',sexo = '$sexo2'  WHERE id_user = '$id2'";
	}
	
	$resultado2 = $conex2->query($sentencia2);
	//print_r($resultado2);
	//$sentencia = $bd->prepare("UPDATE usuarios SET nombre = ?,dni = ?,celular = ?,email = ?,ocupacion = ?,manzana = ?,lote = ?,edad = ?,sexo = ?,imagen = ? WHERE id_user = ?;");
	//$resultado = $sentencia->execute([$nombre2,$dni2,$celular2,$email2,$ocupacion2,$manzana2,$lote2,$edad2,$sexo2,$dir.$nombre_archivo, $id2]);

	if ($resultado2 === TRUE) {
		
		echo "<SCRIPT LANGUAGE='JavaScript'>
				    window.alert('¡Registro Actualizado!')
				    window.location.href='../index.php';
			  </SCRIPT>";

	}else{
		echo "Error";
		echo "ERROR: No se ejecuto $sentencia2. " . mysqli_error($conex2);
	}
	

?>