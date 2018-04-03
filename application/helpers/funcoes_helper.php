<?php 
function gravaDateDB($data) {
	//dd/mm/aaaa => dd-Mes-aa
	//return date('d-M-y', strtotime($data)); //padrão para Oracle
	//dd/mm/aaaa => aaaa-mm-dd
	return date('Y-m-d', strtotime($data)); // padrão para MySQL
}

function viewDate($data) {
	return date('d/m/Y', strtotime($data)); 
}

function debugger($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}