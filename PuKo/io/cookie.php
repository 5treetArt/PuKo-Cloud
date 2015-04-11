<?php

if(!defined('PUKO')){
    die('No direct access');
}

namespace io\cookie{
    
    function get($__param){
        if(isset($_COOKIE[$__param])){
            return $_COOKIE[$__param];
        }else{
            return null;
        }
    }
    
    function set($__param, $__value){
        $_COOKIE[$__param] = $__value;
    }
}