 <?php echo header('Content-Type: text/html; charset=UTF-8');?>
</head>

<script>
      $(document).ready(function()

      {

         $("#ModalEliminar").modal("show");

      });

     </script>

</head>




  <!-- Modal -->
    <?php if(count($busuario)>0){foreach($busuario as $usuario){ ?>
    <div class="modal fade" id="ModalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 450px;">
            <div class="modal-content">
                <div class="modal-header">                                          
                    <h4 class="modal-title" id="myModalLabel">Elimina Usuario<span class="badge"><?php echo $usuario->usu_id;?></span></h4>
                </div>
                <div class="modal-body">
                  <form name="" class="form-horizontal text-center" method="Post" action="<?php echo base_url('usuario/ElimnarUsuario') ?>" role="form">
                        <div class="row">
                            <div class="col-md-8">
                                <h3> Esta seguro de eliminar a:</h3>
                                
                                <h3> <?php echo $usuario->usu_nombres." ".$usuario->usu_apellidos; ?></h3>

                            </div>                       
                        </div>
                        <input type="hidden" name="usu_id" value="<?php echo $usuario->usu_id; ?>">
                           <input type="submit" value="Eliminar" class="btn btn-success btn-xs"/>
                        <a href="<?php base_url()?>" class="btn btn-danger btn-xs" data-target="">Cancelar</a> 
                     
                    </form> 
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <?php }
    }?>

