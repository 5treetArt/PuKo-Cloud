<?php
namespace view\auth;

if(!defined('PUKO')){
    die('No direct access');
}

function get_response($__response){
   include(ROOT . DIRSEP . 'template' . DIRSEP . 'auth' . DIRSEP . 'auth.php');
   return true;
}
