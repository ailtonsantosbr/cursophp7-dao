<?php

session_start();

if(session_status() !== PHP_SESSION_ACTIVE) session_start();

if(session_status() === PHP_SESSION_NONE) session_start();

if(session_status() === PHP_SESSION_DISABLED) session_start();

if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

if(session_status == PHP_SESSION_NONE) {
	session_start();
}


if(session_id() === "") {session_start();}

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
