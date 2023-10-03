<?php


require_once __DIR__ . "/../vendor/autoload.php";
// echo "Hello World";

// Get all routes

$routes = require_once __DIR__ . "/../routes/web.php";

$request = $_SERVER['REQUEST_URI'];

$request = explode("?", $request)[0];

[$controller, $action] = $routes[$request] ?? [null, null];


// if(isset($routes[$request])) {
//     $controller = $routes[$request][0] ?? null;
//     $action = $routes[$request][1] ?? null;
    
//     // echo $controller;
//      // echo $action;

//    if($controller && $action) {

//         $newController = new $controller();


        
//         $newController->$action();
    
//    }

// }


if($controller && $action) {
    $controllerinstance = new $controller();


    $controllerinstance->$action();
}else {
    throw new Exception("404 Not Found");
}
  





?>