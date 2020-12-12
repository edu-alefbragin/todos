<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$todos = [
    "Install Debian",
    "(A) Read about Nginx location",
    "(B) Fix bash complition"
];

function serialize_model(int $id, string $content): array {
    return [
        'id' => $id,
        'content' => $content,
    ];
}

function serialize_list($todos): array {
    $list = [];
    foreach ($todos as $id => $content) {
        $list[] = serialize_model($id, $content);
    }
    return $list;
}

$app = AppFactory::create();

$app->addErrorMiddleware(false, true, true);

$app->get('/v1/todos', function (Request $request, Response $response) {
    global $todos;
    $response->getBody()->write(json_encode(serialize_list($todos)));
    return $response;
});

$app->get('/v1/todos/{id}', function (Request $request, Response $response, array $args) {
    global $todos;
    $id = $args['id'];
    $response->getBody()->write(json_encode(serialize_model($id, $todos[$id])));
    return $response;
});

$app->run();
