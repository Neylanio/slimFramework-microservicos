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

$app->group("/somar", function() use ($app) {

    $app->post("[/{params:.*}]", function($req, $res, $args) {

        $novaRota = "/somar";
        $url = "http://localhost/ms-somar".$novaRota;

        $valor1 = $req->getParsedBody()["valor1"];
        $valor2 = $req->getParsedBody()["valor2"];

        $c = curl_init($url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, array("valor1" => $valor1,"valor2" => $valor2));

        $resposta = curl_exec($c);
        curl_close($c);

        return $res->withJson(
            json_decode($resposta, true)
        );
    
    });
});

$app->group("/subtrair", function() use ($app) {

    $app->post("[/{params:.*}]", function($req, $res, $args) {

        $novaRota = "/subtrair";
        $url = "http://localhost/ms-subtrair".$novaRota;

        $valor1 = $req->getParsedBody()["valor1"];
        $valor2 = $req->getParsedBody()["valor2"];

        $c = curl_init($url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, array("valor1" => $valor1,"valor2" => $valor2));

        $resposta = curl_exec($c);
        curl_close($c);

        return $res->withJson(
            json_decode($resposta, true)
        );
    
    });
});

$app->group("/multiplicar", function() use ($app) {

    $app->post("[/{params:.*}]", function($req, $res, $args) {

        $novaRota = "/multiplicar";
        $url = "http://localhost/ms-multiplicar".$novaRota;

        $valor1 = $req->getParsedBody()["valor1"];
        $valor2 = $req->getParsedBody()["valor2"];

        $c = curl_init($url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, array("valor1" => $valor1,"valor2" => $valor2));

        $resposta = curl_exec($c);
        curl_close($c);

        return $res->withJson(
            json_decode($resposta, true)
        );
    
    });
});

$app->group("/dividir", function() use ($app) {

    $app->post("[/{params:.*}]", function($req, $res, $args) {

        $novaRota = "/dividir";
        $url = "http://localhost/ms-dividir".$novaRota;

        $valor1 = $req->getParsedBody()["valor1"];
        $valor2 = $req->getParsedBody()["valor2"];

        $c = curl_init($url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, array("valor1" => $valor1,"valor2" => $valor2));

        $resposta = curl_exec($c);
        curl_close($c);

        return $res->withJson(
            json_decode($resposta, true)
        );
    
    });
});


/* START */
$app->run();