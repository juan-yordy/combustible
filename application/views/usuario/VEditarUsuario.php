 <?php echo header('Content-Type: text/html; charset=UTF-8');?>
</head>

<script>
      $(document).ready(function()

      {

         $("#mostrarmodal").modal("show");

      });

     </script>

</head>


<?php  foreach($busuario as $usuario){ ?>


   <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            


                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                <h4 class="modal-title" id="myModalLabel">Editar Usuario<span class="badge"><?php echo $usuario->usu_id; ?></span></h4>

                </div>

                <div class="modal-body">  
                                                        
      <!--aqi se va recuperar selPerfil()-->
          <form name="" class="form-horizontal text-center" method="Post" action="<?php echo base_url('Usuario/actualizarUsuario') ?>" role="form">
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
              <input type="text" name="txtNombres" class="form-control" id="exampleInputPassword1" value="<?php echo $usuario->usu_nombres?>" >
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Apellidos</label>
              <input type="text" name="txtApellidos" class="form-control" value="<?php echo $usuario->usu_apellidos ?>" id="exampleInputPassword1" >
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Correo</label>
              <input type="text" name="txtCorreo" class="form-control" id="exampleInputPassword1" value="<?php echo  $usuario->usu_correo?>">
            </div>

             <div class="form-group">
              <label for="exampleInputPassword1">Telefono</label>
              <input type="text" name="txtTelefono" class="form-control" id="exampleInputPassword1" value="<?php echo $usuario->usu_telefono ?>">
            </div>
           <input type="hidden" name="textid" id="textid" value="<?php echo  $usuario->usu_id?>">
            <button type="bu" class="btn btn-primary">Registrar Usuario</button>
          
            <input type="button" name="Modificar" value="Modificar">
          </form>
            
            </div>

                <div class="modal-footer">

                </div>

            </div>

        </div>

    </div>

    <?php }?>
    
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
