<?php

$uri = $_SERVER['PATH_INFO'] ?? null;

// initial config
require_once 'path.php';

//Constants of path
define('CONTROLLERS', getControllersPath());
define('COMPONENTS', getComponentsPath());
define('FUNCTIONS', getFunctionsPath());
define('PAGES', getPagesPath());

//Requeries 
require_once 'routes.php';
require_once FUNCTIONS . 'functions.php';

if(empty($url)){
    makeHome();

    return;
}

$route = resolvendoRoute($uri, $routes);

if(!$route || empty($route['call']) || !function_exists($route['call'])) {
    makeNotFound();
    
    return;
} 