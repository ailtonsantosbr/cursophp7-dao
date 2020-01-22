<?php
/**
* Função sessao de status
*
**/

function session_status(){
	if(!extension_loaded('session')){
		return 0;
	} elseif (!file_exists(session_save_path(). '/sess_'.session_id())) {
		return 1;
	} else {
		return 2;
	}
}


?>
