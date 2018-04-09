<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	private $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('my_model', 'fm');
		$this->fm->verifySession();
	}
	public function index()
	{
		$dados = array(
			'Google Chrome' => 78,
			'Firefox' => 30,
			'Edge' => 2,
			'Safari' => 15
		);
		$this->data['titulo'] = 'Conteúdo do Controller Principal';
		$this->data['conteudo'] = 'principal/index';
		$this->data['dados'] = $dados;
		$this->load->view('index', $this->data);
	}

}

/* End of file Principal.php */
/* Location: ./application/controllers/Principal.php */