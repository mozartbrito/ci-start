<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends MY_Model {

	public function __construct()
	{
		$this->table = 'ci-start.usuario';
		$this->primary_key = 'id';
	}
}

/* End of file Usuarios_model.php */
/* Location: ./application/models/Usuarios_model.php */