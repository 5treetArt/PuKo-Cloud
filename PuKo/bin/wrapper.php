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
