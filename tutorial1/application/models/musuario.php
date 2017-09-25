<?php 

/**
* 
*/
class Musuario extends CI_ModeL
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function guardarUsuario($param){
		$campos = array(
			'nombre' => $param['nombre'],
			'clave' => $param['clave'],
			'idPersona' => $param['idPersona']
		);
		$this->db->insert('usuario',$campos);
	}
}
 ?>