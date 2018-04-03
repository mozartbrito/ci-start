<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	public $table;
	public $primary_key;

	public function __construct()
	{
		parent::__construct();
	}
	public function get_all()
	{
		return $this->db->get($this->table);
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
	}
	public function alterar($primary_key, $dados)
	{
		$this->db->where($this->primary_key, $primary_key);
		$this->db->update($this->table, $dados);
	}
}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */