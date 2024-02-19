<?php

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $router) {
    $router->addRoute('GET', '/inicio', 'MainController@index');
    $router->addRoute('GET', '/user', 'UserController@index');
    $router->addRoute('GET', '/ajax', 'UserController@ajaxResponse');
    $router->addRoute('POST', '/user', 'UserController@create');
    $router->addRoute('GET', '/user/{id}', 'UserController@show');
    $router->addRoute('GET', '/userRegister', 'UserController@registerForm');    
    $router->addRoute('GET', '/userRegisterMaterialize', 'UserController@registerFormMaterialize');    
    $router->addRoute('GET', '/userRegisterMaterialDesign', 'UserController@registerFormMaterialDesign'); 
    $router->addRoute('GET', '/userRegisterBootstrap', 'UserController@registerFormBootstrap');
    $router->addRoute('GET', '/userEdit/{id}', 'UserController@editForm'); 
    $router->addRoute('POST', '/userEdit', 'UserController@edit');
    $router->addRoute('DELETE', '/user/{id:\d+}', 'UserController@delete');
    $router->addRoute('GET', '/comida', 'ComidaController@index');
    $router->addRoute('GET', '/comida/register', 'ComidaController@registerForm');
    $router->addRoute('POST', '/comida/create', 'ComidaController@create');

    $router->addRoute('GET', '/categoriaRegister', 'CategoriaController@registerForm');
    $router->addRoute('POST', '/categoriaCreate', 'CategoriaController@create');
    $router->addRoute('GET', '/ajaxExiste', 'CategoriaController@ajaxExiste');
    $router->addRoute('GET', '/probandoJavascript', 'CategoriaController@probandoJavascript');
    
    $router->addRoute('GET', '/inicio/Empleado', 'EmpleadoController@index');
    $router->addRoute('GET', '/empleado/register', 'EmpleadoController@registerForm');
    $router->addRoute('POST', '/empleado/create', 'EmpleadoController@create');
    $router->addRoute('GET', '/empleadoEdit/{id}', 'EmpleadoController@editForm'); 
    $router->addRoute('POST', '/empleadoEdit', 'EmpleadoController@edit');
    $router->addRoute('DELETE', '/empleado/{id:\d+}', 'EmpleadoController@delete');
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
