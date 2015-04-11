<?php

if(!defined('PUKO')){
    die('No direct access');
}

namespace model\auth{
    
    function get_data($__query_arr){
        
        set_required();
        io\init();
        
        $data_arr = array();
        
        if(empty($__query_arr)){
            return $data_arr;
        }
        
        //login________________________________
        $login = io\request\get('login');
        
        if($login == 'success'){
            $data_arr['login'] = true;
            io\cookie\set('authorized', true);
            return $data_arr;
        }
        
        if($login == 'error'){
            $data_arr['login'] = false;
            return $data_arr;
        }
        //_____________________________________
        
        //auth________________________________
        $post = io\request\post();
        
        if(isset($post['login_submit'])){
            $login = strip_tags(trim($post['login']));
            $password = $post['password'];
            
            if(model\user\login($login, $password)){
                $data_arr['authorized'] = true;
            }else{
                $data_arr['authorized'] = false;
            }
        }
        //_____________________________________
        
        return $data_arr;
    }
    
    function set_required(){
        require(ROOT . DIRECTORY_SEPARATOR . 'io' . DIRECTORY_SEPARATOR . 'init.php');
        require('user.php');
    }
}

