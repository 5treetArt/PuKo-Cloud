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
    
    if(isset($get['puko_backend_query'])){
        $query->set(trim(strip_tags($get['puko_backend_query']), '/'));
    }elseif (isset($get['puko_query'])) {
        $query->set(trim(strip_tags($get['puko_query']), '/'))
    }
}