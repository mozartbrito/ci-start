<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuarios_model', 'um');
	}
	public function index()
	{
		$this->data['titulo'] = 'Área restrita';
		$this->load->view('template/header');
		$this->load->view('login/index', $this->data);
		$this->load->view('template/footer');
	}
	public function logar()
	{
		sleep(1);
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');

		$usuario = $this->um->verifica_login($email, md5($senha))->row();

		if(count($usuario) > 0)	{
			$this->session->set_userdata(array(
				'nome' => $usuario->nome,
				'email' => $usuario->email,
				'logado' => TRUE
			));
			/*redirect('principal','refresh');*/
			echo 1;

		} else {
			//$this->session->sess_destroy();
			/*redirect('login','refresh');*/
			echo 0;
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */