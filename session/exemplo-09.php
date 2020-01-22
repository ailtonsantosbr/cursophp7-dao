<?php
function is_session_started() {
	return function_exists('session_status')? (PHP_SESSION_ACTIVE == session_status()): (! empty(session_id()));
}


?>
