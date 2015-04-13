<?php

namespace engine\base;

if(!defined('PUKO')){
    die('No direct access');
}

define('VERSION', '0.1');

//require(ROOT . DIRSEP . 'io' . DIRSEP . 'init.php');

//\io\init();

function run(){
    //$query = new \io\Query();

    $query = '';
    
    $get = \io\request\get();

    if (isset($get['puko_query'])) {
        $query = trim(strip_tags($get['puko_query']), '/');
    }
    
    $query_arr = explode('/', $query);
    
    $route = get_route(array_shift($query_arr));

    $controller = get_controller($route);

    $action = $controller . 'execute';

    return $action($query_arr);
}

function get_route($__path = '/'){

    $routes = include('routes.php');

    if(isset($routes[$__path])){
        return $routes[$__path];
    } elseif (isset($routes['*'])) {
        return $routes['*'];
    } else {
        return $routes['/'];
    }
}

/**
 * Функция проверяет, включена ли авторизация, и ели включена, то, если пользователь
 * не зарегистрирован, вызывает контроллер авторизации. Если авторизован, то вызывается
 * контроллер по запросу.
 * @param string $__route
 * @return string
 */
function get_controller($__route){
    $SETTINGS = $GLOBALS['SETTINGS'];
    
    if($SETTINGS['auth'] === true){
        if(\io\cookie\get('authorized') == false){
            require(MVC . DIRSEP . 'controller' . DIRSEP . 'auth.php');
            return 'controller\\auth\\';
        }
    }

    require($__route . '.php');
    return 'controller\\' . array_pop(explode('/', $__route)) . '\\';//controller\module_name\
}
