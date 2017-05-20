<!--aqi estara el crud de usuario-->
<h3>FORMULARIO DE REGISTRO</h3>

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">CONSULTAusuario</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">REGISTRO</a></li>
   <li role="presentation"><a href="#profile1" aria-controls="profile1" role="tab" data-toggle="tab">COMBUSTIBLE</a></li>
    <li role="presentation" class="active"><a href="#home1" aria-controls="home1" role="tab" data-toggle="tab">list combustible</a></li>
    <li role="presentation" class="active"><a href="#profile2" aria-controls="profile2" role="tab" data-toggle="tab">ENTRADA</a></li>
    <li role="presentation" class="active"><a href="#profile3" aria-controls="profile3" role="tab" data-toggle="tab">SALIDA</a></li>
  
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
   <!-- Tab panes CONSULTA-->
    <div role="tabpanel" class="tab-pane active" id="home">
      <table class="table table-striped">
        <thead>
            <th>ID</th>
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
              <a href="#"  class="btn btn-warning btn-xs" onclick="enviarajax('<?=$value->usu_id?>')">Editar</a>
              <a href="#"  class="btn btn-danger btn-xs" onclick="enviarajaxelimnar('<?=$value->usu_id?>')">Eliminar</a>      
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

       <!-- Tab panes REGISTRO COMBUSTIBLE-->
    <div role="tabpanel" class="tab-pane" id="profile1">
           <div class="row">
             <div class="col-md-7">
                    <!--aqi se va recuperar selPerfil()-->
          <form method="POST" action="<?php echo base_url('usuario/insertacombus')?>"><!--el metodo post se esta agrafando  controlador -->

            <div class="form-group">
              <label for="exampleInputPassword1">CODIGO</label>
              <input type="text" name="txtCodigo" class="form-control" id="exampleInputPassword1" placeholder="CODIGO">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Nombre</label>
              <input type="text" name="txtNombre" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">fecha registro</label>
              <input type="date" name="txtFecha" class="form-control" id="exampleInputPassword1" placeholder="fecha">
            </div>
            
            <div class="form-group">
              <label for="exampleInputPassword1">Localizacion</label>
              <input type="text" name="txtLocalizacion" class="form-control" id="exampleInputPassword1" placeholder="localizacion">
            </div>
            
             <div class="form-group">
              <label for="exampleInputPassword1">cantidad</label>
              <input type="text" name="txtCantidad" class="form-control" id="exampleInputPassword1" placeholder="cantidad">
            </div>

             <div class="form-group">
              <label for="exampleInputPassword1">cantidad min</label>
              <input type="text" name="txtCanmin" class="form-control" id="exampleInputPassword1" placeholder="camtidad">
            </div>

             <div class="form-group">
              <label for="exampleInputPassword1">costo</label>
              <input type="text" name="txtCosto" class="form-control" id="exampleInputPassword1" placeholder="costo">
            </div>

            <button type="submit" class="btn btn-primary">Registrar Combustible</button>
          </form>
            
             </div>
             <div class="col-md-5">
              
             </div>

           </div>
    </div>
