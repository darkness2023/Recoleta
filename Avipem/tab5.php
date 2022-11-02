<div class="">
	<h1>Administración de sistema de Control</h1><br><br><br>
	<div class="caja_admin col-12">
		<table width="100" class="table d-table-row">
			<thead>
				
			</thead>
			<tbody>
				<tr>
					<td class="col-sm-1">Id</td>
					<td class="col-sm-4">Nombre</td>
					<td class="col-sm-1">usuario</td>
					<td class="col-sm-1">Rol</td>
					<?php
					if ($_SESSION['rol']=='admin') {
    				?>
					<td class="col-sm-1">Editar</td>
					<td class="col-sm-1">Eliminar</td>
					<?php } else {?>
					<td class="col-sm-1">N° de Contacto</td>
					<?php }?>
				</tr>
				<?php 
				//foreach ($asociados as $dato) {
				include 'cn/conex.php';
				$query3 = "SELECT * FROM t_usuario";
				$resultado3=$conex2->query($query3);
				while ($result=$resultado3->fetch_assoc()) {
				?>
				<tr>
					<td class="col-2"><?php echo $result['id_usuario']; ?></td>
					<td class="col-5"><?php echo $result['nombres']; ?></td>
					<td class="col-2"><?php echo $result['nombre_usu']; ?></td>
					<td class="col-2"><?php echo $result['rol']; ?></td>
					<?php
					if ($_SESSION['rol']=='admin') {
    				?>
					<td class="col-sm-1"><a href="Sys/editar2.php?id=<?php echo $result['id_usuario']; ?>">Editar</a></td>
					<td class="col-sm-1"><a href="Sys/eliminar2.php?id=<?php echo $result['id_usuario']; ?>">Eliminar</a></td>
					<?php 
					}else {?>
					<td class="col-2"><?php echo $result['numero']; ?></td>
					<?php }
					?>
					
				<!-- <td class="col-sm-1"><?php //echo $dato->id_user; ?></td>
					<td class="col-sm-4"><?php //echo $dato->nombre; ?></td>
					<td class="col-sm-1"><?php //echo $dato->dni; ?></td>
					<td class="col-sm-1"><?php //echo $dato->celular; ?></td>
									
					<td class="col-sm-1"><a href="Sys/editar.php?id=<?php //echo $dato->id_user; ?>">Editar</a></td>
					<td class="col-sm-1"><a href="Sys/eliminar.php?id=<?php //echo $dato->id_user; ?>">Eliminar</a></td> -->
				</tr>
				<?php } 
				?>
			</tbody>
		</table>
	</div>	
</div>