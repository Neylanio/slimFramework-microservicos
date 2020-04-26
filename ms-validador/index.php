<?php
require_once "vendor/autoload.php";

use Slim\App;
use Slim\Container;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/* INIT */
$c = new Container([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);
$app = new App($c);

$app->post("/validar", function(Request $req, Response $res, $args) {

    $body = $req->getParsedBody();
    $valor1 = $body["valor1"];
    $valor2 = $body["valor2"];

    if (is_numeric($valor1) && is_numeric($valor2)) {
        return 'success';
    }else{
        return 'error';
    }
    
});

/* START */
$app->run();