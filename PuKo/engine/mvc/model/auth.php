<?php
namespace model\auth;

if(!defined('PUKO')){
    die('No direct access');
}

function get_data($__query_arr){

    set_required();

    $user = new \model\user\User();
    
    $user->login('mail.ru', 'dfsdf');
    
    $data_arr = array();

    if(empty($__query_arr)){
        return $data_arr;
    }

    //register_________________________________

    if(array_shift($__query_arr) == 'register'){
        $post = \io\request\post();

        if(isset($post['register_submit'])){
            $login = strip_tags(trim($post['login']));
            $password = $post['password'];

            if(model\user\login($login, $password)){
                $data_arr['authorized'] = true;
            }else{
                $data_arr['authorized'] = false;
            }
        }

        return $data_arr;
    }

    //_____________________________________

    //login_________________________________

    $login = \io\request\get('login');

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

    //auth_________________________________

    $post = \io\request\post();

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
    require(MVC . DIRSEP . 'model' . DIRSEP . 'user.php');
}

