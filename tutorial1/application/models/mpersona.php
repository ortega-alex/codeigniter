<?php 

/**
* 
*/
class Mpersona extends CI_ModeL
{
	
	function __construct()
	{
		parent::__construct();

	}
	public function guardar($param){
		$campos = array(
			'dni' => $param['dni'],
			'nombe' => $param['nombe'],
			'appaterno' => $param['appaterno'],
			'apmaterno' => $param['apmaterno'],
			'email' => $param['email'], 
			'fecnac' => date('Y-m-d',strtotime(str_replace('','-',$param['fecnac'])))  
		);
		
		$this->db->insert('persona',$campos);
		return $this->db->insert_id();
	}
}
 ?>