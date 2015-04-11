<?php

if (! defined('PUKO')){
    die('No direct access');
}

function init(){
    
    if(version_compare(PHP_VERSION, '5.3.0') < 0){
        die('Require PHP version 5.3.0 or later');
    }
    
    if(defined('SYS_DEBUG')){
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        
        define('SYS_START_TIME', microtime(true));
        
        define('SYS_START_MEMORY', memory_get_usage());
    } else{
        error_reporting(0);
        ini_set('display_errors', 0);
    }
    
    ini_set('magic_quotes_runtime', '0');
    ini_set('magic_quotes_gpc', '0');
    ini_set('session.use_cookies', '1');
    ini_set('session.use_only_cookies', '1');
    ini_set('session.use_trans_sid', '0');
    ini_set('session.cache_limiter', 'none');// Don't send HTTP headers using PHP's session handler.   
    ini_set('session.cookie_httponly', '1');// Use httponly session cookies.
    ini_set('date.timezone', 'Europe/Moscow');

    setlocale(LC_ALL, 'rus');
    
    include('config.php');
    
    set_required();
}

function set_required(){
    
    if(!defuned('MODULES')){
        die('Cannot find modules');
    }
    
    foreach (MODULES as $module){
        require('$module' . DIRECTORY_SEPARATOR . 'init.php');
        $init_module = $module. '\\init';
        $init_module();
    }
    
}