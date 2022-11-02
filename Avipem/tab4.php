<div class="col-9">
		<h3>Ingresar Usuarios:</h3>
	<form class="form-control" method="POST" action="Sys/insertar.php" enctype="multipart/form-data">
		<table class="d-table-cell table tab-insert">
			<div class="error2">
				<tr>
					<td>Apellidos y Nombres :</td>
					<td><input type="text" name="txtNombre"></td>
				</tr>
				<tr>
					<td>DNI: </td>
					<td><input type="text" name="txt_dni"></td>
				</tr>
			</div>
				<tr>
					<td>celular: </td>
					<td><input type="text" name="txt_celular"></td>
				</tr>
				<tr>
					<td>email: </td>
					<td><input type="text" name="txt_email"></td>
				</tr>
				<tr>
					<td>ocupacion: </td>
					<td><input type="text" name="txt_ocupacion"></td>
				</tr>
				<tr>
					<td>manzana: </td>
					<td><input type="text" name="txt_manzana"></td>
				</tr>
				<tr>
					<td>lote: </td>
					<td><input type="text" name="txt_lote"></td>
				</tr>
				<tr>
					<td>edad: </td>
					<td><input type="text" name="txt_edad"></td>
				</tr>
				<tr>
					<td>sexo: </td>
					<td><input type="text" name="txt_sexo"></td>
				</tr>
				<tr>
					<td>Foto: </td>
					<td><input type="file" class="btn-success" name="image" id="image"></td>
				</tr>
				<input type="hidden" class="btn-success" name="oculto" value="1"><br>
				<tr>
					<td><input type="reset" class="btn-success" name="" value="Limpiar"></td>
					<td><input class="btn-success" type="submit" value="Añadir usurio"></td>
				</tr>
			</table>
		</form>
		</div>