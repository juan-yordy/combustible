<!--aqi estara el crud de usuario-->
<h1>FORMULARIO DE REGISTRO</h1>

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">CONSULTA</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">REGISTRO</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
   <!-- Tab panes CONSULTA-->
    <div role="tabpanel" class="tab-pane active" id="home">
    	<table class="table table-striped">
    		<thead>
    		    <th>ID</th>yer resiemyer te
    			<th>Perfil</th>
    			<th>Nombres</th>
    			<th>Apellidos</th>
    			<th>Correo</th>
    			<th>Acciones</th>
    		</thead>
    		<tbody>
    			<?php foreach ($listaUsuario as $value) { ?>
    			   <tr>
    			   	  <td ><?php echo $value->usu_id; ?></td>
    			   	  <td><?php echo $value->per_nombre; ?></td><!--esta se cambia con el inner join de per_id_ a per_nombre-->
    			   	  <td><?php echo $value->usu_nombres; ?></td>
    			   	  <td><?php echo $value->usu_apellidos; ?></td>
    			   	  <td><?php echo $value->usu_correo; ?></td>
    			   	  <td>
              <a href="#"  class="btn btn-warning btn-xs" onclick="enviarajax('<?=$value->usu_id?>')">Editar...</a>    
                </td>
    			   </tr>

    			<?php } ?>
    		</tbody>

    	</table>


    </div>
     <!-- Tab panes REGISTRO-->
    <div role="tabpanel" class="tab-pane" id="profile">
           <div class="row">
           	 <div class="col-md-7">
		           	    <!--aqi se va recuperar selPerfil()-->
					<form method="POST" action="<?php echo base_url('usuario/insert')?>"><!--el metodo post se esta agrafando  controlador -->
					  <div class="form-group">
					    <label for="exampleInputEmail1">Perfil</label>
					    <select name="txtIdper" class="form-control">
					    <?php foreach ($selPerfil as $value){?>
					    	  <option value="<?php echo $value->per_id ?>"> <?php echo $value->per_nombre;?></option>
					    <?php } ?>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Nombres</label>
					    <input type="text" name="txtNombres" class="form-control" id="exampleInputPassword1" placeholder="nombre">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Apellidos</label>
					    <input type="text" name="txtApellidos" class="form-control" id="exampleInputPassword1" placeholder="apellido">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Correo</label>
					    <input type="text" name="txtCorreo" class="form-control" id="exampleInputPassword1" placeholder="correo">
					  </div>

					   <div class="form-group">
					    <label for="exampleInputPassword1">Telefono</label>
					    <input type="text" name="txtTelefono" class="form-control" id="exampleInputPassword1" placeholder="telefono">
					  </div>
					  
					  <button type="submit" class="btn btn-primary">Registrar Usuario</button>
					</form>
           	
           	 </div>
           	 <div class="col-md-5">
           	 	
           	 </div>

           </div>

    	  

    </div>
 
  </div>

</div>
<div id="divEditar"></div>
<script>
function enviarajax(id_persona)
    {
    $.ajax({
      method: "POST",
      url: "usuario/EditarUsuario",
      data:{usu_id:id_persona }
      
    })
      .done(function(resultado) {
        $('#divEditar').html(resultado);
      });
    }
 </script>
