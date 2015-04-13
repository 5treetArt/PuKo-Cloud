<?php
namespace io\request;
    
if(!defined('PUKO')){
    die('No direct access');
}    

function get($key = null){
    if($key === null){
        return $_GET;
    }

    return isset($_GET[$key])
        ? $_GET[$key]
        : null;
}

function post($key = null){
    if($key === null){
        return $_POST;
    }

    return isset($_POST[$key])
        ? $_POST[$key]
        : null;
}
