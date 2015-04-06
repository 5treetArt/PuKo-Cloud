<?php

/* 
 * Содержит функции-обертки, которые надо испольовать в шаблоне представления
 * вместо системных
 */

//переадресация
function to_page($__url){
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=$__url'>";
}

//управление сессиями
function session_control($command){
    $func = "session_".$command;
    $func();
}

//установка cookie
function set_cookies($__name, $__value = "", $__expire = null, $__path = "", $__domain = "", $__secure = null){
    setcookie($__name, $__value, $__expire, $__path, $__secure, $__domain, $secure);
}