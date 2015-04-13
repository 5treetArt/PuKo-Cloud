<?php

namespace core;

if(!defined('PUKO')){
    die('No direct access');
}

function start_b(){
    ob_start();//включает буферизацию вывода.
    ob_implicit_flush(false);//выключает неявную очистку.
}

function end_b(){
    $buffer = ob_get_contents();//возвращает содержимое буфера вывода.
    ob_end_clean();//очищает буфер вывода и отключает буферизацию вывода.
    return $buffer;
}

 
    