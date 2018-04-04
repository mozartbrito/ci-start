<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	private $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuarios_model', 'um');
	}
	public function index()
	{
		$busca = $this->input->post('busca');
		$this->data['usuarios'] = $this->um->get_all($busca)->result();
		
		$this->data['titulo']  = "Lista usuários";
		$this->data['conteudo'] = "usuarios/index";
		$this->load->view('index', $this->data);
	}
	public function deletar($id = '')
	{
		if($id == '') {
			$this->session->set_flashdata(array('tipo' => 'danger', 'mensagem' => 'O código do usuário é obrigatório.'));
			redirect('usuarios','refresh');
		}
		$this->um->deletar($id);
		$this->session->set_flashdata(array('tipo' => 'success', 'mensagem' => 'Excluído com sucesso.'));
		redirect('usuarios','refresh');
	}
	public function mostrar($id = '')
	{
		$this->data['usuario'] = $this->um->get_one($id)->row();

		if(!isset($this->data['usuario']->nome)) {
			$this->session->set_flashdata(array('tipo' => 'danger', 'mensagem' => 'Usuário não encontrado.'));
			redirect('usuarios','refresh');
		}

		$this->data['titulo'] = 'Dados de '.$this->data['usuario']->nome;
		$this->data['conteudo'] = 'usuarios/mostrar';
		$this->load->view('index', $this->data);
	}
	public function cadastrar($id = '')
	{
		$this->data['titulo'] = 'Novo usuário';

		if($id != '') {

			$this->data['titulo'] = 'Editar usuário';
			$this->data['usuario'] = $this->um->get_one($id)->row();

			if(!isset($this->data['usuario']->nome)) {
				$this->session->set_flashdata(array('tipo' => 'danger', 'mensagem' => 'Usuário não encontrado.'));
				redirect('usuarios','refresh');
			}
		}

		$this->data['conteudo'] = 'usuarios/novo';
		$this->load->view('index', $this->data);		
	}
	public function salvar()
	{
		$id = $this->input->post('id');
		$dados['nome'] = $this->input->post('nome');
		$dados['email'] = $this->input->post('email');

		if($this->input->post('senha') != '') {
			$dados['senha'] = md5($this->input->post('senha'));
		}

		if($id != '') {
			$this->um->alterar($id, $dados);
		} else {
			$id = $this->um->salvar($dados);
		}
		$this->session->set_flashdata(array('tipo'=>'success', 'mensagem' => 'Dados salvos com sucesso!'));
		redirect('usuarios/cadastrar/'.$id,'refresh');
	}

}

/* End of file Usuarios.php */
/* Location: ./application/controllers/Usuarios.php */