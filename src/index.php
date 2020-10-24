<?php

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];

if ($method == 'GET' && $path == '/v1/todos') {
	echo "Todo list under developing.\n";
} else if ($method == 'GET' && preg_match('|^/v1/todos/(\d{1,9})$|', $path, $matches)) {
	$id = $matches[1];
	echo "Todo item with ID = $id. Under developing.\n";
} else {
	echo "Not found.\n";
}
