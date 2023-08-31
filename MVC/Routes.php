<?php

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $router) {
    $router->addRoute('GET', '/user', 'UserController@index');
    $router->addRoute('POST', '/user', 'UserController@create');

    $router->addRoute('GET', '/', 'MainController@index');

    $router->addRoute('GET', '/Encargado', 'EncargadoController@index');
    $router->addRoute('GET', '/Veterinario', 'VeterinarioController@index');

    $router->addRoute('GET', '/Reg_lechon', 'Reg_lechonController@index');
    $router->addRoute('GET', '/Reg_madre', 'Reg_madreController@index');
    $router->addRoute('GET', '/Reg_cerdo', 'Reg_cerdoController@index');
    $router->addRoute('GET', '/Reg_parto', 'Reg_partoController@index');
    $router->addRoute('GET', '/Reg_diag', 'Reg_diagController@index');
    $router->addRoute('GET', '/Reg_med', 'Reg_medController@index');
    
    


    $router->addRoute('GET', '/user/{id}', 'UserController@show');
    $router->addRoute('GET', '/userRegister', 'UserController@registerForm');    
    $router->addRoute('GET', '/userEdit/{id}', 'UserController@editForm'); 
    $router->addRoute('POST', '/userEdit', 'UserController@edit');
    $router->addRoute('DELETE', '/user/{id}', 'UserController@editForm');
    $router->addRoute('GET', '/comida', 'ComidaController@index');
    $router->addRoute('GET', '/comida/register', 'ComidaController@index');
    $router->addRoute('POST', '/comida/create', 'ComidaController@create');
    // Agrega más rutas según tus necesidades
});

// Obtiene el método HTTP y la URI solicitada
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri =$_SERVER['REQUEST_URI'];
$scriptName = $_SERVER['SCRIPT_NAME'];
$dirName = dirname($scriptName);
$uri = str_replace($dirName, '', $uri);

// Elimina los parámetros de la URI, si los hay
if (($pos = strpos($uri, '?')) !== false) {
    $uri = substr($uri, 0, $pos);
}

// Procesa la ruta utilizando el enrutador de FastRoute
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

// Maneja el resultado del enrutamiento
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // Ruta no encontrada
        header("HTTP/1.0 404 Not Found");
        echo 'Error 404 - Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        // Método no permitido para la ruta
        header("HTTP/1.0 405 Method Not Allowed");
        echo 'Error 405 - Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        // Ruta encontrada
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // Maneja la ruta llamando al controlador correspondiente
        list($controller, $method) = explode('@', $handler);
        $controllerFile = 'Controllers/' . $controller . '.php';
        require_once 'Controllers/Controller.php';
        $controller="\\Controllers\\".$controller;
        $controllerInstance = new $controller();
        if (!empty($vars)) {
            $value = reset($vars);
            $controllerInstance->$method($value);
        }
        else{
            $controllerInstance->$method();
        }
        break;
}
