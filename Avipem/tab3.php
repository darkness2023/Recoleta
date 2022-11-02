<div class="col-10">
	<h1>Aportes de los Socios de la Asociacion Avipem</h1><br><br><br>
	<div class="caja_editar col-11">
		<form method="POST" role="form" action="">
          <div class="mb-3">
            <label for="" class="form-label">Número de DNI</label>
            <input type="text" class="form-control" name="bus_dni" required placeholder="Ingrese DNI">
           </div>
          <button type="submit" class="btn btn-success">Consultar</button>
    </form>
        <?php 
        	include 'Sys/Consulta.php';
		?>
	</div>	
</div>