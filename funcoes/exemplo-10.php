<?php

function test($callback) {

	// processo lento

	$callback();

}

test(function() {

	echo "Terminou exemplo-10";
});

?>
