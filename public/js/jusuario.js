$(document).ready(pagination(1));
$(function(){
	$('#bd-desde').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../admin/buscarporfecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
	$('#bd-hasta').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../admin/buscarporfecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
	$('#nuevo-producto').on('click',function(){
		$('#formulario')[0].reset();
		$('#pro').val('Registro');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	$('#bs-prod').on('keyup',function(){
		var dato = $('#bs-prod').val();
		var url = '../admin/buscar_nombre_descripcion.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
});


function agregarUsuario(){
	var url = '../admin/agregar_usuario.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario').serialize(),
		success: function(registro){
			if ($('#pro').val() == 'Registro'){
			$('#formulario')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}
		}
	});
	return false;
}



function eliminarProducto(id){
	var url = '../admin/eliminar_resolucion.php';
	var pregunta = confirm('¿Esta seguro de elimina resolucion?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(registro){
			$('#agrega-registros').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}

function editarUsuario(id){
	$('#formulario')[0].reset();
var url = '../admin/editar_usuario.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#reg').hide();
				$('#edi').show();
				$('#pro').val('Edicion');
				$('#id_usuario').val(id);
				$('#usuario').val(datos[0]);
				$('#clave').val(datos[1]);
				$('#admin').val(datos[2]);
				$('#registra-producto').modal({
					show:true,
					backdrop:'static'
				});
			return false;
		}
	});
	return false;
}






function pagination(partida){
	var url = '../admin/paginacionUsu.php';
	$.ajax({
		type:'POST',
		url:url,
		data:'partida='+partida,
		success:function(data){
			var array = eval(data);
			$('#agrega-registros').html(array[0]);
			$('#pagination').html(array[1]);
		}
	});
	return false;
}
