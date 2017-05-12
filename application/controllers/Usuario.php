<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

function __construct(){
parent::__construct();
/*agregare el model ode estea controlador para q el cotrol se comuniqe con el model*/
$this->load->model('Model_Usuario');
}
/*este index tiene q ser el minmo  nombred la vista index.php*/
	public function index()
	{
		/*este index.php tiene q cargar en la plantilla osea se tiene q enviar */
		$data['contenido'] = "usuario/index";
		/*con esto estoy traendo todo los registro de la  tabla perfil donde se va recuperar en el index*/
		$data['selPerfil'] = $this->Model_Usuario->selPerfil();
		$data['listaUsuario']=$this->Model_Usuario->listUsuario();
    $data['listCombustible']=$this->Model_Usuario->listCombustible();
    
		$this->load->view("plantilla",$data);
	}

	public function insert(){

	$datos=$this->input->post();
	if(isset($datos)){

	  $txtId=$datos['txtIdper'];
	  $txtNombres=$datos['txtNombres'];
 	  $txtApellidos=$datos['txtApellidos'];
  	  $txtCorreo=$datos['txtCorreo'];
  	  $txtTelefono=$datos['txtTelefono'];
  	  /*llamando ala funcion del model*/
  	  $this->Model_Usuario->insertUsuario($txtId,$txtNombres,$txtApellidos,$txtCorreo,$txtTelefono);
       redirect('');
   }
  
   }

    public function EditarUsuario()
   	{
   		$data['contenido'] = "usuario/VEditarUsuario";

   		echo $id_usuario=$_POST['usu_id'];
   		$data['selPerfil'] = $this->Model_Usuario->selPerfil();
		$data['listaUsuario']=$this->Model_Usuario->listUsuario();
   		$data['busuario']=$this->Model_Usuario->BuscarUsuarioID($id_usuario);
    	$this->load->view('plantilla',$data);

   	}
   	public function actualizarUsuario()
   	{
   		
   	}



    //PA INSETAR COMBUSTIBLE

  public function insertacombus(){

  $datos=$this->input->post();
  if(isset($datos)){

    $txtCodigo=$datos['txtCodigo'];
    $txtNombre=$datos['txtNombre'];
    $txtFecha=$datos['txtFecha'];
    $txtLocalizacion=$datos['txtLocalizacion'];
    $txtCantidad=$datos['txtCantidad'];
    $txtCanmin=$datos['txtCanmin'];
    $txtCosto=$datos['txtCosto'];

      /*llamando ala funcion del model*/
      $this->Model_Usuario->insertCombustible($txtCodigo,$txtNombre,$txtFecha,$txtLocalizacion,$txtCantidad,$txtCanmin,$txtCosto);
       redirect('');
   }
  
   }

    //PA INSETAR ENTRADA COMBUSTIBLE

  public function insertSalidacombustible(){

  $datos=$this->input->post();
  if(isset($datos)){

    $txtCodsalida=$datos['txtCodsalida'];
    $txtFechaentrada=$datos['txtFechaentrada'];
    $txtFechsalida=$datos['txtFechsalida'];
    $txtHorsalida=$datos['txtHorsalida'];
    $txtCantsalida=$datos['txtCantsalida'];
    $txtProgramaPresuSal=$datos['txtProgramaPresuSal'];
    $txtNumvaleSal=$datos['txtNumvaleSal'];
    $txtFechavaleSal=$datos['txtFechavaleSal'];
    $txtResprograSal=$datos['txtResprograSal'];

      /*llamando ala funcion del model*/
      $this->Model_Usuario->insertSalidacombus($txtCodsalida,$txtFechaentrada,$txtFechsalida,$txtHorsalida,$txtCantsalida,$txtProgramaPresuSal,$txtNumvaleSal,$txtFechavaleSal,$txtResprograSal);
       redirect('');
   }
  
   }







}







































