<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends MY_Model {

	public function __construct()
	{
		$this->table = 'ci-start.usuario';
		$this->primary_key = 'id';
	}
	public function get_all($busca = '')
	{
		if($busca != '')
		{
			$this->db->like('nome', $busca);
			$this->db->or_like('email', $busca);

			$this->session->set_flashdata(array('tipo' => 'info', 'mensagem' => 'Resultado para: <strong>'.$busca.'</strong>', 'marcar' => $busca));
		}
		return $this->db->order_by('nome')
					->get($this->table);
	}
}

/* End of file Usuarios_model.php */
/* Location: ./application/models/Usuarios_model.php */