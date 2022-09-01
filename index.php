<?php
require_once 'vendor/autoload.php';

use App\Routers\Router;


define('APP_ROOT', dirname(__FILE__));
$requestPath = $_SERVER['REQUEST_URI'] ?? '';

$router = new Router();
$controller = $router->switchControllers($requestPath);

if ($controller) {
    $controller->execute();
}
