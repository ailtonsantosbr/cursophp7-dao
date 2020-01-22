<?php

// create and configure Slim Framework app
$config = ['settings'=> ['addContentLengthHeader'=> false,
]];

$app = new \Slim\App($config);

// Define app routes

$app->get('/hello/{name}', function($request, $response, $args) {
	return $response->write("Hello" . $args['name']);
});

// run app

$app->run();

?>
