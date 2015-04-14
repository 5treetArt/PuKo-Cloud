<?php

namespace view;

if(!defined('PUKO')){
    die('No direct access');
}

define('TEMPLATES', ROOT . DIRSEP .'template');

class AuthView{
    private $_parameters_arr;
    private $_template;

    public function set($__param, $__value){
        $this->_parameters_arr[$__param] = $__value;
    }
    
    public function prepare() {
        if(isset($_parameters_arr['register'])){
            $this->_template = TEMPLATES . DIRSEP . 'auth' . DIRSEP . 'register.php';
        }
        
        $this->_template = TEMPLATES . DIRSEP . 'auth' . DIRSEP . 'login.php';
    }
    
    public function show(){
        include($this->_template);
    }
}
