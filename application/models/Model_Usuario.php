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
    

}

























