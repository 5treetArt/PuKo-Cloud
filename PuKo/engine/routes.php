<?php

if (! defined('PUKO')){
    die('No direct access');
}

define('CONTROLLERS', ROOT . DIRSEP . 'engine' .DIRSEP . 'mvc' . DIRSEP . 'controller');

return array(
    '/' => CONTROLLERS . DIRSEP . 'index',
    'auth' => CONTROLLERS . DIRSEP . 'auth',
    'host' => CONTROLLERS . DIRSEP . 'host',
    
);