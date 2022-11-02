<div class="modal">
  <div id="bodyModal" style="" >
    <form class="col10" action="" method="POST" name="edit_socio">
      
      <table>
        <tr>
          <td class="col3">
            <label class="col3" for="">Nombre del socio</label>
          </td>
          <td class="col5">
              <input class="col5" type="text" name="nombreSocio" placeholder="nombre">  
          </td>
        </tr>
        <tr>
          <td>
             <label class="col3" for="">N° de DNI</label>
          </td>
          <td>
            <input class="col5" type="text" name="dniSocio" placeholder="DNI">
          </td>
        </tr>
        <tr>
          <td>
             <label class="col3" s for="">N° de Celular</label>
          </td>
          <td>
            <input class="col5" type="text" name="celularSocio" placeholder="celular">
          </td>
        </tr>
        <tr>
          <td>
            <label class="col3" for="">Corre electrónico</label>
          </td>
          <td>
            <input class="col5" type="text" name="emailSocio" placeholder="email">
              
          </td>
        </tr>
        <tr>
          <td>
            <label class="col3" for="">Ocupación</label>
            
          </td>
          <td>
            <input class="col5" type="text" name="ocupacionSocio" placeholder="ocupacion">
              
          </td>
        </tr>
        <tr>
          <td>
            <label class="col3" for="">Manzana</label>
             
          </td>
          <td>
            <input class="col5" type="text" name="manzanaSocio" placeholder="manzana">
             
          </td>
        </tr>
        <tr>
          <td>
            <label class="col3" for="">N° lote</label>
            
          </td>
          <td>
            <input class="col5" type="text" name="loteSocio" placeholder="lote">
            
          </td>
        </tr>
        <tr>
            <td>
              <label class="col3" for="">Edad</label>
            
            </td>
            <td>
              <input class="col5" type="text" name="edadSocio" placeholder="edad"><br>
            
            </td>
        </tr>
        <tr>
          <td>
            <label class="col3" for="">foto</label>
          </td>
          <td>
            <input class="col5" type="text" name="fotoSocio" placeholder="fotito"><br>
          </td>
        </tr>
        
      </table>
      
      
      <input type="hidden" required>
      <button type="submit" class="btn btn-primary">Editar</button>
      <button type="close" class="closeModal">Cancelar</button>
    </form>
  </div>
</div>





$('.modal').fadeIn();
function closeModal(){
    $('.modal').fadeOut('slow');
  }