
<div class="col-10">
	<h1>Socios de la Asociación de vivienda AVIPEM</h1><br><br><br>
	<div class="caja_editar col-11">
		<table class="table d-table-row">
			<thead>
				
			</thead>
			<tbody>
				<tr>
					<td class="col-sm-1">Id</td>
					<td class="col-sm-1">Foto</td>
					<td class="col-sm-4">Nombres</td>
					<td class="col-sm-1">DNI</td>
					<td class="col-sm-1">Celular</td>
					<?php
					if ($_SESSION['rol']=='admin') {
    				?>
					<td class="col-sm-1">Editar</td>
					<td class="col-sm-1">Eliminar</td>
					<?php }else{} ?>
				</tr>
				<?php 
				//foreach ($asociados as $dato) {
				include 'cn/conex.php';
				$query2 = "SELECT * FROM usuarios";
				$resultado2=$conex2->query($query2);
				while ($resu2=$resultado2->fetch_assoc()) {
				?>
				<tr class="align-middle">
					<td class="col-sm-1"><?php echo $resu2['id_user']; ?></td>
					<td class="col-sm-1"><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($resu2['imagen']); ?>" alt=""></td>
					<td class="col-sm-3"><?php echo $resu2['nombre']; ?></td>
					<td class="col-sm-1"><?php echo $resu2['dni']; ?></td>
					<td class="col-sm-1"><?php echo $resu2['celular']; ?></td>
					<?php
					if ($_SESSION['rol']=='admin') {
    				?>
					
          <td class="col-sm-1"><a class="edit_socio" socio="<?php echo $resu2['id_user']; ?>" href="#">Editar</a></td>

          <!--<td class="col-sm-1"><a href="Sys/editar.php?id=<?php // echo $resu2['id_user']; ?>">Editar</a></td>-->
					<td class="col-sm-1"><a href="Sys/eliminar.php?id=<?php echo $resu2['id_user']; ?>">Eliminar</a></td>
					<?php }else{
					} 
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
<head>
  <link rel="stylesheet" href="css/estilos.css">
</head>

