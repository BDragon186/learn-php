<?php
$uri = rtrim(parse_url($_SERVER["REQUEST_URI"])["path"], "/");
$uri = $uri === '' ? '/' : $uri;
$route = [
    "/" => "controllers/index.php",
    "/contact" => 'controllers/contact.php',
    '/about' => 'controllers/about.php'
];
function abort($code = 404)
{
    http_response_code($code);
    require 'views/404.php';
    die();
}

function routeToController($uri, $route)
{
    if (array_key_exists($uri, $route)) {
        require $route[$uri];
    } else {
        abort(404);
    }
}

routeToController($uri, $route);
