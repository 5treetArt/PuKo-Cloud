<?php

if(!defined('PUKO')){
    die('No direct access');
}

namespace io{
    
    function init(){
        require('request.php');
        require('response.php');
        require('cookie.php');
        
        require('class' . DIRECTORY_SEPARATOR . 'Query.php');
    }
}

