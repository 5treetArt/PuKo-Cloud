<?php

/**
 *Содержит список подключаемых модулей и глобальные переменные
 */

//-------------------------------------------------------
//глобальные переменные

global $CONFIGS;
$CONFIGS["SITE_NAME"] = "PuKo Cloud";

//-------------------------------------------------------
//подключение функций ядра
function set_core(){
    
    //Служебные фенкции и модули
    $BIN_ARR =array(
    "wrapper"
    );
    
    foreach ($BIN_ARR as $BIN){
        include_once("bin/".$BIN.".php");
    }
}

//-------------------------------------------------------
//подключение млдулей
function set_module(){
    
    //Встраиваемые модули
    $MODULES_ARR= array(
        "auth",
        "host"
    );
    
    $include_arr = func_get_args();
    
    if($include_arr == array()){
        $include_arr = $MODULES_ARR;
    }
    
    foreach ($include_arr as $include){
        if(in_array($include, $MODULES_ARR)){
            include_once("module/".$include."/init.php");
        }
    }
}


