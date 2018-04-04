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
	if($var != '')
	{
		return str_replace($var, '<strong style="background-color: yellow;">'.$var.'</strong>', $campo);
	}
	else
	{
		return $campo;
	}
	
}
function debugger($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}