<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios_model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table ='ci-start.funcionario';
		$this->primary_key = 'id';
	}
	public function get($id_funcionario = '')
	{
		if($id_funcionario != '') {
			$this->db->where('f.id', $id_funcionario);
		}

		return $this->db->select('f.*, c.nome as cidade, uf.sigla')
				->from($this->table.' f')
				->join('uf','uf.id = f.id_uf','left')
				->join('cidades c', 'c.id = f.id_cidade', 'left')
				->get();

		/*$sql = "SELECT f.*, c.nome as cidade, uf.sigla
				from funcionario f
				LEFT JOIN uf ON uf.id = f.id_uf
				LEFT JOIN cidades c ON c.id = f.id_cidade
				WHERE f.id = 11";
		$this->db->query($sql);*/
	}
	
}

/* End of file Funcionarios_model.php */
/* Location: ./application/models/Funcionarios_model.php */