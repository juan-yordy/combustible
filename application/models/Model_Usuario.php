<?php
class Model_Usuario extends CI_Model

{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		# code...
	}
/*la funcion de *select en sql donde query es consulta*/
	public function selPerfil(){

		$query=$this->db->query("select * from perfil");
		/*retornamos todo los registros de la tsbla perfil*/
		return $query->result();
	}


	public function insertUsuario($idper,$nombres,$apellidos,$correo,$telefono){
    /*recuperando los valores y estan los nombres de la base de datos -ESTA ES EL SEGUNDO PASO 02*/
    $arrayDatos= array(
            'per_id'=> $idper,
            'usu_nombres'=>$nombres,
            'usu_apellidos'=>$apellidos,
            'usu_correo'=>$correo,
            'usu_telefono'=>$telefono
    	 );
      /*con esyo ingresas datos a ltabla usuario */
      $this->db->insert('usuario', $arrayDatos);
	}

	/*funcion para listar usuarios*/
public function listUsuario(){

	$query = $this->db->query(" SELECT * FROM usuario u inner join perfil p on u.per_id=p.per_id");
	return $query->result();
}


  /*funcion para listar combustiles*/
public function listCombustible(){

  $query = $this->db->query(" SELECT * FROM tbcombustible ");
  return $query->result();
}

 public function actualizarTesis($id_tesis,$nombre, $apellido, $titulo,$fecha,$resumen){
                $data = array(
                        'nombre' =>$nombre,
                        'apellido' =>$apellido,
                        'titulo' => $titulo,
                        'fecha' => $fecha,
                        'resumen'=>$resumen,

                        );

            $this->db->where('id_tesis',$id_tesis);
            return $this->db->update('dt_tesis', $data);           
        }

  public function EditarUsuario($usu_id,$per_id,$usu_nombres,$usu_apellidos,$usu_correo,$usu_telefono)
  {

  	 $data=array(
                'per_id'=>$per_id,
                'usu_nombres'=>$usu_nombres,
                'usu_apellidos'=>$usu_apellidos,
                'usu_correo'=>$usu_correo,
                'usu_telefono'=>$usu_telefono,
                );
              $this->db->Where('usu_id',$usu_id);
            return $this->db->update('usuario', $data);

  }

    function BuscarUsuarioID($id)
    {

        $query = $this->db->where('usu_id',$id);
        $query = $this->db->get('usuario');
        return $query->result();
        
    }




  public function insertCombustible($codcombus,$nombre,$fecha,$localizacion,$cantidad,$catidadmin,$costo){
    /*recuperando los valores y estan los nombres de la base de datos -ESTA ES EL SEGUNDO PASO 02*/
    $arrayDatos= array(
            'id_combustible'=> $codcombus,
            'nombre_combustible'=>$nombre,
            'fecha_registro'=>$fecha,
            'localizacion'=>$localizacion,
            'cantidad'=>$cantidad,
            'cantidad_minima'=>$catidadmin,
            'costo_promedio'=>$costo
       );
      /*con esyo ingresas datos a ltabla usuario */
      $this->db->insert('tbcombustible', $arrayDatos);
  }
    

  public function insertEntradacombus($codentrada,$fechaentrada,$horaentrada,$cantidad,$proveedor,$programa_presu,$num_vale,$fecha_vale,$resprog){
    /*recuperando los valores y estan los nombres de la base de datos -ESTA ES EL SEGUNDO PASO 02*/
    $arrayDatos= array(
            'id_entrada'=> $codentrada,
            'fecha_registro'=>$fechaentrada,
            'hora_registro'=>$horaentrada,
            'cantidad'=>$cantidad,
            'proveedor'=>$proveedor,
            'programa_presu'=>$programa_presu,
            'num_vale_ingreso'=>$num_vale,
            'fecha_vale'=>$fecha_vale,
            'responsable_programa'=>$resprog

       );
      /*con esyo ingresas datos a ltabla usuario */
      $this->db->insert('entrada_combustible', $arrayDatos);
  }


  public function insertSalidacombus($codsalida,$fecharegistro,$fechasalida,$horasalida,$cantidad,$programa_presu,$num_vale,$fecha_vale,$resprog){
    /*recuperando los valores y estan los nombres de la base de datos -ESTA ES EL SEGUNDO PASO 02*/
    $arrayDatos= array(
            'id_salida'=> $codsalida,
            'fecha_registro'=>$fecharegistro,
            'fecha_salida'=>$fechasalida,
            'hora_salida'=>$horasalida,
            'cantidad'=>$cantidad,
            'programa_presupuestal'=>$programa_presu,
            'num_vale_salida'=>$num_vale,
            'fecha_vale'=>$fecha_vale,
            'responsable_programa'=>$resprog

       );
      /*con esyo ingresas datos a ltabla usuario */
      $this->db->insert('salida_combustible', $arrayDatos);
  }

}
























