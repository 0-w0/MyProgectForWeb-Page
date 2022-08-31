<?php
require_once 'vendor/autoload.php';

use App\Routers\Router;

$requestPath = $_SERVER['REQUEST_URI'] ?? '';

$router = new Router();
$controller = $router->switchControllers($requestPath);

if ($controller) {
    echo $controller->getWelcome();
}
