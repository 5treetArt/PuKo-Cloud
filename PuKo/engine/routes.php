<?php

if (! defined('PUKO')){
    die('No direct access');
}

define('CONTROLLERS', 'engine/mvc/controller');

return array(
    '/' => CONTROLLERS . DIRECTORY_SEPARATOR . 'index',
    'auth' => CONTROLLERS . DIRECTORY_SEPARATOR . 'auth',
    'host' => CONTROLLERS . DIRECTORY_SEPARATOR . 'host',
    
);