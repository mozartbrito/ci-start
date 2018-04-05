<?php 
function gravaDateDB($data) {
	//dd/mm/aaaa => dd-Mes-aa
	//return date('d-M-y', strtotime($data)); //padrão para Oracle
	//dd/mm/aaaa => aaaa-mm-dd
	$data = date('d/m/Y', strtotime($data));
	return date('Y-m-d', strtotime($data)); // padrão para MySQL
}

function viewDate($data) {
	return date('d/m/Y', strtotime($data)); 
}
/**
 * [marcarBusca description]
 * Função criada para marcar os campos pesquisados em uma listagem
 * @param  [type] $var   [description] -> qual valor procurar
 * @param  [type] $campo [description] -> em qual variável procurar
 * @return [type]        [description]
 */
function marcarBusca($var, $campo) {
	if($var != '') {
		$before = '<strong style="background-color: yellow;">';
		$after = '</strong>';

		$new = str_replace($var, $before.$var.$after, $campo);
		$new = str_replace(strtolower($var), $before.strtolower($var).$after, $new);
		$new = str_replace(ucfirst($var), $before.ucfirst($var).$after, $new);
		$new = str_replace(strtoupper($var), $before.strtoupper($var).$after, $new);
		return $new;
	}
	return $campo;
}
function config_pagination($base_url, $num_rows, $limit, $segment) {
	
	$config['base_url'] = $base_url;
	$config['total_rows'] = $num_rows;
	$config['per_page'] = $limit;
	$config['uri_segment'] = $segment;
	$config['use_page_numbers'] = TRUE;

	$config['num_links'] = 5;
	$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
	$config['prev_tag_open'] = '<li class="page-item">';
	$config['prev_tag_close'] = '</a></li>';
	$config['next_link'] = '<i class="fa fa-angle-right" ></i>';
	$config['next_tag_open'] = '<li class="page-item">';
	$config['next_tag_close'] = '</li>';

	$config['first_link'] = FALSE;
	$config['last_link'] = FALSE;
	$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
	$config['full_tag_close'] = '</ul>';
	$config['first_tag_open'] = '<li class="page-item">';
	$config['first_tag_close'] = '</li>';
	$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
	$config['cur_tag_close'] = '</a></li>';
	$config['num_tag_open'] = '<li class="page-item">';
	$config['num_tag_close'] = '</a></li>';
	$config['attributes'] = array('class' => 'page-link');

	return $config;
}
function debugger($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}