<?php 
/**
* 
*/
class Cpersona extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mpersona');
		$this->load->model('musuario');
		$this->load->library('encrypt');
	}

	public function index(){
		$this->load->view('persona/vpersona');
	}

	public function guardar(){
		//echo "Entro al metodo Guardar";
		$param['dni'] = $this->input->post('dni');
		$param['nombe'] =  $this->input->post('nombre');
		$param['appaterno'] = $this->input->post('paterno');
		$param['apmaterno'] = $this->input->post('materno');
		$param['email'] = $this->input->post('email');
		$param['fecnac'] = $this->input->post('fecha');
		//usuario
		$paramUsu['nombre'] = $this->input->post('user');
		$paramUsu['clave'] = $this->encrypt->sha1( $this->input->post('pass'));
		
		//$this->load->view('persona/vpersona');
		$lastId = $this->mpersona->guardar($param);

		if($lastId > 0){
			$paramUsu['idPersona'] = $lastId;
			$this->musuario->guardarUsuario($paramUsu);
		}


	}
}



 ?>