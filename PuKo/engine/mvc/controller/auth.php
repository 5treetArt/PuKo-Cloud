<?php
namespace controller\auth;

if(!defined('PUKO')){
    die('No direct access');
}

function execute($__query_arr){
    
    require(MVC . DIRSEP . 'model' . DIRSEP .'auth.php');
    require(MVC . DIRSEP . 'view' . DIRSEP .'auth.php');
    
    $data = \model\auth\get_data($__query_arr);

    $response = \view\auth\get_response($data);

    return $response;
}
