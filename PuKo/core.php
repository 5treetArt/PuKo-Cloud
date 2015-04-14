<?php

namespace core;

if(!defined('PUKO')){
    die('No direct access');
}

function start_b(){
    ob_start();//включает буферизацию вывода.
    ob_implicit_flush(false);//выключает неявную очистку.
    
    $SETTINGS = $GLOBALS['SETTINGS'];
    
    \DB_Driver::connect($SETTINGS['db_server'], $SETTINGS['db_username'], $SETTINGS['db_password']);
}

function end_b(){
    \DB_Driver::close();
    $buffer = ob_get_contents();//возвращает содержимое буфера вывода.
    ob_end_clean();//очищает буфер вывода и отключает буферизацию вывода.
    return $buffer;
}

//function _autoload_by_map($__class_name){
//
//    $class_map = array(
//        'model\User' => 'engine' . DIRSEP . 'mvc' . DIRSEP . 'model' . DIRSEP . 'User.php',
//        );
//    
//    if(isset($class_map[$__class_name])) {
//        include ROOT . DIRSEP . $class_map[$__class_name];
//        return true;
//    } 
//    return false;
//}

 
    