<?php
namespace auth;

if(!defined('PUKO')){
    die('No direct access');
}

function execute($__query_arr){
    
    require(MVC . DIRSEP . 'model' . DIRSEP .'User.php');
    require(ENGINE . DIRSEP . 'identification' . DIRSEP . 'view' . DIRSEP .'AuthView.php');
    
    $user = new \model\User();
    $view = new \view\AuthView();
    
    $post = \io\request\post();
    
    if(isset($post['email']) && isset($post['password'])){
        $email = $post['email'];
        $password = $post['password'];
    }
    
    if(array_shift($__query_arr) == 'register'){
        $view->set('action', 'register');
        
        if(\io\request\post('register_submit') === true ){
                        
            if($user->is_unique($email)){
                
                $user->register($email, $password);
                $view->set('registered', true);                
                
            }  else {
                $view->set('registered', false);
            }
        }
    }else{
        $view->set('action', 'login');
        
        if( \io\request\post('login_submit') === true ){
            if($user->login($email, $password)){
                $view->set('authorised', true);
            }else{
                $view->set('authorised', false);
            }
        }
    }

    $view->prepare();
    $view->show();
}
