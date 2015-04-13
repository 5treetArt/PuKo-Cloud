<?php
namespace io;
    
if(!defined('PUKO')){
    die('No direct access');
}    

function init(){
    require('request.php');
    require('response.php');
    require('cookie.php');

    //require('class' . DIRECTORY_SEPARATOR . 'Query.php');
}


