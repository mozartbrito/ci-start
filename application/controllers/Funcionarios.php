<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Controller {

	private $data;

	public function index()
	{
		$this->data['teste'] = '';
		$this->data['titulo'] = 'Lista de funcionários';
		$this->data['conteudo'] = 'funcionarios/index';
		$this->load->view('index', $this->data);
	}

}

/* End of file Funcionarios.php */
/* Location: ./application/controllers/Funcionarios.php */