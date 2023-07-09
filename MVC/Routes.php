<?php

$router = new Router();

// Definir las rutas y los métodos correspondientes
$router->get('/', 'UserController@index');
$router->get('/User/register', 'UserController@registerForm');
$router->post('/User/create', 'UserController@create');
$router->get('/Comida', 'ComidaController@index');
$router->get('/Comida/register', 'ComidaController@registerForm');
$router->post('/Comida/create', 'ComidaController@create');
// Ejecutar el enrutador
$router->run();

class Router {
    private $routes;

    public function __construct() {
        $this->routes = [];
    }

    public function get($url, $handler) {
        $this->addRoute('GET', $url, $handler);
    }

    public function post($url, $handler) {
        $this->addRoute('POST', $url, $handler);
    }

    private function addRoute($method, $url, $handler) {
        $this->routes[] = [
            'method' => $method,
            'url' => $url,
            'handler' => $handler
        ];
    }

    public function run() {
        $requestedUrl = $_SERVER['REQUEST_URI'];
        $scriptName = $_SERVER['SCRIPT_NAME'];
        $dirName = dirname($scriptName);
        $requestedUrl = str_replace($dirName, '', $requestedUrl);
        $segments = explode('/', $requestedUrl);
        $requestedMethod = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($route['method'] === $requestedMethod && $route['url'] === $requestedUrl) {
                $this->callHandler($route['handler']);
                return;
            }
        }

        // Si no se encuentra una ruta correspondiente, mostrar un error 404 o redirigir a una página de error
        die('Error 404 - Not Found');
    }

    private function callHandler($handler) {
        list($controller, $method) = explode('@', $handler);
        $controllerFile = 'Controllers/' . $controller . '.php';

        if (file_exists($controllerFile)) {
            //require_once $controllerFile;
            require_once 'Controllers/Controller.php';
            $controller="\\Controllers\\".$controller;
            $controllerInstance = new $controller();
            $controllerInstance->$method();
        } else {
            // Si no se encuentra el controlador, mostrar un error o redirigir a una página de error
            die('Error - Controller not found');
        }
    }
}