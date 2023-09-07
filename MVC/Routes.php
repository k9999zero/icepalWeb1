<?php

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $router) {
    $router->addRoute('GET', '/', 'UserController@index');

    $router->addRoute('GET', '/user', 'UserController@user');
    $router->addRoute('GET', '/ajax', 'UserController@ajaxResponse');
    $router->addRoute('POST', '/user', 'UserController@create');
    $router->addRoute('GET', '/user/{id}', 'UserController@show');
    $router->addRoute('GET', '/userRegister', 'UserController@registerForm');    
    $router->addRoute('GET', '/userEdit/{id}', 'UserController@editForm'); 
    $router->addRoute('POST', '/userEdit', 'UserController@edit');
    $router->addRoute('DELETE', '/user/{id:\d+}', 'UserController@delete');

    $router->addRoute('GET', '/producto', 'ProductoController@index');
    $router->addRoute('GET', '/producto/register', 'ProductoController@registerForm');
    $router->addRoute('POST', '/producto/create', 'ProductoController@create');

    $router->addRoute('GET', '/categoriaRegister', 'CategoriaController@registerForm');  
    $router->addRoute('POST', '/categoriaRegister', 'CategoriaController@create'); 

    $router->addRoute('GET', '/Adorno', 'AdornoController@index');
    $router->addRoute('GET', '/AdornoRegister', 'AdornoController@registerForm');  
    $router->addRoute('POST', '/AdornoRegister', 'AdornoController@create');  
    $router->addRoute('GET', '/AdornoEdit/{id}', 'AdornoController@editForm');

    $router->addRoute('GET', '/ComentariosRegister', 'ComentariosController@registerForm');
    $router->addRoute('POST', '/ComentariosRegister', 'ComentariosController@create');

    $router->addRoute('GET', '/PuntuacionRegister', 'PuntuacionController@registerForm');
    $router->addRoute('POST', '/PuntuacionRegister', 'PuntuacionController@create');
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
