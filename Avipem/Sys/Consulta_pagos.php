
        <?php
       
        if (isset($_POST['bus_dni'])) {

           //include '../cn/conexion.php';
          $bus_dni=$_POST['bus_dni'];
          //$bus_dni='12121212';
          $sent_bus = $bd->prepare("SELECT * FROM usuarios WHERE dni = ?;");
          $sent_bus->execute([$bus_dni]);
          $rows_bus = $sent_bus->fetch(PDO::FETCH_OBJ);
          }
          if (!isset($rows_bus->id_user)) {
            //echo "Ingrese un DNI valido";
          }
          else {

         ?>
            <table class="table-primary" width="100%" border="2px">
              <thead>
                <tr>
                  <th colspan="12" class="text-center">Socios Avipem</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="col-1">Id</td>
                  <td class="col-3">Nombres</td>
                  <td class="col-1">DNI</td>
                  <td class="col-1">Celular</td>
                  <td class="col-1">Manzana</td>
                  <td class="col-1">Lote</td>
                  <?php
                  if ($_SESSION['rol']=='admin') {
                  ?>
                  <td class="col-sm-1">Editar</td>
                  <td class="col-sm-1">Eliminar</td>
                  <?php }else{
                  } ?>
                </tr>
               
                <tr>
                  <td class="col-1"><?php echo $rows_bus->id_user; ?></td>
                  <td class="col-3"><?php echo $rows_bus->nombre; ?></td>
                  <td class="col-1"><?php echo $rows_bus->dni; ?></td>
                  <td class="col-1"><?php echo $rows_bus->celular; ?></td>
                  <td class="col-1"><?php echo $rows_bus->manzana; ?></td>
                  <td class="col-1"><?php echo $rows_bus->lote; ?></td>
                  
                  <?php
                  if ($_SESSION['rol']=='admin') {
                  ?>
                  <td class="col-sm-1"><a href="Sys/editar.php?id=<?php echo $rows_bus->id_user; ?>">Editar</a></td>
                  <td class="col-sm-1"><a href="Sys/eliminar.php?id=<?php echo $rows_bus->id_user; ?>">Eliminar</a></td>
                  <?php }else{
                  } ?>
                </tr>
              <?php }
            ?>
              </tbody>
            </table>
