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

$app->post("/dividir", function(Request $req, Response $res, $args) {

    $body = $req->getParsedBody();
    $valor1 = $body["valor1"];
    $valor2 = $body["valor2"];

    $url = "http://localhost/ms-validador/validar";

    $c = curl_init($url);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_POST, true);
    curl_setopt($c, CURLOPT_POSTFIELDS, array("valor1" => $valor1,"valor2" => $valor2));

    $resposta = curl_exec($c);
    curl_close($c);

    if($resposta == 'success'){

        if($valor2 != 0){

            $total = $valor1 / $valor2;

            return $res
                ->withStatus(200)
                ->withJson([
                    "total" => $total
                ]);

        }else{

            return $res
                ->withStatus(500)
                ->withJson([
                    "status" => "Divisão Impossível"
                ]);

        }

    }else{

        return $res
            ->withStatus(400)
            ->withJson([
                "status" => "Bad-Request"
            ]);
    }
        
});

/* START */
$app->run();