<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios_model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table ='ci-start.funcionario';
		$this->primary_key = 'id';
	}
	
}

/* End of file Funcionarios_model.php */
/* Location: ./application/models/Funcionarios_model.php */