<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Controller {

	private $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('funcionarios_model', 'fm');
	}
	public function index()
	{
		$this->data['funcionarios'] = $this->fm->get_funcionarios()->result();

		$this->data['titulo'] = 'Lista de funcionários';
		$this->data['conteudo'] = 'funcionarios/index';
		$this->load->view('index', $this->data);
	}
	public function mostrar($id_funcionario = '')
	{
		if($id_funcionario == '') {
			redirect('funcionarios/index', 'refresh');
		}

		$this->data['funcionario'] = $this->fm->get_funcionario($id_funcionario)->row();	

		$this->data['titulo'] = 'Dados de '.$this->data['funcionario']->nome;
		$this->data['conteudo'] = 'funcionarios/mostrar';
		$this->load->view('index', $this->data);
	}
	public function deletar($id_funcionario = '')
	{
		if($id_funcionario == '') {
			redirect('funcionarios/index', 'refresh');
		}
		$this->fm->deletar($id_funcionario);
		redirect('funcionarios','refresh');
	}
	public function novo()
	{
		$this->data['titulo'] = 'Novo funcionário';
		$this->data['conteudo'] = 'funcionarios/novo';
		$this->load->view('index', $this->data);
	}
	public function cadastrar()
	{
		$this->load->helper('funcoes');
		$dados['nome'] = $this->input->post('nome');
		$dados['sexo'] = $this->input->post('sexo');
		$dados['dt_nascimento'] = $this->input->post('dt_nascimento');

		echo gravaDateDB($dados['dt_nascimento']); exit;
		$this->fm->salvar($dados);
		redirect('funcionarios','refresh');
	}

}

/* End of file Funcionarios.php */
/* Location: ./application/controllers/Funcionarios.php */