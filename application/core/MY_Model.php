<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	public $table;
	public $primary_key;

	public function __construct()
	{
		parent::__construct();
	}
	public function get_all($table = '', $where = '')
	{
		if($table == '') {
			$table = $this->table;
		}
		if($where != '') {
			$this->db->where($where);
		}
		return $this->db->get($table);
	}	
	public function get_one($primary_key)
	{
		return $this->db->get_where($this->table, array($this->primary_key => $primary_key));
	}
	public function deletar($primary_key)
	{
		$this->db->where($this->primary_key, $primary_key);
		$this->db->delete($this->table);
	}
	public function salvar($dados)
	{
		$this->db->insert($this->table, $dados);
		return $this->db->insert_id();
		/*
		if($this->db->insert($this->table, $dados)) {
			return $this->getLastId();
		} else {
			return '';
		} //ORACLE
		 */
	}
	public function alterar($primary_key, $dados)
	{
		$this->db->where($this->primary_key, $primary_key);
		$this->db->update($this->table, $dados);
	}
	/**
	 * [getLastId description]
	 * Função baseada em uma publicação no Stackoverflow (questions/16790026/codeigniter-oracle-get-insert-id **** Nirjhor Anjum ), para selecionar
	 * a SEQUENCE do Oracle. Na versão original, acessa o próximo SEQUENCE,
	 * neste, acessamos o atual com o CURRVAL
	 * @return [type] [description]
	 */
	public function getLastId() 
	{
		$row = $this->db->select($this->table."_ID_SEQ.CURRVAL AS LASTID", FALSE)
				->from($this->table)
				->get()
				->row();
		return $row->LASTID;
	}
	public function verifySession()
	{
		if($this->session->userdata('logado') != TRUE) {
			$this->session->set_flashdata(array(
				'tipo' => 'danger',
				'mensagem' => 'Você não possui permissão de acesso, efetue login!'
			));
			$this->session->set_userdata('url_access', current_url());
			redirect('login','refresh');
		}
	}
}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */