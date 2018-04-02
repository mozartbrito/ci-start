<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios_model extends CI_Model {

	public function get_funcionarios()
	{
		return $this->db->get('ci-start.funcionario');
	}	
	public function get_funcionario($id_funcionario)
	{
		return $this->db->get_where('ci-start.funcionario', array('id' => $id_funcionario));
	}
	public function deletar($id_funcionario)
	{
		$this->db->where('id', $id_funcionario);
		$this->db->delete('ci-start.funcionario');
	}
}

/* End of file Funcionarios_model.php */
/* Location: ./application/models/Funcionarios_model.php */