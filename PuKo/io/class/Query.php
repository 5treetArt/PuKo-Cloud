<?php

namespace io;

if(!defined('PUKO')){
    die('No direct access');
}

class Query{
    private $_query = '';
    private static $_query_arr = array();
    
    public function set($__query){
        if($this->_query !== '' && $this->_query !== '/') {

            $this->_query_arr = explode('/', $this->_query);
    
        } 
        
        if(empty($this->_query_arr)){
            $this->_query_arr[] = '/';
        }
    }
    
    public static function get_arr() {
        return self::$_query_arr;
    }
}
