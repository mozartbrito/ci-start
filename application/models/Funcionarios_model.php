<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios_model extends CI_Model {

	public function get_funcionarios()
	{
		return $this->db->get('funcionario');
	}	

}

/* End of file Funcionarios_model.php */
/* Location: ./application/models/Funcionarios_model.php */