<!--fial del tap combustible-->
   <!-- Tab panes  lista de CONSULTA-->
    <div role="tabpanel" class="tab-pane active" id="home1">
      <table class="table table-striped">
        <thead>

          <th>ID</th>
          <th>nombre</th>
          <th>fecha-registro</th>
          <th>localizacion</th>
          <th>cantidad</th>
          <th>cantidad min</th>
           <th>costo</th>
        </thead>
        <tbody>
          <?php foreach ($listCombustible as $value) { ?>
             <tr>
                <td ><?php echo $value->id_combustible; ?></td>
                <td><?php echo $value->nombre_combustible; ?></td><!--esta se cambia con el inner join de per_id_ a per_nombre-->
                <td><?php echo $value->fecha_registro; ?></td>
                <td><?php echo $value->localizacion; ?></td>
                <td><?php echo $value->cantidad; ?></td>
                <td><?php echo $value->cantidad_minima; ?></td>
                <td><?php echo $value->costo_promedio; ?></td>
                <td>
      <a href="#"  class="btn btn-warning btn-xs" onclick="enviarajax('<?=$value->id_combustible ?>')">Editar</a>
        
                </td>
             </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  <!--fial del tap combustible-->
 
    <!-- Tab panes REGISTRO  DE ENTRADA COMBUSTIBLE-->
    <div role="tabpanel" class="tab-pane" id="profile2">
           <div class="row">
             <div class="col-md-7">
                    <!--aqi se va recuperar selPerfil()-->
          <form method="POST" action="<?php echo base_url('usuario/insertentrada')?>"><!--el metodo post se esta agrafando  controlador -->

            <div class="form-group">
              <label for="exampleInputPassword1">CODIGO</label>
              <input type="text" name="txtCodentrada" class="form-control" id="exampleInputPassword1" placeholder="CODIGO">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">fecha registro</label>
              <input type="date" name="txtFechaentrada" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">hora registro</label>
              <input type="time" name="txtHoraRegis" class="form-control" id="exampleInputPassword1" placeholder="fecha">
            </div>
            
            <div class="form-group">
              <label for="exampleInputPassword1">cantidad</label>
              <input type="text" name="txtCantentrada" class="form-control" id="exampleInputPassword1" placeholder="localizacion">
            </div>
            
             <div class="form-group">
              <label for="exampleInputPassword1">proveedor</label>
              <input type="text" name="txtProveedor" class="form-control" id="exampleInputPassword1" placeholder="cantidad">
            </div>

             <div class="form-group">
              <label for="exampleInputPassword1">programa</label>
              <input type="text" name="txtPrograma" class="form-control" id="exampleInputPassword1" placeholder="camtidad">
            </div>

             <div class="form-group">
              <label for="exampleInputPassword1">num vale</label>
              <input type="text" name="txtNumvale" class="form-control" id="exampleInputPassword1" placeholder="costo">
            </div>
              <div class="form-group">
              <label for="exampleInputPassword1">fecha vale</label>
              <input type="date" name="txtFechavale" class="form-control" id="exampleInputPassword1" placeholder="costo">
            </div>

              <div class="form-group">
              <label for="exampleInputPassword1">res programa</label>
              <input type="text" name="txtResprogra" class="form-control" id="exampleInputPassword1" placeholder="costo">
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>
            
             </div>
             <div class="col-md-5">
              
             </div>

           </div>
    </div>
    <!--fina de entrada-->
    <!-- Tab panes REGISTRO  DE SALIDA COMBUSTIBLE-->
    <div role="tabpanel" class="tab-pane" id="profile3">
           <div class="row">
             <div class="col-md-7">
                    <!--aqi se va recuperar selPerfil()-->
          <form method="POST" action="<?php echo base_url('usuario/insertSalidacombustible')?>"><!--el metodo post se esta agrafando  controlador -->

            <div class="form-group">
              <label for="exampleInputPassword1">CODIGO</label>
              <input type="text" name="txtCodsalida" class="form-control" id="exampleInputPassword1" placeholder="CODIGO">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">fecha registro</label>
              <input type="date" name="txtFechaentrada" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">fecha salida</label>
              <input type="date" name="txtFechsalida" class="form-control" id="exampleInputPassword1" placeholder="fecha">
            </div>
            
            <div class="form-group">
              <label for="exampleInputPassword1">hora salida</label>
              <input type="time" name="txtHorsalida" class="form-control" id="exampleInputPassword1" placeholder="localizacion">
            </div>
            
             <div class="form-group">
              <label for="exampleInputPassword1">catindad</label>
              <input type="text" name="txtCantsalida" class="form-control" id="exampleInputPassword1" placeholder="cantidad">
            </div>

             <div class="form-group">
              <label for="exampleInputPassword1">programa presu</label>
              <input type="text" name="txtProgramaPresuSal" class="form-control" id="exampleInputPassword1" placeholder="camtidad">
            </div>

             <div class="form-group">
              <label for="exampleInputPassword1">num vale</label>
              <input type="text" name="txtNumvaleSal" class="form-control" id="exampleInputPassword1" placeholder="costo">
            </div>
              <div class="form-group">
              <label for="exampleInputPassword1">fecha vale</label>
              <input type="date" name="txtFechavaleSal" class="form-control" id="exampleInputPassword1" placeholder="costo">
            </div>

              <div class="form-group">
              <label for="exampleInputPassword1">res programa</label>
              <input type="text" name="txtResprograSal" class="form-control" id="exampleInputPassword1" placeholder="costo">
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>
            
             </div>
             <div class="col-md-5">
              
             </div>

           </div>
    </div>
    <!--fina de SALIDA-->



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


<div id="divEditar"></div>
<script>
function enviarajaxelimnar(id_persona)
    {
    $.ajax({
      method: "POST",
      url: "usuario/IdUsuarioEliminar",
      data:{usu_id:id_persona }
      
    })
      .done(function(resultado) {
        $('#divEditar').html(resultado);
      });
    }
 </script>
