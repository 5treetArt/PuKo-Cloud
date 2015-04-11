<?php

if(!defined('PUKO')){
    die('No direct access');
}

define('VERSION', '0.1');

require(ROOT . DIRECTORY_SEPARATOR . 'io' . DIRECTORY_SEPARATOR . 'init.php');

io\init();

function run(){
    $query = new Query();
    
    $get = io\request\get();
    
    if (isset($get['puko_query'])) {
        $query->set(trim(strip_tags($get['puko_query']), '/'));
    }
    
    $route = get_route(array_shift($query->get_arr()));
    
    $controller = get_controller($route);
    
    $action = $controller . 'execute';
    
    return $action($query->get_arr());
}

function get_route($__query = '/'){

    $routs = include('routs.php');
    
    if(isset($routs[$__query])){
        return routs[$__query];
    } elseif (isset($routs['*'])) {
        return routs['*'];
    } else {
        return routs['/'];
    }
}

function get_controller($__route){
    if($SETTINGS['auth'] === true){
        if(io\cookie\get('authorized') == false){
            require('engine' . DIRECTORY_SEPARATOR . 'mvc' . DIRECTORY_SEPARATOR . 'controller' . 'auth.php');
            return 'controller\\auth\\';
        }
    }
    require($__route . '.php');
    return 'controller\\' . array_pop(explode('/', $__route)) . '\\';//controller\module_name\
}