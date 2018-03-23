<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Controller {

	private $data;

	public function index()
	{
		$this->load->model('funcionarios_model', 'fm');

		$this->data['funcionarios'] = $this->fm->get_funcionarios()->result();

		$this->data['titulo'] = 'Lista de funcionários';
		$this->data['conteudo'] = 'funcionarios/index';
		$this->load->view('index', $this->data);
	}
	public function mostrar()
	{
		$this->data['nome'] = 'João Ferreira';
		$this->data['sexo'] = 'Masculino';
		$this->data['dt_nascimento'] = '10/10/1988';

		$this->data['titulo'] = 'Dados de fulano';
		$this->data['conteudo'] = 'funcionarios/mostrar';
		$this->load->view('index', $this->data);
	}

}

/* End of file Funcionarios.php */
/* Location: ./application/controllers/Funcionarios.php */