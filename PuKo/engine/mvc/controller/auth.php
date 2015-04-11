<?php

if(!defined('PUKO')){
    die('No direct access');
}

namespace controller\auth{

    function execute($__query_arr){
        require('../model/auth.php');
        require('../view/auth.php');
        
        $data = model\auth\get_data($__query_arr);
        
        $response = view\auth\get_response($data);
        
        return $response;
    }
}