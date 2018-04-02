<?php 
function gravaDateDB($data) {
	//dd/mm/aaaa => aaaa-mm-dd
	return date('d-M-y', strtotime($data));
	//return date('Y-m-d', strtotime($data));
}

 ?>