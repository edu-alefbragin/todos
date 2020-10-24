<?php

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];

if ($method == 'GET' && $path == '/v1/todos') {
	http_response_code(501);
} else if ($method == 'GET' && preg_match('|^/v1/todos/(\d{1,9})$|', $path, $matches)) {
	$id = $matches[1];
	http_response_code(501);
} else {
	http_response_code(404);
}
