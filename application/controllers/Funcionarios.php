<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Controller {

	private $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('funcionarios_model', 'fm');
		$this->fm->verifySession();
	}
	public function index()
	{
		$this->data['funcionarios'] = $this->fm->get()->result();

		$this->data['titulo'] = 'Lista de funcionários';
		$this->data['conteudo'] = 'funcionarios/index';
		$this->load->view('index', $this->data);
	}
	public function gera_pdf()
	{
		$mpdf = new \Mpdf\mPDF();

		$this->data['funcionarios'] = $this->fm->get()->result();

		//criando a variavel que recebe html
		$html = $this->load->view('template_pdf/header', '', TRUE);
		$html .= $this->load->view('funcionarios/gera_pdf', $this->data, TRUE);
		$html .= $this->load->view('template_pdf/footer', '', TRUE);

		// Define um Cabeçalho para o arquivo PDF
		$mpdf->SetHeader('Gerando PDF no CodeIgniter com a biblioteca mPDF');
		//escrevendo o html no pdf
		$mpdf->writeHTML($html);
		// Gera o arquivo PDF
		$mpdf->Output();

	}
	public function gera_pdf_view()
	{

		$this->data['funcionarios'] = $this->fm->get()->result();

		//criando a variavel que recebe html
		$this->load->view('template_pdf/header', '');
		$this->load->view('funcionarios/gera_pdf', $this->data);
		$this->load->view('template_pdf/footer', '');
	}
	public function index_pdf()
	{
		$this->data['funcionarios'] = $this->fm->get()->result();

		$this->data['titulo'] = 'Lista de funcionários';
		$this->data['conteudo'] = 'funcionarios/index';
		
		// Instancia a classe mPDF
		$mpdf = new \Mpdf\mPDF();
		// HTML dela para a variável $html	
		$html = $this->load->view('funcionarios/index_pdf', $this->data, TRUE);
		//$html = $this->load->view('index_no_header', $this->data, TRUE);

		// Define um Cabeçalho para o arquivo PDF
		$mpdf->SetHeader('Gerando PDF no CodeIgniter com a biblioteca mPDF');
		// Define um rodapé para o arquivo PDF, nesse caso inserindo o número da
		// página através da pseudo-variável PAGENO
		$mpdf->SetFooter('{PAGENO}');
		// Insere o conteúdo da variável $html no arquivo PDF
		$mpdf->writeHTML($html);
		// Cria uma nova página no arquivo
		$mpdf->AddPage();
		// Insere o conteúdo na nova página do arquivo PDF
		$mpdf->WriteHTML('<p><b>Minha nova página no arquivo PDF</b></p>');
		// Gera o arquivo PDF
		$mpdf->Output();
	}
	public function mostrar($id_funcionario = '')
	{
		if($id_funcionario == '') {
			redirect('funcionarios/index', 'refresh');
		}

		$this->data['funcionario'] = $this->fm->get($id_funcionario)->row();	
		$this->data['titulo'] = 'Dados de '.$this->data['funcionario']->nome;
		$this->data['conteudo'] = 'funcionarios/mostrar';
		$this->load->view('index', $this->data);
	}
	public function deletar($id_funcionario = '')
	{
		//danger, success, info, warning, default
		if($id_funcionario == '') {
			$this->session->set_flashdata(array('tipo' => 'danger', 'mensagem' => 'O ID é obrigatório para esta função!'));
			redirect('funcionarios/index', 'refresh');
		}
		$this->fm->deletar($id_funcionario);
		$this->session->set_flashdata(array('tipo' => 'success', 'mensagem' => 'Excluído com sucesso!'));
		redirect('funcionarios','refresh');
	}
	public function cadastrar($id_funcionario = '')
	{
		$this->data['titulo'] = 'Novo funcionário';
		$this->data['estados'] = $this->fm->get_all('ci-start.uf')->result();
		if($id_funcionario != '') {
			$this->data['titulo'] = 'Editar funcionário';
			$this->data['funcionario'] = $this->fm->get($id_funcionario)->row();

			if(!isset($this->data['funcionario']->nome)) {
				redirect('funcionarios','refresh');
			}
		}

		$this->data['conteudo'] = 'funcionarios/novo';
		$this->load->view('index', $this->data);
	}
	public function salvar()
	{
		$this->load->helper('funcoes');
		$id_funcionario = $this->input->post('id');
		$dados['nome'] = $this->input->post('nome');
		$dados['sexo'] = $this->input->post('sexo');
		$dados['id_uf'] = $this->input->post('id_uf');
		$dados['id_cidade'] = $this->input->post('id_cidade');
		$dados['dt_nascimento'] = $this->input->post('dt_nascimento');
		$dados['dt_nascimento'] = gravaDateDB($dados['dt_nascimento']);

		if($id_funcionario == '') {
			$this->fm->salvar($dados);
			$this->session->set_flashdata(array('tipo' => 'success', 'mensagem' => $dados['nome'].' inserido com sucesso!'));
		} else {
			$this->fm->alterar($id_funcionario, $dados);
			$this->session->set_flashdata(array('tipo' => 'success', 'mensagem' => $dados['nome'].' alterado com sucesso!'));
		}
		redirect('funcionarios','refresh');
	}
	
	public function get_cities($id_uf)
	{
		$cidades = $this->fm->get_all('ci-start.cidades', 'id_uf = '.$id_uf)->result();
		echo '<select name="id_cidade" required class="form-control">';
		echo '	<option value="">Selecione</option>';
			foreach ($cidades as $cidade) {
				echo '<option value="' .$cidade->id. '">' . $cidade->nome . '</option>';
			}
						
		echo '</select>';
	}

}

/* End of file Funcionarios.php */
/* Location: ./application/controllers/Funcionarios.php */