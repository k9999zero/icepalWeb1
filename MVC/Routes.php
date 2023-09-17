<?php

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $router) {
    $router->addRoute('GET', '/user', 'UserController@index');
    $router->addRoute('POST', '/user', 'UserController@create');

    $router->addRoute('GET', '/', 'MainController@index');

    $router->addRoute('GET', '/Encargado', 'EncargadoController@index');
    $router->addRoute('GET', '/Veterinario', 'VeterinarioController@index');
  
    $router->addRoute('GET', '/Corral', 'CorralController@index');
    $router->addRoute('GET', '/Reg_corral', 'CorralController@CorralForm');
    $router->addRoute('POST', '/Create_corral', 'CorralController@create');
  


    $router->addRoute('GET', '/Cerdo', 'CerdoController@index');
    $router->addRoute('GET', '/Reg_cerdo', 'CerdoController@cerdoForm');
    $router->addRoute('POST', '/Create_cerdo', 'CerdoController@create');

    $router->addRoute('GET', '/Madre', 'MadreController@index');
    $router->addRoute('GET', '/Reg_madre', 'MadreController@madreForm');
    $router->addRoute('POST', '/Create_madre', 'MadreController@create');

    $router->addRoute('GET', '/Lechon', 'LechonController@index');
    $router->addRoute('GET', '/Reg_lechon', 'LechonController@lechonForm');
    $router->addRoute('POST', '/Create_lechon', 'LechonController@create');

    $router->addRoute('GET', '/Parto', 'Ficha_partoController@index');
    $router->addRoute('GET', '/Reg_parto', 'Ficha_partoController@partoForm');
    $router->addRoute('POST', '/Create_parto', 'Ficha_partoController@create');
    
    $router->addRoute('GET', '/Diagnostico', 'DiagnosticoController@index');
    $router->addRoute('GET', '/Reg_diagnostico', 'DiagnosticoController@diagnosticoForm');
    $router->addRoute('POST', '/Create_diagnostico', 'DiagnosticoController@create');

    $router->addRoute('GET', '/Medicamento', 'MedicamentoController@index');
    $router->addRoute('GET', '/Reg_med', 'MedicamentoController@medicamentoForm');
    $router->addRoute('POST', '/Create_medicamento', 'MedicamentoController@create');

    $router->addRoute('GET', '/Celo', 'CeloController@index');
    $router->addRoute('GET', '/Reg_celo', 'CeloController@celoForm');
    $router->addRoute('POST', '/Create_celo', 'CeloController@create');



  
 
    
    


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
